@extends ('layouts/admin')

@section ('content')
    <h1 class="page-header">Users</h1>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Created</th>
        </tr>
        </thead>
        <tbody>
        @if($users)
            @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>
                @if($user->photo)
                <img height="50" src="{{ $user->photo->path }}" alt="{{ $user->photo->alt }}" />
                @else
                    <img height="50" src="http://placehold.it/50x50" alt="User photo" />
                @endif
            </td>
            <td><a href="{{ route('admin.users.edit', $user->id) }}">{{ $user->name }}</a></td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->role->name }}</td>
            <td>{{ ($user->is_active)?'active' : 'Not active' }}</td>
            <td>{{ $user->created_at->diffForHumans() }}</td>
        </tr>
            @endforeach
        @endif
        </tbody>
    </table>

@stop