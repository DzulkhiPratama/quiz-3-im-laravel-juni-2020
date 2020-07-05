@extends('layouts.master')


@section('content')
<h1>Edit Your Article</h1>

<form action="/items">
    <button type="submit">Back to Question List</button>
</form>

<form action='/items/{{$art->id}}' method="post">
    @csrf
    @method('PUT')

    <form action="welcome.html">
        <label for="judul">Title</label><br>
        <input type="text" name="judul" id="" value="{{$art->judul}}"><br>
        <label for="isi">Content :</label> <br>
        <input type="text" name="isi" id="" value="{{$art->isi}}"><br>

        <input type="hidden" name="slug" id="" value="{{$art->slug}}"><br>
        <label for="tag">Tag :</label> <br>
        <input type="text" name="tag" id="" value="{{$art->tag}}"><br>




        <input type="hidden" name="id_penulis" value="1"><br>



        <br><br>

        <input type="submit" value="Submit">


    </form>

    @endsection