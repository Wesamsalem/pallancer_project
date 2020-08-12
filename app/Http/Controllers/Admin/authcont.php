<?php

namespace App\Http\Controllers\admin;

use App\Notify;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Msg;
use App\User;
use Illuminate\Support\Facades\Validator;

class authcont extends Controller
{
    //


    public function login(){
        return view('admin.login');
    }

    public function postIndex(Request $request)
    {
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required|string',
        ]);
        $username = $request->get('email');
        $password = $request->get('password');

        $admin['email'] = $username;
        $admin['password'] = $password;

        if (Auth::guard('web')->attempt($admin))
        {
            return redirect('/admin');
        }
        else
        {
            return redirect()->back();
        }
    }

    public function getLogout()
    {
        Auth::guard('web')->logout();
        return redirect('/admin');
    }

}

