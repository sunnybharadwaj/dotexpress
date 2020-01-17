@component('mail::message')
    ## New message from {{$message->name}} :

    Details:
    - Message: {{$message->message}}
    - Name : {{$message->name}}
    - Email : {{$message->email}}
    - Phone : {{$message->phone}}
@endcomponent