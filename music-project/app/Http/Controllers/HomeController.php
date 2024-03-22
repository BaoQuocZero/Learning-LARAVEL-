<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Artitle;

class HomeController extends Controller
{
    public function getAllArticles()
    {
        $articles = Artitle::all();
        return view('home', compact('articles'));
    }
}