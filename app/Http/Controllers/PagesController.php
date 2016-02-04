<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function home() {

        $people = ['Kevin', 'Ben H', 'Ben S', 'Ben R'];

        return view('welcome', compact('people'));

    }
}
