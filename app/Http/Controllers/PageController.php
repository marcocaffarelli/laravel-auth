<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('guests.index');
    }

    public function index(){
        return view('guests.posts.index');
    }

    public function blog(){
        return view('guests.blog');
    }

    public function about(){
        return view('guests.about');
    }

    public function contacts(){
        return view('guests.contacts');
    }
}
