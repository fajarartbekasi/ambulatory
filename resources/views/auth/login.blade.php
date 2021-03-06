<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Information -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reliqui Ambulatory - Login</title>

    <!-- Style sheets-->
    <link href='{{ mix('app.css', 'vendor/ambulatory') }}' rel='stylesheet' type='text/css'>
</head>
<body class="auth-body"">
    <div class="form-auth">
        <div class="text-center mb-5">
            <h1 class="text-uppercase">
                <a href="/" class="text-dark">{{ config('app.name') }}</a>
            </h1>

            @if(session()->has('loggedOut'))
                <p class="font-weight-bold text-success text-center">
                    You've been logged out.
                </p>
            @endif
        </div>

        <div class="form-card">
            <form method="POST" action="{{ route('ambulatory.login.attempt') }}" class="form-horizontal">
                @csrf

                <div class="d-flex w-100 justify-content-between mb-3">
                    <h4>Sign in</h4>

                    <a href="{{ route('ambulatory.password.forgot') }}"> Forgot?</a>
                </div>

                <div class="form-group">
                    <label for="email" class="text-muted">E-mail address</label>

                    <input id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        class="form-control form-control-lg border-0 bg-light {{ $errors->first('email', 'is-invalid') }}"
                        autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="password" class="text-muted">Password</label>

                    <input id="password"
                        type="password"
                        class="form-control form-control-lg border-0 bg-light {{ $errors->first('password', 'is-invalid') }}"
                        name="password"
                        placeholder="******">

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <div class="d-flex w-100 justify-content-between">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="remember" name="remember">

                            <label class="custom-control-label" for="remember">
                                Remember me
                            </label>
                        </div>
                    </div>
                </div>

                <div class="forn-group">
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                </div>

                <p class="text-center text-muted mt-5">
                    Don't have an account? <a href="{{ route('ambulatory.register') }}">Sign Up</a>
                </p>
            </form>
        </div>
    </div>
</body>
</html>