@extends('admin.master')

@section('page-title')
Create Category
@endsection

@section('content-heading')
Create New Category
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
<!--  {!! Form::open(['url' =>'/category/save_category','method'=>'post','role'=>'form']) !!}-->

  <form action="{{url('/category/save_category')}}" method="post">
              @csrf
    <div class="form-group">
    <label>Category Name</label>
      <input class="form-control" name ="name">
        </div>
          <div class="form-group">
            <input type ="submit" value="Create Category" class="btn btn-block btn-primary">
                </div>
       {!! Form::close() !!}
</div>
    </div>
   </div>
@endsection
