<?php

namespace BCG\Http\Controllers;

use Illuminate\Http\Request;

use BCG\Http\Requests;
use BCG\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function home() {

        $people = ['Kevin', 'Ben H', 'Ben S', 'Ben R'];

        return view('welcome', compact('people'));

    }
}
