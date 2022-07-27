<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function login(){
        return "Login";
    }
    public function register(){
        return "Register"
    }
    public function updatepass(){
        return "Updatepass"
    }
}
