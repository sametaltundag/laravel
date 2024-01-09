<?php

namespace App\Modules\TestModule\Controllers;
use App\Http\Controllers\Controller;
use App\Modules\TestModule\Models\Test;
use Illuminate\Http\Request;


class ModuleController extends Controller
{
    public function index(){
        $tests = Test::all();
        return view('TestModule::backend.index',compact('tests'));
    }

    
}
