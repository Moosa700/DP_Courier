<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function register_form()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'user_type'=> 'user'
        ]);

        return view('auth.user_login');

        
    }

    public function login_form()
    {
        return view('auth.login');
    }

    public function user_login_form()
    {
        return view('auth.user_login');
    }

    public function login(Request $request)
    {
        $user = User::where('email',$request->email)->first();
        if($user)
        {
            if(Hash::check($request->password, $user->password))
            {

                
                    Auth::login($user);
                    session()->flash('success','login successfuly!');
                    if($user->user_type == 'user')
                    {
                        return redirect()->route('user.courier.createform');
                    }
                    else
                    {
                        return redirect()->route('admin.dashboard');

                    }
       
            }
            else
            {
                session()->flash('failed','password is not correct!');
                return redirect()->route('login.form');
            }
        }
        else
        {
            session()->flash('failed','email is not correct!');
            return redirect()->route('login.form');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login.form');
    }
}
