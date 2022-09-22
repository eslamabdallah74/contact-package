@component('mail::message')

# Message From: {{ $name }}

>{{ $message }}



@component('mail::button', ['url' => $url])
Go now
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
