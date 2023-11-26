<?php

namespace App\Http\Controllers;

use App\Models\User\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmailSubController extends Controller
{
    /**
     * Unsubscribe an Un-authenticated user from email subscriptions via Sent Email
     */
    public function unsubEmail(Request $request, $subToken)
    {
        $user = User::where('sub_token', $subToken)->first();

        $user->emailsub = 0;
        $user->save();

        $auth = false;
        $user = null;
        $verified = false;
        $unsub = true;

        return view('root', ['auth' => $auth, 'user' => $user, 'verified' => $verified, 'unsub' => $unsub]);
    }

    /**
     * Toggle Subscription to Emails
     * Todo - move this data to new user_settings table
     */
    public function toggleEmailSub(Request $request)
    {
        $user = Auth::user();
        $user->emailsub = ! $user->emailsub;
        $user->save();

        return ['sub' => $user->emailsub];
    }
}
