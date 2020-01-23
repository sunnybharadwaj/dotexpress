<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{


    public function landing(Request $request) {
        return view('main');
    }
}
