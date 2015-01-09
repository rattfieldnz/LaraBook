@extends('layouts.default')

@section('content')
<h1>Register</h1>

{{ Form::open(['route' => 'register_path']) }}

    <!-- Username field input -->
    <div class="form-group">
        {{ Form::label('username', 'Username:') }}
        {{ Form::text('username', null, ['class' => 'form-control']) }}
    </div>
    
    <!-- Email field input -->
    <div class="form-group">
        {{ Form::label('email', 'Email:') }}
        {{ Form::text('email', null, ['class' => 'form-control']) }}
    </div>
    
    <!-- Password field input -->
    <div class="form-group">
        {{ Form::label('password', 'Password:') }}
        {{ Form::password('password', null, ['class' => 'form-control']) }}
    </div>
    
    <!-- Password confirm field input -->
    <div class="form-group">
        {{ Form::label('password_confirmation', 'Password Confirmation:') }}
        {{ Form::password('password_confirmation', null, ['class' => 'form-control']) }}
    </div>
    
    <div class="form-group">
        {{ Form::submit('Sign Up!', ['class' => 'btn btn-primary']) }}
    </div>
    
{{ Form::close() }}

@stop