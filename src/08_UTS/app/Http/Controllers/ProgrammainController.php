<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\programmain;

class ProgrammainController extends Controller
{
    public function programmain(){
        $programmain = Programmain::all();
        return view('programmain', ['posts'=>$programmain]);
}

}