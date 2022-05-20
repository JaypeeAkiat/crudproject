<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }


    public function login(){
        return view('auth/login');
    }

    public function welcome(){
        return view('home');
    }

    public function landing(){
        return view ('layouts.app');
    }

}
