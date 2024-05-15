@extends('layouts.app')

@section('content')

<div class="container">
    <div class="d-flex justify-content-between align-items-center py-3">
        <h2>Products</h2>
        <a class="btn btn-primary" href="{{route('pastas.create')}}">Add</a>
    </div>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Src</th>
                    <th scope="col">Title</th>
                    <th scope="col">Type</th>
                    <th scope="col">Weight</th>
                    <th scope="col">Cooking time</th>
                    <th scope="col">Action</th>


                </tr>
            </thead>
            <tbody>
                @forelse ($pastas as $pasta)

                <tr class="">
                    <td scope="row">{{$pasta->id}}</td>
                    <td><img width="60" src="{{$pasta->src}}" alt=""></td>
                    <td>{{$pasta->title}}</td>
                    <td>{{$pasta->type}}</td>
                    <td>{{$pasta->weight}}</td>
                    <td>{{$pasta->cooking_time}}</td>
                    <td>
                        <a href="{{route('pastas.show', $pasta)}}"><i class="fas fa-eye fa-sm fa-fw"></i></a>
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

    {{$pastas->links('pagination::bootstrap-5')}}
</div>


@endsection