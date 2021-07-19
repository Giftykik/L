@extends('layouts.layout',['title'=>"postN $post->post_id. $post->title"])

@section('content')

<div class="card">
    <div class="card-header">
        <h4>{{ $post->title }}</h4>
    </div>
    <div class="card-body">
        <div class="card-image-max" style="background-image: url({{$post->img ?? asset('img/d.jpg')}})"></div>
        
        <div class="card-descr">Descr: {{$post->descr}}</div>
        <div class="card-author">Author: {{$post->name}}</div>
        <div class="card-date">Post created: {{ $post->created_at->diffForHumans() }}</div>

        <div class="card-btn">
            <a href="{{ route('post.index') }}" class="btn btn-outline-success">home</a>
            @auth
            @if(Auth::user()->id == $post->author_id)
            <a href="{{ route('post.edit',['id'=> $post->post_id]) }}" class="btn btn-outline-warning">edit</a>
            
            <form action="{{ route('post.destroy',['id'=> $post->post_id]) }}" method="post" onsubmit="if (confirm('realy delete?')){return true} else{return false}">
                        
                {{ csrf_field() }}
                {{method_field('DELETE')}}
                <input type="submit" class="btn btn-outline-danger" value="delete">
            </form>
            @endif
            @endauth
        </div>

    </div>
</div>

@endsection
