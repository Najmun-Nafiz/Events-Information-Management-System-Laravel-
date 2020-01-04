@extends('layouts.app')

@section('content')

<h1 class="logo" style="width: 100%;margin: auto;">            
    <a href="{{ route('back') }}" title="PinThis Theme Preview">
        <img src="{{asset('front/wp-content/themes/pinthis/images/logo2.png')}}" alt="PinThis Theme Preview"><span style="position:absolute;margin-top: 28px !important;margin-left: 20px;">Pin Box</span>
    </a>
</h1>  
<div class="container" style="margin-top: 50px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color: #ff0047a6;padding: 30px;">
                <div class="card-header" style="background-color: black;padding: 10px;">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}" style="color: yellow;">{{ __('click here to request another') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
