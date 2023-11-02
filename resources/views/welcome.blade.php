<!-- <h1>Hello</h1> -->
@extends('layouts.app')

@section('content')
<div class="container">
    
    <h1>Add User</h1>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="mobile">Mobile:</label>
            <input type="text" name="mobile" id="mobile" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
