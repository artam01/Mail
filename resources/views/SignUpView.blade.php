@component('mail::message')
    Sign up here {{ $name }}
    @component('mail::button', ['url' => 'https://www.google.com'])
        Click here
    @endcomponent
@endcomponent
