@extends('layouts.master')

@section('content')

	<div id="login" class="page">
		<h1>Login</h1>

		{{ Form::open(['route' => 'session.store']) }}

			<div>
				{{ Form::label('username', 'Username') }}
				{{ Form::text('username', Input::old('username')) }}
			</div>

			<div>
				{{ Form::label('password', 'Password') }}
				{{ Form::password('password') }}
			</div>

			<div>
				{{ Form::label('remember', 'Remember me?') }}
				{{ Form::checkbox('remember', Input::old('remember')) }}

				{{ Form::submit('Login') }}
			</div>

			@if (Session::has('error'))
				<div class="error">
					{{ Session::get('error') }}
				</div>
			@endif

		{{ Form::close() }}
	</div>

@stop