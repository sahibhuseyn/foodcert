@extends('layouts.app')

@section('content')


    <div class="limiter">
        <div class="container-login100" style="background-image: url('/admin/login/images/bg-01.jpg');">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

                    <span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

                    <div class="wrap-input100 validate-input {{ $errors->has('email') ? ' has-error' : '' }}" data-validate = "Enter email">
                        <input class="input100" type="text" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus >
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100 {{ $errors->has('password') ? ' has-error' : '' }}" type="password" name="password" placeholder="Password">
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-90">
                        <a class="txt1" href="{{ route('password.request') }}">
                            Forgot Password?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>


@endsection
