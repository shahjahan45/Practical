<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function handlelogin(Request $request){
        //dd($request->all());
        // $request->validate([
        //     'username' => 'required|string|min:6',
        //     'useremail' => 'required|email',
        //     'userpassword' => 'required|string|min:8',
        // ], [
        //     'username.required' => 'This field cannot be empty',
        //     'useremail.required' => 'This field cannot be empty',
        //     'userpassword.required' => 'This field cannot be empty',
        // ]);

        // return $request;
        $messages = [
            'username.required' => 'This field cannot be empty',
            'username.string' => 'The username must be a string',
            'username.min' => 'The username must be at least 6 characters',
            'useremail.required' => 'This field cannot be empty',
            'useremail.email' => 'Please enter a valid email address',
            'userpassword.required' => 'This field cannot be empty',
            'userpassword.string' => 'The password must be a string',
            'userpassword.min' => 'The password must be at least 8 characters',
        ];

        $request->validate([
            'username' => 'required|string|min:6',
            'useremail' => 'required|email',
            'userpassword' => 'required|string|min:8',
        ], $messages);

        return $request;
    }
}
