<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
    	return "ok";
    }


    public function logout()
    {
    	auth()->logout();
    	return redirect('/');
    }


}
