@component('mail::message')
# New Painting Added

Thank you for adding a new painting with us. You can see all activity of that painting by clicking on below button.

# Title
Your New Painting has a title as {{$painting->title}}.

You should check your painting results on {{ $painting->ending_date }}.

@component('mail::button', ['url' => env('APP_URL').'/paintings/'.$painting->id])
See Painting
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent