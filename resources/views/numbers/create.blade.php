@extends('layouts.app')

@section('content')


<div class="container-create">

                <h1>Report Number</h1>
                <form action="{{ route('numbers.store') }}" method="post">
                {{ csrf_field() }}
                
                <label for="number" class="report">Enter Number</label>
                <input type="number" name="number" id="number" class="number-input column">
                

                <input type="submit" value="Report Number" class="submit-btn column">

                </form>
            
</div>


@endsection