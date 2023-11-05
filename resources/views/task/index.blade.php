@extends('layouts.app')

@section('content')
<div class="content-wrapper">
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><strong>Task List</strong></h3>
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
                <th>Task Details</th>
                <th>Task Type</th>
                <th>Assigned Users</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @if(isset($tasks))
                @foreach($tasks as $task)
              <tr>
                <td>{{ $task->id}}</td>
                <td>{{ $task->task_details }}</td>
                <td>{{ $task->task_type }}</td>
                <td>{{ $task->assigned_users }}</td>
                @if($task->status=='1')
                <td class="text-danger">Pending</td>
                @elseif($task->status=='2')
                <td class="text-success">Done</td>

                @endif
                
                <td>Action</td>
              </tr>
              @endforeach
              @endif
            </tbody>
          </table>

          {{$tasks->links()}}
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
</div>
@endsection
