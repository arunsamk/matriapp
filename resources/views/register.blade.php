@extends('template')

@section('content')
<div>
<h1>New Profile Registration</h1>
</div>
<div class="col-md-6">
<form>
    <div class="form-group">
    <label for="InputPhone">Your Name</label>
    <input type="text" class="form-control" id="InputName" aria-describedby="nameHelp" placeholder="Enter Your Name">
    </div>
  <div class="form-group">
    <label for="InputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
  <label for="InputPhone">Mobile Number</label>
    <input type="number" class="form-control" id="InputPhone" aria-describedby="mobileHelp" placeholder="Enter Mobile Number">
  </div>
  <div class="form-group">
    <label for="InputPassword">Password</label>
    <input type="password" class="form-control" id="InputPassword" placeholder="Password">
  </div>  
  <button type="submit" class="btn btn-primary">Create Profile</button>
  <button type="cancel" class="btn btn-danger">Cancel</button>
</form>
</div>
</form>
@endsection