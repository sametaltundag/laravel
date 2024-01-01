<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|min:3|max:50|string',
            'email' => 'required|email',
            'number' => 'required|integer',
            'password' => 'required|min:6|max:25',
            'date' => 'required|date',
            'photo' => 'image|mimes:jpg,png,jpeg|max:2048',
        ]);
    }
}
