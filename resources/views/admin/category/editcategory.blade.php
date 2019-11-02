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
    <form action="{{url('category/update',$data_list->id)}}" method="post">
                  @csrf

    <div class="form-group">
    <label>Category Name</label>
      <input class="form-control" name ="name" value="{{$data_list->name}}" />
        </div>
          <div class="form-group">
            <input type ="submit" value="Update Category" class="btn btn-block btn-primary">
                </div>
       </form>
</div>
    </div>
   </div>
@endsection
