@extends('layouts.shieldpage')

@section('content')

<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Register</h5>

            
            <form class="form-signin" method="POST" action="{{ route('register') }}">
              @csrf

              <div class="form-label-group">
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                <label for="name">{{ __('Name') }}</label>

                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif

              </div>

              <div class="form-label-group">
                <input id="inputEmail" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                <label for="inputEmail">{{ __('E-Mail Address') }}</label>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif

              </div>

              <div class="form-label-group">
                <input id="inputPassword" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required="">
                <label for="inputPassword">{{ __('Password') }}</label>

              @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
              @endif

              </div>

              <div class="form-label-group">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required="">
                <label for="password-confirm">{{ __('Confirm Password') }}</label>
              </div>

              <div class="form-label-group">
                <input id="tocken" type="password" class="form-control" name="tocken" required="">
                <label for="tocken">Tocken</label>

              @if ($errors->has('tocken'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('tocken') }}</strong>
                </span>
              @endif
              
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">{{ __('Register') }}</button>

            </form>
            

          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
