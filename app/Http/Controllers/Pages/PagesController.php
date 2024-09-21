<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('pages.home');
    }

    public function services(){
        return view('pages.services');
    }

    public function about(){
        return view('pages.about');
    }


    public function service($id){
        return view('pages.service');
    }

    public function contact(){
        return view('pages.contact');
    }
}
