@extends('layouts.app')

@section('content')


<div class="container-create">

                <h1>Report Number</h1>
                <hr style="width:21%;text-align:left;margin-top:0">
                <form action="{{ route('numbers.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                
                
                <input type="text" placeholder="Enter Number" maxlength="10" name="number" id="number" class="number-inp column">
                <input type="textarea" placeholder="Enter Description"  name="description" id="number" class="desc-inp column">
                
                <div class="label">
                    <input type="radio" id="" name="label" value="spam caller">
                    <label for="vehicle1"> Spam caller</label><br>
                    <input type="radio" id="" name="label" value="sales caller">
                    <label for="vehicle2"> Sales caller</label><br>
                    <input type="radio" id="" name="label" value="scam caller">
                    <label for="vehicle3"> Scam caller</label>
                </div> 

                <!-- <input type="file" name="file" class="desc-inp column">  -->

                <input type="submit" value="Report Number" class="submit-btn column btn-grad">

                </form>
            
</div>


@endsection