@extends('admin.master')

@section('page-title')
View All Blog
@endsection

@section('content-heading')
View All Blog
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
											<th>Title</th>
											<th>description</th>
											<th>Action</th>
										</tr>
									</thead>
      @foreach($data_list as $key => $data)
      <tr>
        <td>{{$data->id}}</td>
             <td>{{$data->id}}</td>
            <td>{{$data->title}}</td>
           <td>{{$data->description}}</td>
        <td class="actions">
             <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
             <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
              <a href="{{URL::to('/blog/edit_blog/'.$data->id)}}" class="btn btn-info">Edit</a>
            <a href="{{URL::to('/blog/delete_blog/'.$data->id)}}" class="btn btn-danger">Delete</a>
           </td>
          </tr>

@endforeach
{{$data_list->links()}}

@endsection
