@extends('layouts.app')

@section('content')
<div class="container-profile">
                <h1>My Reported Numbers</h1>
                <ol>
                @foreach ($user->numbers as $number)
                    <li class="li-font">
                        <h3>
                            {{ $number->number }}
                            
                        </h3>
                    </li>
                @endforeach
                </ol>
                    
 
</div>  
@endsection
