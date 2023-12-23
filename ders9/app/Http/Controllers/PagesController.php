<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages;

class PagesController extends Controller
{
    // 1. Create Yöntemi
    public function create()
    {
        $pages = new Pages;
        $pages->title = "Laravel 10";
        $pages->subtitle = "Laravel öğreniyor, gelişiyorum";
        $pages->content = "Harikasın dostum";
        $pages->save();
        return "created is success";
    }


    // 2. Create Yöntemi
    public function createNew(){
        Pages::create([
            'title' => 'Laravel 11',
            'subtitle' => 'Laravel geliştiriyor, gelişiyorum',
            'content' => 'You are awesome bro! Oh my god'
        ]);
        return 'created is success';
    }


    public function read(){
        $pages = Pages::query()->get();
        return view('read', compact('pages'));
    }

    public function readById($id){
        $page = Pages::query()->find($id);
        $title = $page->title;
        $subtitle = $page->subtitle;
        $content = $page->content;
        return view('readById', compact('title', 'subtitle', 'content'));
    }

    public function updateById($id){
        $page = Pages::query()->find($id);
        $page->title = 'PHP 9';
        $page->subtitle = 'Alt başlık güncelleniyor.';
        $page->content = 'İçerik güncelleniyor.';
        $page->save();
        return 'updated is success';
    }

    public function deleteById($id){
        $page = Pages::query()->find($id);
        $page->delete();
        return 'deleted is success';
    }
}
