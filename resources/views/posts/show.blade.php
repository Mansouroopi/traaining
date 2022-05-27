@extends('layouts.master')
@section('content')

   <h1> SHow one post</h1>

   <div class="row">

       <div class="col-md-12">

          {{ $post->title }}
          {{ $post->body }}
          {{ $post->created_at }}
          {{ $post->user->email }}
       </div></div>



@stop