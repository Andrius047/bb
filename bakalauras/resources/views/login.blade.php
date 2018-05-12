<html>
<header class="row">
    @include('includes.header')
</header>

<body>
{{--<a href="{{ URL::to('logout') }}">Logout</a>--}}

{!! Form::open(array('url' => 'login')) !!}
<h1>Login</h1>

<p>
    {!! $errors->first('email') !!}
    {!! $errors->first('password') !!}
</p>

<p>
    {!! Form::label('email', 'Email Address') !!}
    {!! Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com')) !!}
</p>

<p>
    {!! Form::label('password', 'Password') !!}
    {!! Form::password('password') !!}
</p>

<p>{!! Form::submit('Submit!') !!}</p>
{!! Form::close() !!}

