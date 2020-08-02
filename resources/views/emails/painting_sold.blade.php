@component('mail::message')
# Auction Complete

Auction of your painting {{ $painting->title }} is over. Checkout your results in solded section of your account.

You can also see it clicking on below button.

@component('mail::button', ['url' => env('APP_URL').'/activities/solded'])
Solded Paintings
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent