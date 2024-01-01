<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        //$users = User::query()->get();
        $users = User::paginate(100);
        return view('index',compact('users'));
    }
}
