@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col">
            <img src="{{$pasta->src}}" alt="">
        </div>
        <div class="col">
            <h2>{{$pasta->title}}</h2>
            <p>{{$pasta->description}}</p>
            <hr>
            <div class="metadata">
                <strong>Type:</strong> {{$pasta->type}} <br>
                <strong>Weight:</strong> {{$pasta->weight}} <br>
                <strong>Cooking time:</strong> {{$pasta->cooking_time}} <br>

            </div>
        </div>
    </div>
</div>


@endsection