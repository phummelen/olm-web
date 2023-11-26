<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\AddTagsRequest;
use App\Jobs\Api\AddTags;
use App\Models\Photo;
use Illuminate\Support\Facades\Log;

class AddTagsToUploadedImageController extends Controller
{
    /**
     * Save litter data to a recently uploaded photo
     * Note: when photo was uploaded, picked_up was set
     *
     * version 2.2
     */
    public function __invoke(AddTagsRequest $request)
    {
        $user = auth()->user();
        $photo = Photo::find($request->photo_id);

        if ($photo->user_id !== $user->id || $photo->verified > 0) {
            abort(403, 'Forbidden');
        }

        Log::channel('tags')->info([
            'add_tags' => 'mobile',
            'request' => $request->all(),
        ]);

        dispatch(new AddTags(
            $user->id,
            $photo->id,
            ($request->litter ?? $request->tags) ?? [],
            $request->custom_tags ?? []
        ));

        $pickedUp = $request->filled('picked_up')
            ? $request->picked_up
            : ! $user->items_remaining;

        $photo->remaining = ! $pickedUp;
        $photo->save();

        return [
            'success' => true,
            'msg' => 'dispatched',
        ];
    }
}
