<!-- if you want to display a pop up modal if first time logged in -->
<!-- https://laracasts.com/discuss/channels/javascript/i-need-to-show-pop-up-only-first-time-user-login -->


@extends('layouts.body')

@section('content')

    <div class="">Dashboard</div>

    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        You are logged in!
    </div>

@endsection
