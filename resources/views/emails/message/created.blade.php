@component('mail::message')




-{{$msg->name}} <br>
-{{$msg->email}}

@component('mail::panel')
    {{$msg->message}}
@endcomponent



@endcomponent
