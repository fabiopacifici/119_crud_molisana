@extends('layouts.app')


@section('content')


<section class="py-5">
    <div class="container">
        <h1>Add a new Post</h1>


        <form action="{{route('posts.store')}}" method="post">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title </label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper" placeholder="how to make rigatoni" />
                <small id="titleHelper" class="form-text text-muted">Type a title for the current post</small>
            </div>


            <div class="mb-3">
                <label for="cover_image" class="form-label">Image</label>
                <input type="text" class="form-control" name="cover_image" id="cover_image" aria-describedby="cover_imageHelper" placeholder="https://" />
                <small id="cover_imageHelper" class="form-text text-muted">Type an image URL for the current pasta </small>
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
</section>

@endsection