<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function login(){
        return view("Login");
    }
    public function register(){
        return view("Register");
    }
    public function updatepass(){
        return view("Updatepass");
    }
}
