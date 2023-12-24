<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;
use App\Models\About;
use App\Models\Services;
use App\Models\Slider;

class MenuController extends Controller
{
    public function home(){
        $sliders = Slider::query()->get();
        $services = Services::query()->get();
        $about = About::query()->first();
       return view('home' , compact('sliders','services','about'));
    }

    public function about(){
        $about = About::query()->first();
        return view('about', compact('about'));
    }

    public function services(){
        $services = Services::query()->get();
        return view('services', compact('services'));
    }

    public function contact(){
        $settings = Settings::query()->first();
        return view('contact', compact('settings'));
    }
}