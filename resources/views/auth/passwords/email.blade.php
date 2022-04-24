@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container-reset">
       
                <div class=""style="font-size:1.2rem">{{ __('Reset Password') }}</div>
                <hr style="width:100%;text-align:left;margin-top:2px">
                
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                       
                            <div class="btn-margin">
                                <input id="email" type="email" placeholder="Enter Email" class="form-inp @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        

                        
                            <div class="btn-margin">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        
                    </form>
              
            
        
    </div>
</div>
@endsection
