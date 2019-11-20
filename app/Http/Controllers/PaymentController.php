<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;

class PaymentController extends Controller
{
    public function paynow(Request $request){

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $request->input('stripeToken'),
                "description" => "Supacoderz Laravel 6.4 Stripe Payment Test!" 
        ]);
  
        return 'Payment Success!';

        
    }
}
