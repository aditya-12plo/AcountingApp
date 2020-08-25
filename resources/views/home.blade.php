@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} {{ Auth::user()->name }}
                </div>
                <div class="card-body"> 
                    <ul>
                        <li><a onclick="event.preventDefault();document.getElementById('logout-form').submit();"><span class="fa fa-power-off "></span></a></li>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                      </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
