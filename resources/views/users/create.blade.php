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

<form class="well form-horizontal" action="{{ url('store') }}" method="post">
  @csrf
    <fieldset>
      <legend>Register</legend>
        <div class="form-group">
            <label class="col-md-4 control-label">Name</label>
            <div class="col-md-4 ">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input name="name" maxlength="30" placeholder="Name" class="form-control" type="text" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" >
                </div>
            </div>
        </div>
     
        <div class="form-group">
            <label class="col-md-4 control-label">E-Mail</label>
            <div class="col-md-4 ">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input name="email" maxlength="30" placeholder="E-Mail" class="form-control" type="text">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Mobile</label>
            <div class="col-md-4 ">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input name="mobile" maxlength="12"  placeholder="Enter Mobile Number"class="form-control" type="number">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary login-button">Register</button>
            </div>
        </div>

    </fieldset>
</form>
</div>


<script>
</script>
@endsection
