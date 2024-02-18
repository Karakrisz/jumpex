@component('mail::message')
# Új Kapcsolatfelvételi Üzenet

Kaptál egy új üzenetet a kapcsolatfelvételi űrlapodon keresztül. Itt vannak a részletek:

- **Cég**: {{ $data['company'] }}
- **Név**: {{ $data['name'] }}
- **E-mail**: {{ $data['email'] }}
- **Telefonszám**: {{ $data['phone'] }}

@component('mail::button', ['url' => $url])
Megtekintés
@endcomponent

Köszönjük,
Digital Seed
@endcomponent