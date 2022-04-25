@extends('layouts.app')

@section('content')


<div class="container-index">
        
        <form action="" method="get">
        
                <input type="text" placeholder="Search Number" maxlength="10" name="search" class="number-inp column">

                <input type="submit" value="Report Number" class="submit-btn column btn-grad">
        </form>
        
        @foreach ($numbers as $number)
        <h3>{{$number->number}}</h3>       
        @endforeach 
</div>        


@endsection