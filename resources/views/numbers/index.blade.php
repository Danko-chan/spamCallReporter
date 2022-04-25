@extends('layouts.app')

@section('content')


<div class="container-index">
        
        <form action="" method="get">
        
                <input type="text" placeholder="Search Number" maxlength="10" name="search" class="number-inp column">

                <input type="submit" value="Report Number" class="submit-btn column btn-grad">
        </form>

        @guest
        @if (Route::has('login'))
        @foreach ($numbers as $number)
               
               <h3 style="margin-top:10px">{{$number->number}}</h3>  
               @endforeach
        @endif
        @else
        
        @if($search)
        @foreach ($numbers as $number)               
        <h3 style="margin-top:10px">{{$number->number}}</h3>  
        <p>
                Submitted By: {{ $number->user->name }}, {{ $number->created_at->diffForHumans() }}
        </p>     
        @endforeach 
        
        <p>Not a Spam</p>
        @else
        
        @endif
        @endguest
</div>        


@endsection