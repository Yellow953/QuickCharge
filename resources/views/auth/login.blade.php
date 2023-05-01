<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QuickCharge | Login</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
</head>

<body>
    <div class="registration-form">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-icon bg-white my-1">
                <img src="{{asset('assets/images/logo.png')}}" alt="" class="img-fluid">
            </div>
            <h2 class="text-center my-3 text-primary">Login</h2>
            <div class="form-group">
                <input id="email" type="email" class="form-control item @error('email') is-invalid @enderror"
                    name="email" placeholder="Email..." value="{{ old('email') }}" required autocomplete="email"
                    autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <input id="password" type="password" class="form-control item @error('password') is-invalid @enderror"
                    name="password" required autocomplete="password" placeholder="********">
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-block create-account">Login</button>
            </div>

            <br><br>
            <p>Don't have an account yet? <a href="/register">Sign Up</a></p>
        </form>

    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js">
    </script>
    <script>
        $(document).ready(function(){
        $('#birth-date').mask('00/00/0000');
        $('#phone-number').mask('0000-0000');
        })
    </script>
</body>

</html>