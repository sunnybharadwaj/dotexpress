@extends('layouts/form_layout')
@section('form')

    <div class="page-form">
        <h4 class="mb-6">Pledge Support</h4>
        <p class="mb-4">Help us in our endeavor to reach as many children as possible with our low-cost regional language edition of the book, "The Dot that went for a walk...". Through these stories, we would like the children to connect with these role models, be inspired by them, think of career possibilities and fight harder against self-doubt.</p>
        <p class="mb-4">The number of copies pledged below can either be distributed through our foundation partners or you have the option to distribute it yourself.</p>
        <form class="ui form" method="POST" action="/forms/pledge">
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
                            <option value="Homes">English - INR 649 per Book</option>
                            <option value="Real Estates">Telugu - INR 120 per Book</option>
                            <option value="Retail">Hindi - INR 120 per Book</option>
                        </select>
                    </div>
                    <div class="field">
                        <label for="channel">The number of copies pledged below can either be distributed through our foundation partners or you have the option to distribute it yourself. </label>
                        <ul>
                            <li></li>
                        </ul>
                        <input type="radio" name="channel" value="Teach for Change">Teach for Change<br>
                        <input type="radio" name="channel" value="Nanhi Kali">Nanhi Kali<br>
                        <input type="radio" name="channel" value="Self">Self<br>
                        <input type="radio" name="channel" value="Other">Other - Write below<br>
                        <div class="my-2">
                            or<br/>
                        </div>

                        <input id="name" name="channel" type="text"
                               placeholder="">

                    </div>

                    <div class="field">
                        <label for="copies">Number of copies I/We commit to sponsoring </label>
                        <input type="radio" name="copies" value="100">100<br>
                        <input type="radio" name="copies" value="500">500<br>
                        <input type="radio" name="copies" value="1000">1000<br>
                        <input type="radio" name="copies" value="5000">5000<br>
                        <input type="radio" name="copies" value="10000">10000<br>
                        <input type="radio" name="copies" value="Other">Other - Write below<br>
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