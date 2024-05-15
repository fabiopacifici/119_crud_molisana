@extends('layouts.app')

@section('content')

<div class="container">
    <div class="d-flex justify-content-between align-items-center py-3">
        <h2>Posts</h2>
        <a class="btn btn-primary" href="{{route('posts.create')}}">Add</a>
    </div>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Action</th>


                </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)

                <tr class="">
                    <td scope="row">{{$post->id}}</td>
                    <td><img width="60" src="{{$post->cover_image}}" alt=""></td>
                    <td>{{$post->title}}</td>

                    <td>
                        <a href="{{route('posts.show', $post)}}"><i class="fas fa-eye fa-sm fa-fw"></i></a>
                        /Edit/Delete
                    </td>

                </tr>
                @empty

                <tr class="">
                    <td scope="row" colspan="7">Nothing to show</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{$posts->links('pagination::bootstrap-5')}}
</div>


@endsection