@extends('layouts/form_layout')
@section('form')
    <div class="page-form">
        <h4 class="mb-6">Submit Work</h4>
        <p class="">Have something interesting to share with us? An essay? Some art? Submit your work and get a
            chance to be featured on our website! We encourage original work, always.</p>

        <h5 class="small">Instructions</h5>
        <ul>


            <li><strong>-</strong> Creativity and Authenticity are two key criteria for evaluation</li>
            <li><strong>-</strong> One entry per participant for each theme</li>
            <li><strong>-</strong> Zero tolerance for plagiarism</li>
            <li><strong>-</strong> Editor's decision will be final</li>

        </ul>
        <form class="ui form" method="POST" action="/forms/submission" enctype="multipart/form-data">
            @csrf
            @if($errors->any())
                <div class="ui negative message">
                    <i class="close icon"></i>
                    <div class="header">
                        There seems to be error(s) in your entry.
                    </div>
                    <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                    <p>Please check and try again.
                    </p></div>
            @endif


            @if(session('message-success'))
                <div id="india-notification" class="notification">
                    <div class="content">
                        <p class="mb-2">Thank you for submitting the message!<br/></p>
                        <p>We will get back to you shortly.</p>
                        <div id="notification-close-btn" class="close-btn">
                            [x] Close
                        </div>
                    </div>
                </div>
            @endif


            <div class="max-w-3xl mx-auto">
                <div class="mx-auto min-w-full">
                    <h5>Work</h5>


                    <div class="field">
                        <label for="work_title">Title</label>
                        <input required id="work_title" name="work_title" type="text"
                               placeholder="">
                    </div>

                    <div class="field">
                        <label for="work_desc">Description</label>
                        <textarea required name="work_desc" id="work_desc" cols="30"
                                  rows="10"></textarea>
                    </div>

                    <div class="field">
                        <label for="filepath">Upload File</label>
                        <input required type="file" name="filepath">
                    </div>


                    <h5>About You</h5>
                    <div class="field">
                        <label for="name">Name</label>
                        <input required id="name" name="name" type="text"
                               placeholder="First Name, Last Name">
                    </div>

                    <div class="field">
                        <label for="dob">Date of Birth</label>
                        <input required id="dob" name="dob" type="text"
                               placeholder="Example: 24/01/2020">
                    </div>

                    <div class="field">
                        <label for="class">Grade or Class</label>
                        <input required id="class" name="class" type="text"
                               placeholder="Example: Class 4">
                    </div>

                    <div class="field">
                        <label for="phone">Parent's Phone Number</label>
                        <input maxlength="10" minlength="10" required id="phone"
                               name="phone"
                               type="number" placeholder="Phone Number">
                    </div>

                    <div class="field">
                        <label for="email">Parent's Email</label>
                        <input required id="email" name="email" type="email"
                               placeholder="example@gmail.com">
                    </div>

                    <div class="field">
                        <label for="location">Location</label>
                        <input required id="location" name="location" type="text"
                               placeholder="City, State, Country">
                    </div>


                    <div class="field">
                        <input required class="inline-block mr-2 w-auto" type="checkbox" name="declaration" value="checked"> <div class="inline-block">I declare that this submission has been written by me and is my original work</div><br>
                    </div>
<div class="field">
    <input required class="inline-block mr-2" type="checkbox" name="consent" value="checked"> I give my consent for my work to be published on the TheDotExpress website if it is shortlisted<br>
</div>

                    <button class="std-btn primary" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>

@endsection