@extends('layouts.app')


@section('content')


<div class="container">
    <h1>Add a new Pasta</h1>


    <form action="{{route('pastas.store')}}" method="post">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Name </label>
            <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper" placeholder="Rigatoni" />
            <small id="titleHelper" class="form-text text-muted">Type a name for the current pasta</small>
        </div>

        <div class="mb-3">
            <label for="cooking_time" class="form-label">Cooking time</label>
            <input type="text" class="form-control" name="cooking_time" id="cooking_time" aria-describedby="cooking_timeHelper" placeholder="5 min" />
            <small id="cooking_timeHelper" class="form-text text-muted">Type a cooking time for the current pasta </small>
        </div>


        <div class="mb-3">
            <label for="src" class="form-label">Image</label>
            <input type="text" class="form-control" name="src" id="src" aria-describedby="srcHelper" placeholder="https://" />
            <small id="srcHelper" class="form-text text-muted">Type an image URL for the current pasta </small>
        </div>

        <div class="mb-3">
            <label for="weight" class="form-label">Weight </label>
            <input type="text" class="form-control" name="weight" id="weight" aria-describedby="weightHelper" placeholder="500g" />
            <small id="weightHelper" class="form-text text-muted">Type a weight for the current pasta pack </small>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type </label>
            <input type="text" class="form-control" name="type" id="type" aria-describedby="typeHelper" placeholder="Corta" />
            <small id="typeHelper" class="form-text text-muted">Type a type for the current pasta </small>
        </div>


        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="6"></textarea>
        </div>


        <button type="submit" class="btn btn-primary">
            Create
        </button>



    </form>

</div>

@endsection