@extends('layouts.app')


@section('content')


<div class="container py-5">
    <h1>Add a new Pasta</h1>
    @include('partials.validation-errors')


    <form action="{{route('pastas.update', $pasta)}}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Name </label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" aria-describedby="titleHelper" placeholder="Rigatoni" value="{{old('title', $pasta->title)}}" />
            <small id="titleHelper" class="form-text text-muted">Type a name for the current pasta</small>
            @error('title')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="cooking_time" class="form-label">Cooking time</label>
            <input type="text" class="form-control @error('cooking_time') is-invalid @enderror" name="cooking_time" id="cooking_time" aria-describedby="cooking_timeHelper" placeholder="5 min" value="{{old('cooking_time', $pasta->cooking_time)}}" />
            <small id="cooking_timeHelper" class="form-text text-muted">Type a cooking time for the current pasta </small>
            @error('cooking_time')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="d-flex gap-2">
            <img height="100" src="{{$pasta->src}}" alt="">
            <div class="mb-3 w-100">
                <label for="src" class="form-label">Image</label>
                <input type="text" class="form-control @error('src') is-invalid @enderror" name="src" id="src" aria-describedby="srcHelper" placeholder="https://" value="{{old('src', $pasta->src)}}" />
                <small id="srcHelper" class="form-text text-muted">Type an image URL for the current pasta </small>
                @error('src')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="weight" class="form-label">Weight </label>
            <input type="text" class="form-control @error('weight') is-invalid @enderror" name="weight" id="weight" aria-describedby="weightHelper" placeholder="500g" value="{{old('weight', $pasta->weight)}}" />
            <small id="weightHelper" class="form-text text-muted">Type a weight for the current pasta pack </small>
            @error('weight')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type </label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type" aria-describedby="typeHelper" placeholder="Corta" value="{{old('type', $pasta->type)}}" />
            <small id="typeHelper" class="form-text text-muted">Type a type for the current pasta </small>
            @error('type')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="6">{{old('description', $pasta->description)}}</textarea>
            @error('description')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>


        <button type="submit" class="btn btn-primary">
            Update
        </button>



    </form>

</div>

@endsection