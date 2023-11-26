<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlockchainController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function updateWallet(Request $request)
    {
        $wallet = $request->wallet;
        $user = Auth::user();
        $user->eth_wallet = $wallet;
        $user->save();
    }

    public function removeWallet(Request $request)
    {
        $user = Auth::user();
        $user->eth_wallet = null;
        $user->save();
    }
}
