<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('front.home');
    }

    public function list() {
        $comics = Comic::all();
        return view('front.list', compact('comics'));
    }

    public function listadmin() {
        $comics = Comic::all();
        return view('front.listadmin', compact('comics'));
    }


    public function logadmin() {
        return view('front.logadmin');
    }
}
