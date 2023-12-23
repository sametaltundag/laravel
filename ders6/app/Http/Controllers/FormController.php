<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function formSave(Request $request){
        /*
        $request->validate([
            'name' => 'required|string|min:3|max:30',
            'surname' => 'required|string|min:3|max:50',
            'age' => 'required|integer',
            'team' => 'required|string|max:25',
        ]);
        return $request;
        */

        $validate = Validator::make($request->all(), [
            'name' => 'required|string|min:3|max:30',
            'surname' => 'required|string|min:3|max:50',
            'age' => 'required|integer|between:1,35',
            'team' => 'required|string|max:25',
        ]);

        if($validate->fails()){
            return $validate->errors();
        }

        return $request;
        
    }
}
