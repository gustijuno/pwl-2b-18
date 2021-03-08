<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactus(){
        return view('contact-us')
            ->with('page', 'Halaman Contact Us')
            ->with('url', 'https://www.educastudio.com/contact-us');

    }
}
