<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\contents;

class mlesz extends Controller
{
    public function index() {
        return view('index', [
            "title" => "Index",
            "contents" => contents::all()
        ]);
    }
}
