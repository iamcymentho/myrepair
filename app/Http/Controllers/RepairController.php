<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RepairController extends Controller
{
    //
     public function index(){

        return view('default');
    }

    public function about(){

        return view('about');
    }

    public function services(){

        return view('services');
    }

    public function testimonial(){

        return view('testimonial');
    }

    public function contact(){

        return view('contact');
    }
}
