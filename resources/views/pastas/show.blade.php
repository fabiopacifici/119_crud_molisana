@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col">
            <img src="{{$pasta->src}}" alt="">
        </div>
        <div class="col">

            <div class="d-flex justify-content-between">
                <h2>{{$pasta->title}}</h2>
                <div class="actions">
                    <a class="btn btn-dark" href="{{route('pastas.edit', $pasta)}}">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-secondary" href="{{route('pastas.index')}}">
                        <i class="fas fa-arrow-left fa-sm fa-fw"></i>
                        Back to patas
                    </a>
                </div>
            </div>

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