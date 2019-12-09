<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
    	return view('user.master');
    }


    public function logout()
    {
    	auth()->logout();
    	return redirect('/');
    }


}
