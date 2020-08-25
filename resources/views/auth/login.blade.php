@extends('layouts.app')
@section('content')

<div class="container">
    <form class="form-signin" method="POST" action="{{ route('login') }}" autocomplete="off">
        @csrf
        <div class="panel periodic-login">
            <div class="panel-body text-center">
                <p class="element-name">Tukang Ngitung</p>
                <p class="atomic-mass">v1</p>
                <i class="icons icon-arrow-down"></i>

                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" readonly onfocus="$(this).removeAttr('readonly');" autocomplete="off" name="company_id" autocomplete="q44124234324" id="company_id" class="form-text" required>
                    <span class="bar"></span>
                    <label for="company_id">Company Id</label>
                    
                    @error('email')
                    <div class="alert alert-danger alert-3d alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror

                </div>

                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="email" readonly onfocus="$(this).removeAttr('readonly');" autocomplete="off" name="email" autocomplete="q44124234324" id="email" class="form-text" required>
                    <span class="bar"></span>
                    <label for="email">Email</label>
                    
                    @error('email')
                    <div class="alert alert-danger alert-3d alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror

                </div>

                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="password" autocomplete="off" readonly onfocus="$(this).removeAttr('readonly');" name="password" id="password" class="form-text" required>
                    <span class="bar"></span>
                    <label>Password</label>
                    @error('password')
                    <div class="alert alert-danger alert-3d alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror
                </div>
                
                <input type="submit" class="btn col-md-12" value="{{ __('addtional.masuk') }}"/>

            </div>

            <div class="text-left" style="padding:5px;">
                <a href="{{ route('password.request') }}">{{ __('addtional.lupaPassword') }} </a>
            </div>
        </div>
    </form>
</div>

@endsection
