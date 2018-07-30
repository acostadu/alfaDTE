@component('mail::message')
# Estimado: {{ $demo->receiver }}

Se adjunta cotizacion.

@component('mail::button', ['url' => route('home')])
Realizar pago
@endcomponent

Gracias,<br>
{{ $demo->sender }} - {{ config('app.name') }}
@endcomponent
