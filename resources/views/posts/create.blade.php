@extends('layouts.master')
@section('content')
   <h1> POST FORM</h1>

   <div class="row">

       <div class="col-md-12">


@if($errors->any())
    <div class="alert alert-danger">

        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="/posts" class="form-horizontal">
   @csrf
 <div class="input-group">
        <input type="text" name="title" class="form-control" placeholder="Enter Title..">
      </div>


      <div class="input-group">
        <textarea type="text" name="body" class="form-control" placeholder="Enter Title.."></textarea>
      </div>


        <div class="input-group">
       <select name="category_id" class="form-control">
           @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
           @endforeach

       </select>
      </div>




  <div class="input-group">
       <button type="submit" class="btn btn-info">Save Post</button>
      </div>


</form>
       </div>

   </div>


@endsection