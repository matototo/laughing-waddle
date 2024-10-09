<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogEx01Controller extends Controller
{
    // Fonction index pour charge le home page
    public function index(){
        return view('home');
    }

    public function about(){
        return view('about');
    }
 
    public function article(){
        return view('article');
    }
 
    public function contact(){
        return view('contact');
    }

    public function contactForm(Request $request){
        //return $request;
        return view('contact', ['data' => $request]);
    }
}
