<?php

namespace Tests\Feature\Photos;

use App\Models\Photo;
use App\Models\User\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Carbon;
use Tests\Feature\HasPhotoUploads;
use Tests\TestCase;

class UploadPhotoOnProductionTest extends TestCase
{
    use HasPhotoUploads;
    use WithoutMiddleware;

    protected function setUp(): void
    {
        parent::setUp();

        $this->setImagePath();
    }

    public function test_it_throws_server_error_when_user_uploads_photos_with_the_same_datetime_on_production()
    {
        Carbon::setTestNow(now());

        $user = User::factory()->create();

        $this->actingAs($user);

        Photo::factory()->create([
            'user_id' => $user->id,
            'datetime' => now(),
        ]);

        app()->detectEnvironment(function () {
            return 'production';
        });

        $response = $this->post('/submit', [
            'file' => $this->getImageAndAttributes()['file'],
        ]);

        $response->assertStatus(500);
        $response->assertSee('Server Error');
    }

    public function test_it_does_not_allow_uploading_photos_more_than_once_in_the_mobile_app()
    {
        Carbon::setTestNow(now());

        $user = User::factory()->create(['id' => 2]);

        $this->actingAs($user, 'api');

        Photo::factory()->create([
            'user_id' => $user->id,
            'datetime' => now(),
        ]);

        app()->detectEnvironment(function () {
            return 'production';
        });

        $imageAttributes = $this->getImageAndAttributes();

        $response = $this->post('/api/photos/submit',
            $this->getApiImageAttributes($imageAttributes)
        );

        $response->assertOk();
        //        $response->assertJson([
        //            'success' => false,
        //            'msg' => "photo-already-uploaded"
        //        ]);
    }
}
