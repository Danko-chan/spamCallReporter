@extends('layouts.app')

@section('content')
<div class="container">

                @foreach ($user->numbers as $number)
                    <div class="panel panel-default">
                        <div class="panel-body">
                        <h4>{{ $number->number }}</h4>
                        <p>
                            {{ $number->created_at }}
                        </p>
                        </div>
                        
                    </div>
                @endforeach
                    
 
</div>  
@endsection
