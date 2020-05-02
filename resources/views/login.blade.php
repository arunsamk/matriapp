@extends('template')

@section('content')
<div>
    <h1>Enter your credentials</h1>
</div>
<div class="col-md-6">
    <form action="/login" method="">
        <div class="form-group">
            <label for="username">User Name</label>
            <input type="text" class="form-control" id="username" placeholder="User Name" name="username">
        </div>
        <div class="form-group">
            <label for="pwd">User Name</label>
            <input type="password" class="form-control" id="pwd" placeholder="Password" name="pwd">
        </div>
        <button type="submit" class="btn btn-outline-primary">Sign In</button>
        <a class="btn btn-outline-danger" href="/" role="button">Cancel</a>

        <a class="btn btn-outline-success" href="/register" role="button">Register</a>
    </form>
</div>


@endsection