@extends('layouts.app')

@section('content')


<div class="container">

<h1>Spam Numbers</h1>
                <hr />
                
                @foreach ($numbers as $number)
                    <div class="well">
                    <h3>{{ $number->number }}</h3>
                    
                @endforeach
                {{$numbers->Links()}}
                
</div>


@endsection