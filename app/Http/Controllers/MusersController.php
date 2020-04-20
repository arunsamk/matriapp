<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Musers;

class MusersController extends Controller
{
    //
    public function registerview(){
        return view('register');
    }

    public function aboutview(){
        return view('about');
    }

    public function profileview(){
        $musers = Musers::all();
        return view('profile', ['musers' => $musers,]);
    }
}
