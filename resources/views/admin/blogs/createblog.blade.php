@extends('admin.master')

@section('page-title')
Create Blog
@endsection

@section('content-heading')
Create New Blog
@if(session()->has('success'))
<div class="alert alert-success">
  {{ session()->get('success') }}
</div>
@endif
@endsection

@section('mainContent')
  <div class="panel-body">
    <div class="row">
      <div class="col-lg-6">
        <form action="{{url('/blog/save_blog')}}" method="post">
          @csrf
          <div class="form-group">
            <label>Title</label>
            <input class="form-control" name ="title">
          </div>
          <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name ="description">
            </textarea>
          </div>
          <div class="form-group">
            <input type ="submit" value="Create New Blog" class="btn btn-block btn-primary">
          </div>
        </form>
        </div>
      </div>
    </div>
@endsection
