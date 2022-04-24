@extends('layouts.app')

@section('content')


<div class="container-create">

                <h1>Report Number</h1>
                <hr style="width:21%;text-align:left;margin-top:0">
                <form action="{{ route('numbers.store') }}" method="post">
                {{ csrf_field() }}
                
                <!-- <label for="number" class="number-lbl">Enter Number</label> -->
                <input type="text" placeholder="Enter Number" name="number" id="number" class="number-inp column">

                <input type="submit" value="Report Number" class="submit-btn column btn-grad">

                </form>
            
</div>


@endsection