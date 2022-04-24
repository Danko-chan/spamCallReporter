@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container-register">
                <div class="" style="font-size:1.2rem">{{ __('Register') }}</div>
                <hr style="width:100%;text-align:left;margin-top:2px">
                
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                       
                            <div class="btn-margin">
                                <input id="name" type="text" placeholder="Enter Name" class="form-inp @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        

                        
                            <div class="btn-margin">
                                <input id="email" type="email" placeholder="Enter Email" class="form-inp @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        

                        
                            <div class=" btn-margin">
                                <input id="password" type="password" placeholder="Enter Password" class="form-inp @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        

                        
                            <div class="btn-margin">
                                <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-inp" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        

                        
                            <div class=" btn-margin">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        
                    </form>
               
            
        
    </div>
</div>
@endsection
