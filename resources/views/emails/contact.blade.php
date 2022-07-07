@component('mail::message')
# Auteur du message : {{ $contact['name']  }}

Adresse email indiquée par l'utilisateur : {{ $contact['email'] }}

---

## Contenu du message

{{ $contact['content'] }}

@component('mail::button', ['url' => 'https://alexishenry.eu/login'])
MORE
@endcomponent

Have a nice day.
@endcomponent
