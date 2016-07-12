@extends ('layouts/admin')

@section ('content')
    <h1 class="page-header">Edit user</h1>

    {!! Form::model($user, array('method' => 'PATCH', 'action' => ['AdminUsersController@update', $user->id], 'files' => true )) !!}

    <div class="col-sm-3">

        @if($user->photo)
            <img src="{{ $user->photo->path }}" alt="{{ $user->photo->alt }}" class="img-responsive img-rounded"/>
        @else
            <img src="http://placehold.it/200x200" alt="User photo" />
        @endif
        <div class="form-group">
            {!! Form::label('photo_id', 'Photo: ') !!}
            {!! Form::file('photo_id', null, ['class' => 'form-control']) !!}
        </div>

    </div>

    <div class="col-sm-9">

        <div class="form-group">
            {!! Form::label('name', 'Name: ') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Email address: ') !!}
            {!! Form::text('email', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('is_active', 'Status: ') !!}
            {!! Form::select('is_active', array(1=>'Active', 0=>'Not active'), null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('role_id', 'Role: ') !!}
            {!! Form::select('role_id', $roles, null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Password: ') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Update User', ['class' => 'btn btn-primary']) !!}
        </div>

        @include('includes/errors')

    </div>

    {!! Form::close() !!}

    {!! Form::open(['method' => 'DELETE', 'action' => ['AdminUsersController@destroy', $user->id], 'class' => 'col-sm-3 pull-right' ]) !!}

        <div class="form-group  pull-right">
            {!! Form::submit('Delete User', ['class' => 'btn btn-danger']) !!}
        </div>

    {!! Form::close() !!}


@stop