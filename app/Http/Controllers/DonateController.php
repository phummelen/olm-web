<?php

namespace App\Http\Controllers;

use App\Donate;
use Exception;
use Illuminate\Http\Request;
use Stripe\Charge;
use Stripe\Customer;
use Stripe\Stripe;

class DonateController extends Controller
{
    /**
     *  Get the donation amounts
     */
    public function index()
    {
        return Donate::all();
    }

    public function submit(Request $request)
    {
        try {
            $this->doPayment($request->stripeToken, $request->stripeEmail, $request->amount);
        } catch (Exception $exception) {
            return $exception->getMessage();
        }

        return ['message' => 'Success!'];
    }

    protected function doPayment($token, $email, $amount)
    {
        Stripe::setApiKey(config('services.stripe.secret'));
        $customer = Customer::create([
            'email' => $email,
            'card' => $token,
        ]);
        Charge::create([
            'customer' => $customer->id,
            'amount' => $amount,
            'currency' => 'eur',
        ]);
    }
}
