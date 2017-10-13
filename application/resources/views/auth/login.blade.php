<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{d_url('/favicon.png')}}" type="image/x-icon"/>

    <title>Admin Panel | ToBeIT'61</title>

    <link rel="stylesheet" href="{{ d_asset(mix('/css/backend.css')) }}">
</head>
<body>
    <div class="container" id="login-page">
        <div class="row">
            <div class="col-md-6 ml-md-auto mr-md-auto">
                <h1>Admin Panel</h1>
                <br />
                <form method="post" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="form-group row">

                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="fixed-bottom">
        <p id="login-footer">&copy; 2017 | ToBeIT'61</p>
    </div>

    <script src="{{ d_asset(mix('/js/jquery.min.js')) }}"></script>
    <script src="{{ d_asset(mix('/js/popper.min.js')) }}"></script>
    <script src="{{ d_asset(mix('/js/bootstrap.min.js')) }}"></script>
</body>
</html>