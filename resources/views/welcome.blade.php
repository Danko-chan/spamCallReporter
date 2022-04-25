@extends('layouts.app')

@section('content')


<div class="container-welcome">



    <div class="center-content">
         
        <h2>Would You Like to Check a Spam Number?</h2>
        <a class="btn-grad" id="report-btn" href="{{ url('/numbers')}}">Check</a>
            <h3>or</h3>
        <h2>Are You Tired of Spam Calls?</h2>
        <a class="btn-grad" id="report-btn" href="{{ route('numbers.create')}}">Report</a>
        
    </div>





               
            
</div>


@endsection