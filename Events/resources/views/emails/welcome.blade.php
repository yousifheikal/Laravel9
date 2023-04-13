<x-mail::message>
Welcome mr: {{$user->name}} <br>
    لقد تم تسجيل دخولك الي موقع Goexes

<x-mail::button :url="''">
    To visit site plz click her
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
