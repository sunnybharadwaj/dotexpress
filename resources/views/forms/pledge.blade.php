@extends('layouts/form_layout')
@section('form')

    <div class="page-form">
        <h4 class="mb-6">Pledge Support</h4>
        <p class="mb-4">Help us in our endeavor to reach as many children as possible with our low-cost regional
            language edition of the book, "The Dot that went for a walk...". Through these stories, we would like the
            children to connect with these role models, be inspired by them, think of career possibilities and fight
            harder against self-doubt.</p>
        <p class="mb-4">The number of copies pledged below can either be distributed through our foundation partners or
            you have the option to distribute it yourself.</p>
        <form class="ui form" method="POST" action="/forms/pledge">
            @csrf
            @if($errors->any())
                <div class="ui negative message">
                    <i class="close icon"></i>
                    <div class="header">
                        There seems to be error(s) in your entry.
                    </div>
                    {{--<ul>--}}
                        {{--@foreach ($errors->all() as $error)--}}
                            {{--<li>{{ $error }}</li>--}}
                        {{--@endforeach--}}
                    {{--</ul>--}}
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
                        <label for="lang">Which language of the book do you choose:</label>
                        <select required class="ui search dropdown"
                                name="lang" id="lang">
                            <option value="">Select Language</option>
                            <option value="Homes">English - INR 649 per Book</option>
                            <option value="Real Estates">Telugu - INR 120 per Book</option>
                            <option value="Retail">Hindi - INR 120 per Book</option>
                        </select>
                    </div>
                    <div class="field">
                        <label for="channel">The number of copies pledged below can either be distributed through our
                            foundation partners or you have the option to distribute it yourself. </label>
                        <select required class="ui search dropdown"
                                name="channel" id="channel">
                            <option value="">Select Channel</option>
                            <option value="Teach for Change">Teach for Change</option>
                            <option value="Nanhi Kali">Nanhi Kali</option>
                            <option value="Self">Self</option>
                            <option value="Other">Other - Write below</option>
                        </select>


                        <input id="name" name="channel_other" type="text"
                               placeholder="Other Channel">

                    </div>

                    <div class="field">
                        <label for="copies">Number of copies I/We commit to sponsoring </label>
                        <select required class="ui search dropdown"
                                name="copies" id="copies">
                            <option value="">Select number of copies</option>
                            <option value="100">100</option>
                            <option value="500">500</option>
                            <option value="1000">1000</option>
                            <option value="5000">5000</option>
                            <option value="10000">10000</option>
                            <option value="Other">Other - Write below</option>
                        </select>
                        <input id="name" name="copies_other" type="text"
                               placeholder="If Other, Enter number of copies">

                    </div>

                    <div class="field">
                        <label for="name">Full Name</label>
                        <input required id="name" name="name" type="text"
                               placeholder="First Name, Last Name">
                    </div>
                    <div class="field">
                        <label for="name">Organization Name</label>
                        <input required id="name" name="org_name" type="text"
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


                    <div class="mb-4"></div>
                    <div class="field">
                        <label for="message">Message</label>
                        <textarea required name="message" id="message" cols="30"
                                  rows="10"></textarea>
                    </div>

                    <button class="std-btn primary" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>



@endsection