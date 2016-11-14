@extends('layouts.user')

@section('content')
    <ul class="tab-group">
        <li class="tab"><a href="{{ url('/login') }}">Log In</a></li>
        <li class="tab active"><a href="{{ url('/register') }}">Sign Up</a></li>
    </ul>

    <div class="tab-content">
        <div id="signup">
          <h1>Food Delivery System</h1>

          <form action="{{ url('/register') }}" role="form" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="field-wrap">
              <label>
                Username<span class="req">*</span>
              </label>
              <input type="text" id="username-reg" name="username-reg" required autocomplete="off" />
                @if ($errors->has('username-reg'))
                    <span class="error-block">
                        <strong>{{ $errors->first('username-reg') }}</strong>
                    </span>
                @endif
            </div>

            <div class="field-wrap">
              <label>
                Email Address<span class="req">*</span>
              </label>
              <input type="email" id="email" name="email" required autocomplete="off"/>
            </div>

            <div class="field-wrap">
              <label>
                Password<span class="req">*</span>
              </label>
              <input type="password" id="password-reg" name="password-reg" required autocomplete="off"/>
                @if ($errors->has('password-reg-confirm'))
                    <span class="error-block">
                        <strong>{{ $errors->first('password-reg-confirm') }}</strong>
                    </span>
                @endif
            </div>

            <div class="field-wrap">
              <label>
                Confirm Password<span class="req">*</span>
              </label>
              <input type="password" id="password-reg-confirm" name="password-reg-confirm" required autocomplete="off"/>
               @if ($errors->has('password-reg-confirm'))
                    <span class="error-block">
                        <strong>{{ $errors->first('password-reg-confirm') }}</strong>
                    </span>
                @endif
            </div>

            <div class="field-wrap">
              <label>
                Address<span class="req">*</span>
              </label>
              <input type="text" id="address" name="address" autocomplete="off" />
            </div>

            <div class="field-wrap">
              <label>
                Phone
              </label>
              <input type="text" id="phone" name="phone" autocomplete="off" />
            </div>
            <button type="submit" class="button button-block"/>Register</button>
          </form>
        </div>
     </div>
@endsection
