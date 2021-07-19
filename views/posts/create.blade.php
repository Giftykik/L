@extends('layouts.layout',['title'=>'creating post'])

@section('content')
<form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
<!--@csrf not working in LARAVEL 5.5-->
{{ csrf_field() }}
    <h5>Create Post</h5>
@include('posts.parts.form')
<input class="btn btn-outline-success" type="submit" value="create post">

</form>
@endsection