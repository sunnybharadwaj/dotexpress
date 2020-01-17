@component('mail::message')
    ## New submission from {{$message->name}}

    ## Work:
    - Work Title : {{$message->work_title}}
    - Work description : {{$message->work_desc}}
    - File : Contact Developer

    ## Details:
    - Name : {{$message->name}}
    - Email : {{$message->email}}
    - Phone : {{$message->phone}}
    - Date of Birth : {{$message->dob}}
    - Class : {{$message->class}}
    - School : {{$message->school}}
@endcomponent