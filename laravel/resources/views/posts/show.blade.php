@extends('layout.app')

@section('content')
<a href="/laravel/laravel/public/posts" class="btn btn-default">GoBack</a>
   <h1>{{$post->title}}</h1>
   
   <div>
     {!!$post->body!!}
   </div>
   <hr>
   <small> Written on {{$post->created_at}} </small>
   <hr>
   <a href="/laravel/laravel/public/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
   {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'pull-right'])!!}
      {{Form::hidden('_method','Delete')}}
      {{Form::submit('Delete',['class'=>'btn btn-danger'])}}

   {!!Form::close()!!}
@endsection