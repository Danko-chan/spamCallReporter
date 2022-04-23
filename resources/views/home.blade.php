@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('My Reported Numbers') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($numbers as $number)
                    <div class="well">
                    <h3>{{ $number->number }}</h3>
                    
                    @endforeach
                    {{$numbers->Links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
