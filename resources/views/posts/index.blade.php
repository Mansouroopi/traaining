@extends('layouts.master')
@section('content')
<div class="col-sm-9">
      <h4><small>RECENT POSTS</small></h4>
      <a class="btn btn-primary" href="/posts/create">new Post</a>
      <hr>
      @forelse ($posts as $post)
         <h2>{{ $post->title }}</h2>
        <h5><span class="glyphicon glyphicon-time"></span> Post by {{ $post->user->name }}, {{ $post->created_at }}.</h5>
        <h5><span class="label label-danger">{{ $post->category->name ?? '' }}</span> </h5><br>
        <p>{{ $post->body }}</p>
        <a href="/posts/{{ $post->id }}">view</a>
         <a href="/posts/{{ $post->id }}/edit">Edit</a>
         <form method="POST" action="/posts/{{ $post->id }}">
         @csrf
         @method("DELETE")
        <button type="submit">delete</button>
         </form>
        <br><br>
      @empty
      <h1> NO POST YET</h1>
      @endforelse




      {{-- <h4>Leave a Comment:</h4>
      <form role="form">
        <div class="form-group">
          <textarea class="form-control" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
      <br><br>

      <p><span class="badge">2</span> Comments:</p><br>


    </div> --}}
@endsection