@extends('layouts.app')

@section('content')


<div class=" container container-show">

<h1>  {{$number->number}}
                {{$number->reported_by}}</h1>
                <p>
                  Submitted By: {{ $number->user->name }}, {{ $number->created_at->diffForHumans() }}
                </p>
                <a  class="back-btn" href="{{route('numbers.create')}}">&#x2190;Go Back</a>
                <hr style="margin-top:0; width:7%" >
</div>


@endsection