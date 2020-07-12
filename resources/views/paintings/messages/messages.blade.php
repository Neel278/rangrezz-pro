@if(!$errors->isEmpty())
<div class="alert alert-danger">
    @foreach ($errors->all(':message') as $input_error)
    {{ $input_error }}
    @endforeach
</div>
@endif

@if(Session::has('success_email'))
<div class="alert alert-success">
    {{ Session::get('success_email') }}
</div>
@endif

@if(Session::has('success_profile'))
<div class="alert alert-success">
    {{ Session::get('success_profile') }}
</div>
@endif

@if(Session::has('success_password'))
<div class="alert alert-success">
    {{ Session::get('success_password') }}
</div>
@endif

@if(Session::has('success_auction'))
<div class="alert alert-success">
    {{ Session::get('success_auction') }}
</div>
@endif

@if(Session::has('success_bidding'))
<div class="alert alert-success">
    {{ Session::get('success_bidding') }}
</div>
@endif

@if(Session::has('success_painting'))
<div class="alert alert-success">
    {{ Session::get('success_painting') }}
</div>
@endif