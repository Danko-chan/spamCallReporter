@extends('layouts.app')

@section('content')


<div class="container-index">

<h1>Spam Numbers</h1>
                <hr />
                <ol>
                @foreach ($numbers as $number)
                    
                        <li>{{ $number->number }}</li>
                   
                @endforeach
                </ol>
                {{$numbers->Links()}}
                
</div>


@endsection