<?php

namespace App\Console\Commands;

use App\Mail\NotUploaded;
use App\Models\User\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendEmailToNonuploaders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'olm:send-nonuploaders';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send an email to those who have verified but not uploaded yet';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $users = User::where('has_uploaded', 0)->get();
        foreach ($users as $user) {
            Mail::to($user->email)->send(new NotUploaded($user));
        }
    }
}
