@extends('layouts.master')


@section('content')
<h1>Read This Article</h1><br>

<form action="/">
    <button type="submit">ERD Web</button>
</form><br>
<form action="/items/create">
    <button type="submit">Create Article</button>
</form>


<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Tag</th>
            <th scope="col">Action</th>
        </tr>
    </thead>

    <tbody>

        @foreach($art as $rtk)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$rtk->judul}}</td>
            <td>{{$rtk->slug}}</td>
            <td>{{$rtk->tag}}</td>

            <td>
                <button type="submit" class="btn btn-sm btn-default">
                    <a href="/items/{{$a=$rtk->id}}">View</a>
                </button>


                <button type="submit" class="btn btn-sm btn-default">
                    <a href="/items/{{$a=$rtk->id}}/edit">Edit</a>
                </button>

                <form action="/items/{{$rtk->id}}" method="post" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">
                        <i class="fas fa-trash"></i>
                    </button>

                </form>
            </td>



        </tr>
        @endforeach

    </tbody>
</table>

@endsection