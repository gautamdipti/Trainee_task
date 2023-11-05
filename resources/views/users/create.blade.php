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
<center><h4>Add User</h4></center>
<form class="well form-horizontal" action="{{ url('store') }}" method="post">
  @csrf
    <fieldset>
   
        <div class="form-group">
            <label class="col-md-5 control-label">Name</label>
            <div class="col-md-12 ">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input name="name" maxlength="30" placeholder="Name" class="form-control" type="text" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" >
                </div>
                <br/>
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
         @enderror
                
            </div>
         
        </div>
     
        <div class="form-group">
            <label class="col-md-5 control-label">E-Mail</label>
            <div class="col-md-12 ">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input name="email" maxlength="30" placeholder="E-Mail" id="email" class="form-control" type="text">
                </div>
                <span class="error text-danger"
                id="invalid_email">
              Email-id is invalid
          </span>
                <br/>
               
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
         @enderror
            </div>
           
        </div>

        <div class="form-group">
            <label class="col-md-5 control-label">Mobile</label>
            <div class="col-md-12 ">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input name="mobile" maxlength="12"  placeholder="Enter Mobile Number"class="form-control" type="number">
                </div>
                <br/>
                @error('mobile')
                       <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            
        </div>
        <div class="form-group">
            <label class="col-md-5 control-label"></label>
            <div class="col-md-12">
                <button type="submit" id="submit" class="btn btn-primary login-button">Save</button>
            </div>
        </div>

    </fieldset>
</form>
</div>
</div>

</div>



@endsection
