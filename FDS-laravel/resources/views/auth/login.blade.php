@extends('layouts.user')

@section('content')
  <ul class="tab-group">
    <li class="tab active"><a href="{{ url('/login') }}">Log In</a></li>
    <li class="tab"><a href="{{ url('/register') }}">Sign Up</a></li>
  </ul>

  <div class="tab-content">
    <div id="login">   
      <h1>Welcome Back !</h1>
      <form action="{{ url('/login') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="field-wrap">
          <label>
            Username
          </label>
          <input type="text" id="username" name="username" required autocomplete="off"/>
        </div>
      
        <div class="field-wrap">
          <label>
            Password
          </label>
          <input type="password" id="password" name="password" required autocomplete="off"/>
          @if ($errors->has('username'))
            <span class="error-block">
                <strong>{{ $errors->first('username') }}</strong>
            </span>
          @endif
        </div>
        <button class="button button-block"/>Login</button>
      </form>
      </div>
   </div>
@endsection