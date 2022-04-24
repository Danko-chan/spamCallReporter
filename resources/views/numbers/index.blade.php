@extends('layouts.app')

@section('content')


<div class="container-index">
        <div class="number-list">
                <h1>Spam Numbers</h1>
                <hr style="width:90%;text-align:left;margin-left:0">
                <ol>
                @foreach ($numbers as $number)
                    
                        <li class="li-font">{{ $number->number }}</li>
                   
                @endforeach
                </ol>
                {{$numbers->Links()}}
        </div>         
</div>


@endsection