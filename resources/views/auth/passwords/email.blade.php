@extends('layouts.app')
@section('content')

<div class="container">
    <form class="form-signin" method="POST" action="{{ route('password.email') }}" autocomplete="off">
        @csrf
        <div class="panel periodic-login">
            <div class="panel-body text-center">
                <p class="element-name">{{ __('Reset Password') }}</p>
                <i class="icons icon-arrow-down"></i>

                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" readonly onfocus="$(this).removeAttr('readonly');" autocomplete="off" name="company_id" id="company_id" class="form-text" required>
                    <span class="bar"></span>
                    <label for="company_id">Company Id</label>
                    @error('company_id')
                    <div class="alert alert-danger alert-3d alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror

                </div>
                
                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="email" readonly onfocus="$(this).removeAttr('readonly');" autocomplete="off" name="email" id="email" class="form-text" required>
                    <span class="bar"></span>
                    <label for="email">Email</label>
                    
                    @error('email')
                    <div class="alert alert-danger alert-3d alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror

                </div>

                
                <input type="submit" class="btn col-md-12" value="{{ __('Send Password Reset Link') }}"/>

            </div>

            <div class="text-left" style="padding:5px;">
                <a href="{{ route('loginFirst') }}">Login </a>
            </div>
        </div>
    </form>
</div>

@endsection
