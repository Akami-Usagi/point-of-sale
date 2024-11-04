@extends("layouts.app")

@section("title", "Users List")


@section("content")

    <a href="{{route('users.create')}}">New User</a>
    
    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Type</th>
            <th>Location</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            @if ($users->isEmpty())
                <tr>
                    <td colspan="5">users dont exist</td>
                
                </tr>
            @endif

            @foreach ($users as $user)
                <tr>
                    <td>{{$user->first_name}} {{$user->last_name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone_number}}</td>
                    <td>Admin</td>
                    <td>Buga</td>
                    <td>{{$user->password}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection