@extends('template')

@section('content')
<div>
  <h1>New Profile Registration</h1>
</div>
<div class="col-md-6">
  <form action="/register" method="POST">
    @csrf
    <div class="form-group">
      <label for="name">Your Name</label>
      <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter Your Name"
        name="name">
    </div>
    <div class="form-group">
      <label for="email">Email address</label>
      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email"
        name="email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="phone">Mobile Number</label>
      <input type="number" class="form-control" id="phone" aria-describedby="mobileHelp"
        placeholder="Enter Mobile Number" name="phone">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" placeholder="Password" name="password">
    </div>
    <button type="submit" class="btn btn-outline-primary">Create Profile</button>
    <a class="btn btn-outline-danger" href="/" role="button">Cancel</a>
  </form>
</div>
</form>
@endsection