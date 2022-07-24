<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        // show ra giao diện admin
        return view('client.home.index');
    }


    public function about(){
        // show ra giao diện admin
        return view('client.home.about');
    }

    public function contact(){
        // show ra giao diện admin
        return view('client.home.contact');
    }

    public function blog(){
        // show ra giao diện admin
        return view('client.home.blog');
    }

    public function blog_detail(){
        // show ra giao diện admin
        return view('client.home.blog_detail');
    }

    public function booking_list(){
        // show ra giao diện admin
        return view('client.home.booking_list');

        
    }

    public function booking_detail(){
        // show ra giao diện admin
        return view('client.home.booking_detail');

        
    }
}
