@extends('layouts.app')

@section('content')
<div class="container">
    

    <div class="container-login">
                <div class="" style="font-size:1.2rem">{{ __('Login') }}</div>
                <hr style="width:100%;text-align:left;margin-top:2px">
                
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        
                            
                            <div class="input-btn">
                                <input id="email" type="email" placeholder="Email" class="form-inp btn-margin @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                                               
                            
                            <div class="">
                                <input id="password" type="password" placeholder="Password" class="form-inp btn-margin @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        

                        
                                <div class="btn-margin">
                                    <input class="form-check-input " type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label " for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                         

                        
                            <div class="btn-margin">
                                <button type="submit" class="btn btn-primary ">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="forgot" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        
                    </form>
                </div>
           
    </div>
    
</div>
@endsection
