@extends('template')

@section('content')
<div>
    <h1>View Profile</h1>
    <h2>Retrived Records form DB</h2>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>UserId</th>
                    <th>Name</th>
                    <th>EmailAddr.</th>
                    <th>ContactNo.</th>
                    <th>Password</th>
                </tr>
                @foreach($musers as $muser)
                <tr>
                    <td>{{ $muser->id }}</td>
                    <td>{{ $muser->name }}</td>
                    <td>{{ $muser->email }}</td>
                    <td>{{ $muser->contactno }}</td>
                    <td>{{ $muser->password }}</td>
                </tr>
                @endforeach
            </thead>
        </table>
    </div>
</div>
@endsection