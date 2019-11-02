@extends('admin.master')

@section('page-title')
View All Category
@endsection

@section('content-heading')
View All Category
@if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

@endsection


@section('mainContent')

            <table class="table table-bordered table-striped mb-none" id="datatable-all-contact">
									<thead>
										<tr>
											<th>Category Id</th>
											<th>Category Name</th>
											<th>Action</th>
										</tr>
									</thead>
      @foreach($data_list as $key => $data)
      <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->name}}</td>
        <td class="actions">
             <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
             <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
              <a href="{{URL::to('/category/edit_category/'.$data->id)}}" class="btn btn-info">Edit</a>
            <a href="{{URL::to('/category/delete_category/'.$data->id)}}" class="btn btn-danger">Delete</a>
           </td>
          </tr>
@endforeach
@endsection
