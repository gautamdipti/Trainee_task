@extends('layouts.app')

@section('content')
<div class="content-wrapper">
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><strong>Users</strong> <a href="{{ url('add-task') }}" class="btn btn-info" style="float:right; font-size:17px;">Add Task</a></h3>
          <div class="text-right">
          </div>
          
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 300px;">
        @if ($message = Session::get('msg'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong>{{ $message }}</strong>
</div>
@endif
          <table class="table table-head-fixed text-nowrap">
            <thead>
              <tr>
                
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
               
              </tr>
            </thead>
            <tbody>
              @if(isset($shows))
                @foreach($shows as $value)
              <tr>
                <td>{{ $value->id}}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->mobile }}</td>
               
              </tr>
              @endforeach
              @endif
            </tbody>
          </table>

          {{$shows->links()}}
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
</div>
@endsection
