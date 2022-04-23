@extends('layouts.app')

@section('content')


<div class="container">

        <h1>Report</h1>
                <form action="{{ route('numbers.store') }}" method="post">
                {{ csrf_field() }}
                <label for="number" class="report">Report Spam Number</label>
                <input type="number" name="number" id="number" class="number">
                

                <input type="submit" value="Report Number">

                </form>
            
</div>


@endsection