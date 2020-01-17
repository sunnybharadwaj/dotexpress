<?php

namespace App\Http\Controllers;

use App\Mail\PledgeEmail;
use App\Mail\SubmissionMail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\PledgePost;
use App\Message;
use App\WorkSubmission;

class FormsController extends Controller
{
    public function pledge() {
        return view('forms/pledge');
    }

    public function contact(Request $request) {
        return view('forms/contact');
    }

    public function submission() {
        return view('forms/submission');
    }

    public function pledge_post(Request $request) {
        $validatedData = $request->validate([
            "copies" => ["required"],
            "copies_other" => [""],
            "name" => "required",
            "lang" => "required",
            "org_name" => "required",
            "channel" => "required",
            "channel_other" => "",
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

    public function contact_post(Request $request) {
        $validatedData = $request->validate([
            "name" => "required",
            "email" => "required",
            "phone" => "required",
            "message" => "required"
        ]);
        $data = (object)$validatedData;
        Message::create($validatedData);
        $emails = ['lakshmi@shrishtiart.com', 'akkineni.sarada@gmail.com','sunny@chakradesign.co', 'reemagpt@gmail.com', 'adil@chakradesign.co'];
        \Mail::to('sunny@chakradesign.co')
            ->queue(new ContactMail($data));
        session()->flash("message", "Thank you for your submission. We will get back to you soon.");
        return redirect('/');
    }

    public function submission_post(Request $request) {
//        dd($request->all());
        $validatedData = $request->validate([
            "name" => ["required"],
            "email" => ["required"],
            "phone" => "required",
            "dob" => "required",
            "class" => "required",
            "school" => "required",
            "declaration" => "required",
            "consent" => "required",
            "work_title" => "required",
            "work_desc" => "required",
            "filepath" => "required"
        ]);

//        dd(request('file_upload'));
//        validation
//        Store Image
        $image_upload = $request->file('filepath');
        $image_path = $image_upload->store('submissions', ['disk' => 'public']);
        $data = (object)$validatedData;
        $data->filepath = $image_path;

        WorkSubmission::create($validatedData);
        $emails = ['lakshmi@shrishtiart.com', 'akkineni.sarada@gmail.com','sunny@chakradesign.co', 'reemagpt@gmail.com', 'adil@chakradesign.co'];
        \Mail::to('sunny@chakradesign.co')
            ->queue(new SubmissionMail($data));
        session()->flash("message", "Thank you for your submission. We will get back to you soon.");
        return redirect('/');
//        create/save
//        send message to session
//        send email notification
    }
}
