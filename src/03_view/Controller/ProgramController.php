<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function karir(){
        return view('program')
            ->with('page', 'Halaman Karir')
            ->with('url', 'https://www.educastudio.com/program/karir');
    }

    public function magang(){
        return view('program')
            ->with('page', 'Halaman Magang')
            ->with('url', 'https://www.educastudio.com/program/magang');
    }

    public function kunjungan(){
        return view('program')
            ->with('page', 'Halaman Kunjungan Industri')
            ->with('url', 'https://www.educastudio.com/program/kunjungan-industri');
    }

}
