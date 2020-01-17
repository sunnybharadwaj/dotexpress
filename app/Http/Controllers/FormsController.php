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

    public function contact(Request $request) {
        $validatedData = $request->validate([
            "name" => "required",
            "email" => "required",
            "phone" => "required",
            "message" => "required"
        ]);
        $data = (object)$validatedData;
        PledgePost::create($validatedData);
        $emails = ['lakshmi@shrishtiart.com', 'akkineni.sarada@gmail.com','sunny@chakradesign.co', 'reemagpt@gmail.com', 'adil@chakradesign.co'];
        \Mail::to('sunny@chakradesign.co')
            ->queue(new PledgeEmail($data));
        session()->flash("message", "Thank you for your submission. We will get back to you soon.");
        return redirect()->back();
    }

    public function submission() {
        return view('forms/submission');
    }

    public function pledge_post(Request $request) {
        dd($request->all());
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
        $emails = ['lakshmi@shrishtiart.com', 'akkineni.sarada@gmail.com','sunny@chakradesign.co', 'reemagpt@gmail.com', 'adil@chakradesign.co'];
        \Mail::to($emails)
            ->queue(new PledgeEmail($data));
        session()->flash("message", "Thank you for your submission. We will get back to you soon.");
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
