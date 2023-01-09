<?php

namespace App\Http\Controllers\esodev;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuisommenousController extends Controller
{
    //
    public function index()
    {
        return view('template.quisommenous.quisommesnous');
    }
}
