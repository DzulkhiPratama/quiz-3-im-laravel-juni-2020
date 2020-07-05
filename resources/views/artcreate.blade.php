@extends('layouts.master')


@section('content')
<h1>Put on Your Article</h1>

<form action="/items">
    <button type="submit">Back to Question List</button>
</form>

<form action='/items' method="post">
    @csrf

    <form action="welcome.html">
        <label for="judul">Title</label><br>
        <input type="text" name="judul" id=""><br>
        <label for="isi">Content :</label> <br>
        <input type="text" name="isi" id=""><br>

        <input type="hidden" name="slug" id=""><br>
        <label for="tag">Tag :</label> <br>
        <input type="text" name="tag" id=""><br>


        <input type="hidden" name="id_penulis" value="1"><br>



        <br><br>

        <input type="submit" value="Submit">


    </form>

    @endsection