<x-mail::message>
# Nom Client : {{ $name }}
# Email : {{ $email }}
# Objet : {{ $object }}


{{ $message }}

<x-mail::button :url="'https://www.ltcgroup.net'">
Visitez nous
</x-mail::button>

Merci,<br>
{{ config('app.name') }}
</x-mail::message>
