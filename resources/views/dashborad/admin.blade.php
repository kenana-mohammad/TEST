@extends('layout.header')
@section('body')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard Admin') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <h1> welcome you in dachborad {{Auth::user()->name}} </h1>
    <div class="container">
        <!-- href to show user -->
        <a class="btn btn-primary" href="{{route('show.user')}}">Show Users</a>
    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html>