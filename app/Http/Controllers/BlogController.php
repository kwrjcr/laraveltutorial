<?php

namespace BCG\Http\Controllers;

use Illuminate\Http\Request;

use BCG\Http\Requests;
use BCG\Http\Controllers\Controller;

class BlogController extends Controller
{

    public function index () {
        return view('index');
    }
}
