<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\contents;

class mlesz extends Controller
{
    public function index() {
        return view('index', [
            "title" => "Home",
            "contents" => contents::all()
        ]);
    }

    public function about() {
        return view('about', [
            "title" => "About"
        ]);
    }
}
