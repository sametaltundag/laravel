<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Profile;
use App\Models\Role;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){

        // Kullanıcılar
        $userWithProfile = User::with('profile')->get();

        // Makale başlıkları ve yorum metinleri
        $articleWithComment = Article::join('comments', 'articles.id', '=', 'comments.article_id')
        ->select('articles.title', 'comments.comment_text')
        ->get();

        // Ürünler ve Kategoriler

        return view('index',[
            'userWithProfile' => $userWithProfile,
            'articleWithComment' => $articleWithComment,
        ]);
    }
}
