<?php

namespace App\Http\Controllers;

use App\Mail\PledgeEmail;
use Illuminate\Http\Request;
use App\PledgePost;

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

    public function pledge_post(Request $request) {
        $validatedData = $request->validate([
            "copies" => ["required"],
            "name" => "required",
            "lang" => "required",
            "org_name" => "required",
            "channel" => "required",
            "email" => "required",
            "phone" => "required",
            "message" => "required"
        ]);

        $data = (object)$validatedData;
        PledgePost::create($validatedData);
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
