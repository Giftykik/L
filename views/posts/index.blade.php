@extends('layouts.layout',['title'=>'index'])
@section('content')

        @if(isset($_GET['search']))
        @if(count($posts)>0)
        <h2>search result<?=$_GET['search']?></h2>
        <p>{{count($posts)}} posts is found</p>
        @else
        <h4>ask result <?=htmlspecialchars($_GET['search'])?> is empty</h4>
        <a href="{{route('post.index')}}">go to index</a>
        @endif
        @endif

        <div class="row">
          
           @foreach($posts as $post)
<div class="col-6">
            <div class="card">
              <!---->
              
              <!---->
              <div class="container px-4 py-5" id="custom-cards">
                                
                  <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url({{$post->img ?? asset('img/d.jpg')}})">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                     
                     <img src="{{ $post->img }}">
                     <p>{{ $post->img }}</p>
                     
                      <h2 class="pt-5 mt-5 mb-4 display-7 lh-1 fw-bold">{{$post->short_title}}</h2>
                      <ul class="d-flex list-unstyled mt-auto">
                              <li class="me-auto">
                                <img src="" alt="Brando" width="32" height="32" class="rounded-circle border border-white">
                              </li>
                              <li class="d-flex align-items-center me-3">
                                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                                <small>Author: {{$post->name}}</small>
                              </li>
                              <li class="d-flex align-items-center">
                                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                                <small>3d</small>
                              </li>
                      </ul>
                    </div>
                  </div>
                </div>
              <!---->

              <div class="card-body">
                <h5 class="card-title">{{$post->short_title}}</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="{{ route('post.show', ['id' => $post->post_id]) }}" class="btn btn-primary">view post</a>
              </div>
            </div>
          </div>
          @endforeach()
  
        </div>
            
        <div class="container">
        @if(!isset($_GET['search']))
        {{$posts->links()}}
        @endif
        </div>

@endsection