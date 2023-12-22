<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('pages.home');
    }

    public function about(){
        return view('pages.about');
    }
    

    // Compact ile veri gönderme
    public function contact(){
        
    }

    public function student(){
        
        $student = ["ali", "veli","mehmet"];
        $number = [1,2,3];

        // Compact ile veri gönderme
        // return view('pages.student', compact('student', 'number'));

        // With ile veri gönderme
        return view('pages.student')->with('students', $student);
    }
}
