<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{url('/favicon.png')}}" type="image/x-icon"/>

    <title>Admin Panel | ToBeIT'61</title>

    <link rel="stylesheet" href="{{ mix('/2017/css/backend.css') }}">
</head>
<body>
    <div class="container" id="login-page">
        <div class="row">
            <div class="col-md-6 ml-md-auto mr-md-auto">
                <h1>Change Password</h1>
                <br />
                @if (count($errors) > 0)
                    <div class="alert alert-danger col-lg-12" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="post" action="{{ url('/backend/changepassword') }}">
                    {{ csrf_field() }}
                    <div class="form-group row">

                        <label for="oldpassword" class="col-sm-3 col-form-label">Old Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="oldpassword" name="oldpassword" placeholder="Old Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="newpassword" class="col-sm-3 col-form-label">New Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="newpassword" name="newpassword" placeholder="New Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-primary">Change</button>
                        </div>
                    </div>
                </form>
                <a href="{{ url('/backend/dashboard') }}">Back</a>
            </div>
        </div>
    </div>

    <div class="fixed-bottom">
        <p id="login-footer">&copy; 2017 | ToBeIT'61</p>
    </div>

    <script src="{{ mix('/2017/js/jquery.min.js') }}"></script>
    <script src="{{ mix('/2017/js/popper.min.js') }}"></script>
    <script src="{{ mix('/2017/js/bootstrap.min.js') }}"></script>
</body>
</html>