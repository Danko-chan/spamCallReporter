@extends('layouts.app')

@section('content')


<div class="container">

<h1>  {{$number->number}}
                {{$number->reported_by}}</h1>
                <p>
                  Submitted By: {{ $number->user->name }}, {{ $number->created_at->diffForHumans() }}
                </p>
            
</div>


@endsection