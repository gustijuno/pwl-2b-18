<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function aboutus(){
        return view('about-us')
            ->with('page', 'Halaman About Us ')
            ->with('url', 'https://www.educastudio.com/about-us');

    }
}
