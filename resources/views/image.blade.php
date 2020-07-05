@extends('layouts.master')


@section('content')

<!-- <img src="{{asset('/image/ERD.png')}}"> -->
<form action="/items">
    <button type="submit">Back to Question List</button>
</form>

<div class="card" style="width: 30rem;">
    <img src="{{asset('/image/ERD.png')}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">ERD of Article Web</h5>
        <p class="card-text">Some quick view to describe how does the web system works.</p>
        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
    </div>
</div>
@endsection