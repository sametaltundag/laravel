<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;
use App\Models\About;
use App\Models\Services;

class MenuController extends Controller
{
    public function home(){
       return view('home');
    }

    public function about(){
        return view('about');
    }

    public function services(){
        return view('services');
    }

    public function contact(){
        return view('contact');
    }
}