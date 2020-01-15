@extends('layouts/form_layout')
@section('form')

    <div class="page-form">
        <h4 class="mb-6">Pledge Support</h4>
        <p class="mb-4">Help us in our endeavour to reach as many children, in as many government schools as possible,
            with our low cost Telugu edition of the book 'A Dot that went for a walk'. We aim to inspire children even
            in the remotest parts of rural Andhra/Telangana, with stories of role models that they can look up to, as
            they discover their highest potential.</p>
        <p class="mb-4">Copies of the Telugu translation of the book “The Dot that went for a walk” which will be
            distributed to children in government schools. The book is priced at Rs.120.</p>
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
                        <label for="lang">Which language of the book do you choose:</label>
                        <select required class="ui search dropdown"
                                name="lang" id="lang">
                            <option value="">Select Language</option>
                            <option value="Homes">English</option>
                            <option value="Real Estates">Telugu</option>
                            <option value="Retail">Hindi</option>
                        </select>
                    </div>

                    <div class="field">
                        <label for="copies">Number of copies I/We commit to sponsoring </label>
                        <input type="radio" name="copies" value="100">100<br>
                        <input type="radio" name="copies" value="500">500<br>
                        <input type="radio" name="copies" value="1000">1000<br>
                        <input type="radio" name="copies" value="5000">5000<br>
                        <input type="radio" name="copies" value="10000">10000<br>
                        <div class="my-2">
                            or<br/>
                        </div>

                        <input id="name" name="copies" type="text"
                               placeholder="Enter number of copies">

                    </div>

                    <div class="field">

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
                    {{--Success Message--}}
                    {{--Thank you for your support. We will reach out to you!--}}
                    <button class="std-btn primary" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>



@endsection