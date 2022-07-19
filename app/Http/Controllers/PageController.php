<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('front.home');
    }

    public function list() {
        return view('front.list');
    }

    public function read() {
        return view('front.read');
    }
}
