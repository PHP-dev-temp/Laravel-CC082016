@extends ('layouts/admin')

@section ('content')
    <h1 class="page-header">Create user</h1>

    {!! Form::open(array('method' => 'POST', 'action' => 'AdminUsersController@store', 'files' => true )) !!}

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
        {!! Form::select('is_active', array(1=>'Active', 0=>'Not active'), 0, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('role_id', 'Role: ') !!}
        {!! Form::select('role_id', $roles, 3, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password', 'Password: ') !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('photo_id', 'Photo: ') !!}
        {!! Form::file('photo_id', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create User', ['class' => 'btn btn-primary']) !!}
    </div>

    @include('includes/errors')

    {!! Form::close() !!}


@stop