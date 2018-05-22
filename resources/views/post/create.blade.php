@extends('layouts.app')

@section('content')
  <div class="container">
    <form class="" action="" method="post">
      <div class="form-group">
        <label for="">Title</label>
        <input type="text" class="form-control" name="title" placeholder="Post title">
      </div>

      <div class="form-group">
        <label for="">Content</label>
        <textarea name="content" rows="5" class="form-control" placeholder="Post content"></textarea>
      </div>

      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Save">
      </div>

    </form>
  </div>
@endsection
