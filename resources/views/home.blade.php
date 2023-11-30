@extends('layouts.app')

@section('content')
@if(Session::has('error'))
                            <div class="alert alert-success" role="alert">
                                عذرا الصفحة مخصصة للادمن
</div>@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard User') }}</div>
               
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} {{Auth::user()->name}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
