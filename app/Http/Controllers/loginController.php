<?php

namespace App\Http\Controllers;

use App\Models\PaymentGetaway;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


class loginController extends Controller
{


    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('login')
                ->withErrors($validator)
                ->withInput();
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->status == 1) {
                return redirect()->intended('/dashboard');
            } else {
                Auth::logout();
                return redirect()->route('login')
                    ->withErrors([
                        'email' => 'Invalid email or password',
                    ])
                    ->withInput();
            }
        } else {
            return redirect()->route('login')
                ->withErrors([
                    'email' => 'Invalid email or password',
                ])
                ->withInput();
        }
    }

    public function dashboard()
    {
        $payment = PaymentGetaway::paginate(10);

        return view('dashboard', ['users' => $payment]);
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


    public function register(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'firstname' => 'required',
                'lastname' => 'required',
                'job' => 'required',
                'email' => 'required|email',
                'password' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->route('register')
                    ->withErrors($validator)
                    ->withInput();
            }

            $u = new User;
            $u->firstname = $request->firstname;
            $u->lastname = $request->lastname;
            $u->job = $request->job;
            $u->email = $request->email;
            $u->password = Hash::make($request->password);
            $u->save();

            if($u){
                return redirect()->route('plans');
            }
            
        } catch (\PDOException $e) {
            dd($e);
        }
    }
}
