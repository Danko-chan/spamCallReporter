@extends('layouts.app')

@section('content')
<div class="container-profile">
                <h1>My Reported Numbers</h1>
                <hr style="width:30%;text-align:left;margin-left:0">
                <ol>
                @foreach ($user->numbers as $number)
                    <li class="li-font">
                        
                            {{ $number->number }}
                            
                        
                    </li>
                @endforeach
                </ol>
                    
 
</div>  
@endsection
