<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerHome extends Controller
{
    //
public function home(){
        return view('home.home');
    }
public function singIn(){
        return view('singIn');
    }
public function categorys(){
        return view('categorys');
    }
public function about(){
        return view('about');
    }
public function contscts(){
        return view('contscts');
    }

}
