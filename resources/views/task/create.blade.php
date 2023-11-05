<!-- <h1>Hello</h1> -->
@extends('layouts.app')
@section('content')
@if ($message = Session::get('msg'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong>{{ $message }}</strong>
</div>
@endif
<div class="container">
<div class="row d-flex justify-content-center">

   <div class="col-sm-6 m-2 p-3" id="box">

<center><h4>Add Task</h4></center>
<form class="well form-horizontal" action="{{ url('task/store') }}" method="post">
  @csrf
    <fieldset>
        <div class="form-group">
            <label class="col-md-5 control-label">Task-Details</label>
            <div class="col-md-12 ">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <textarea name="taskdetails" class="form-control" type="text"> 
                  </textarea>
                </div>
            </div>
        </div>
     
        <div class="form-group">
            <label class="col-md-5 control-label">Task-Type</label>
            <div class="col-md-12 ">
                <div class="input-group">
                    <select name="tasktype" class="form-control" id="">
                    <option value="">----Select Type----</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>

                    </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-5 control-label">Status</label>
            <div class="col-md-12 ">
            <select name="status" class="form-control" id="">
            <option value="">----Select Status----</option>
                        <option value="1">Pending</option>
                        <option value="2">Done</option>
</select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-5 control-label">Select User</label>
            <div class="col-md-12 ">
            <select name="user" class="form-control" id="">
            <option value="">----Select User----</option>
                        @foreach($users as $user)
                
                        <option value="{{$user->id}}">{{$user->name}}</option>

                        @endforeach
            
     </select>
            </div>
        </div>  
        <div class="form-group">
            <label class="col-md-5 control-label"></label>
            <div class="col-md-12">
                <button type="save" id="save"  class="btn btn-primary login-button">Save</button>
            </div>
        </div>

    </fieldset>
</form>
</div>


<script>  
</script>
@endsection
