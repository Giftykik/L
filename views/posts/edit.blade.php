@extends('layouts.layout',['title'=>"EDIT $post->post_id. $post->title"])

@section('content')
<form action="{{route('post.update',['id'=>$post->post_id])}}" method="post" enctype="multipart/form-data">
    <!--@csrf not working in LARAVEL 5.5 so using {{ csrf_field() }} -->
    
    {{ csrf_field() }}
    {{method_field('PATCH')}}
    
    <h5>Edit Post</h5>
    @include('posts.parts.form')
    <input class="btn btn-outline-success" type="submit" value="edit post">

</form>
@endsection
