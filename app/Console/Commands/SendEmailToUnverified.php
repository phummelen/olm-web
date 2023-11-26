<?php

namespace App\Console\Commands;

use App\Mail\UnverifiedReminder;
use App\Models\User\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendEmailToUnverified extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'olm:send-unverified';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a reminder email to unverified users.';

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
        $users = User::where('verified', 0)->get();
        foreach ($users as $user) {
            Mail::to($user->email)->send(new UnverifiedReminder($user));
        }
    }
}
