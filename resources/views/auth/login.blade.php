@extends('layouts.app')

@section('title','Login')

@push('css')


@endpush
@section('content')

<h1 class="logo" style="width: 100%;margin: auto;">            
    <a href="{{ route('back') }}" title="PinThis Theme Preview">
        <img src="{{asset('front/wp-content/themes/pinthis/images/logo2.png')}}" alt="PinThis Theme Preview"><span style="position:absolute;margin-top: 28px !important;margin-left: 20px;">Pin Box</span>
    </a>
</h1>   

<div class="container" style="margin-top: 50px;">
    <div class="row justify-content-center" style="justify-content: center!important;">
        <div class="col-md-6">
            <div class="card" style="position: relative;

    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: rgba(255, 0, 0, 0.42);
    background-clip: border-box;
    border-radius: 2px;">
                <div class="card-header" style="border-radius: 2px 2px 0 0;padding: 1.2rem 2.2rem;background-color: #d20000d4;border-bottom: 1px solid white;"><a href="{{ route('back') }}"style="position: relative;color: white;background-color:;padding: 5px;">{{ __('') }}</a><a style="width: 85%;text-align: center;margin: auto;position: absolute;font-size: 29px;">Login</a></div>

                <div class="card-body" style="-webkit-box-flex: 1;padding: 2.2rem;flex: 1 1 auto;">
                    <form method="POST" action="{{ route('login') }}" style="margin-top: 0em;display: block;">
                        @csrf

                        <div class="form-group row" style="position: relative;margin-bottom: 2rem;">
                            <label for="email" class="col-md-4 col-form-label text-md-right" style="    padding-top: calc(.6rem + 1px);
    padding-bottom: calc(.6rem + 1px);
    margin-bottom: 0;
    font-size: inherit;
    line-height: 1.5;display: inline-block;">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="    display: block;
    width: 90%;
    height: calc(0.5em + 1.2rem + 2px);
    padding: .6rem 1rem;
    font-size: 1.1rem;
    font-weight: 600;
    line-height: 1.5;
    color: rgba(255,255,255,.85);
    background-color: #a784848c;
    background-clip: padding-box;
    border: 1px solid rgba(255,255,255,.2);
    border-radius: 0;    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" style="position: relative;margin-bottom: 2rem;">
                            <label for="password" class="col-md-4 col-form-label text-md-right" style="padding-top: calc(.6rem + 1px);
    padding-bottom: calc(.6rem + 1px);
    margin-bottom: 0;
    font-size: inherit;
    line-height: 1.5;">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" style="isplay: block;
    width: 90%;
    height: calc(0.5em + 1.2rem + 2px);
    padding: .6rem 1rem;
    padding: .6rem 1rem;
    font-size: 1.1rem;
    font-weight: 600;
    line-height: 1.5;
    color: rgba(255,255,255,.85);
    background-color: #a784848c;
    background-clip: padding-box;
    border: 1px solid rgba(255,255,255,.2);
    border-radius: 0;    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" style="position: relative;margin-bottom: 2rem;">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check" style="    position: relative;
    display: block;
    padding-left: 1.25rem;">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} style="    position: absolute;
    margin-top: .3rem;
    margin-left: -1.25rem;    box-sizing: border-box;
    padding: 0;    font-family: Nunito,sans-serif;    overflow: visible;    font-size: inherit;
    line-height: inherit;">

                                    <label class="form-check-label" for="remember" style="    margin-bottom: 0;    display: inline-block;    cursor: default;"> 
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0" style="    position: relative;">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="color: #fff;
    background-color: #007bff;
    border-color: #007bff;    padding: 14px;
    border-radius: 10px;margin-right: 10px;">
                                    {{ __('Login') }}
                                </button>

                                <button type="submit" class="btn btn-primary" style="color: #fff;
    background-color: red;
    border-color: #007bff;    padding: 14px;
    border-radius: 10px;">
                                    <a href="{{ route('back') }}">{{ __('Back') }}</a>
                                </button>



                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="    display: inline-block;text-align: center;
    vertical-align: middle;user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: .6rem 1rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 2px;transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <!-- App functions and actions -->
    <script src="{{asset('front/app/app.min.js')}}"></script>
@endpush
