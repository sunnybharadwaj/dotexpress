@extends('layouts/form_layout')
@section('form')
    <div class="page-form">
        <h4 class="mb-6">Contact Us</h4>
        <p class="mb-4">Questions? Comments? Feedback? Feel free to contact us, even if it's just to say hi!</p>
        <form class="ui form" method="POST" action="/message">
            @csrf
            @if($errors->any())
                <div class="ui negative message">
                    <i class="close icon"></i>
                    <div class="header">
                        There seems to be error(s) in your entry.
                    </div>
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

                    <div class="field">
                        <label for="name">Full Name</label>
                        <input required id="name" name="name" type="text"
                               placeholder="First Name, Last Name">
                    </div>

                    <div class="field">
                        <label for="phone">Phone Number</label>
                        <input maxlength="10" minlength="10" required id="phone"
                                   name="phone"
                                   type="number" placeholder="Phone Number">
                    </div>

                    <div class="field">
                        <label for="email">Email</label>
                        <input required id="email" name="email" type="email"
                               placeholder="example@gmail.com">
                    </div>

                    <div class="field">
                        <label for="location">Location</label>
                        <input required id="location" name="location" type="text"
                               placeholder="City, State, Country">
                    </div>

                    <div class="field">
                        <label for="message">Message</label>
                        <textarea required name="message" id="message" cols="30"
                                  rows="10"></textarea>
                    </div>
                    {{--Success Message--}}
                    {{--Thank you for your support. We will reach out to you!--}}
                    <button class="std-btn primary" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>



@endsection