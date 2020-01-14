<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function pledge() {
        return view('forms/pledge');
    }

    public function contact() {
        return view('forms/contact');
    }

    public function submission() {
        return view('forms/submission');
    }

    public function pledge_post() {
//        validation
//        create/save
//        send message to session
//        send email notification
        return redirect('/');
    }

    public function contact_post() {
//        validation
//        create/save
//        send message to session
//        send email notification
        return redirect('/');
    }

    public function submission_post() {
//        validation
//        create/save
//        send message to session
//        send email notification
        return redirect('/');
    }
}
