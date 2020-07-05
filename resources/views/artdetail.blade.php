@extends('layouts.master')


@section('content')


<form action="/items">
    <button type="submit" class="btn btn-sm m-2 btn-default">Back to Article List</button>
</form>

<h1>Judul:{{$art->judul}}</h1><br>
<h2>Content:{{$art->isi}}</h2>
<h2>Slug:{{$art->slug}}</h2>
<h2>Tags:{{$art->tag}}</h2>


@endsection