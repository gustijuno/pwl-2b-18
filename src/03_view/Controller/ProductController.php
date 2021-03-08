<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function edugames(){
        return view('product')
            ->with('page', 'Marbel Edu Games')
            ->with('url', 'https://www.educastudio.com/category/marbel-edu-games');
    }

    public function friendskidsgames(){
        return view('product')
            ->with('page', 'Marbel and Friends Kids Game')
            ->with('url', 'https://www.educastudio.com/category/marbel-and-friends-kids-games');
    }

    public function riristorybooks(){
        return view('product')
            ->with('page', 'Riri Story Books')
            ->with('url', 'https://www.educastudio.com/category/riri-story-books');
    }

    public function kolakkidssongs(){
        return view('product')
            ->with('page', 'Kolak Kids Songs')
            ->with('url', 'https://www.educastudio.com/category/kolak-kids-songs');

    }
}
