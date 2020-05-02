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

    public function loginview(){
        error_log(request('username'));
        error_log(request('pwd'));
        $musers = Musers::where('name', request('username', 'pwd'));
        // echo $musers;
        return view('login');
    }

    public function userstore(){
        // error_log(request());
        // error_log(request('name'));
        // error_log(request('email'));
        // error_log(request('phone'));
        // error_log(request('password'));
        $musers = new Musers();
        $musers ->name = request('name');
        $musers ->email = request('email');
        $musers ->contactno = request('phone');
        $musers ->password = request('password');
        // error_log($musers);
        $musers->save();
        return redirect('/');
    }
}
