@component('mail::message')
    ## New pledge from {{$message->name}}

    ## Details:
    - Organization Name : {{$message->org_name}}
    - Distribution Channel : {{$message->channel}}
    - Distribution Channel (if other) : {{$message->channel_other}}
    - Email : {{$message->email}}
    - Phone : {{$message->phone}}
    - Message : {{$message->message}}
    ## Pledge:
    - Language : {{$message->lang}}
    - Number of Copies : {{$message->copies}}
    - Number of Copies (if Other) : {{$message->copies_other}}
    - Name : {{$message->name}}
@endcomponent