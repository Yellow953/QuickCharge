<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QuickCharge | Register</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
</head>

<body>
    <div class="registration-form">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-icon bg-white my-1">
                <img src="{{asset('assets/images/logo.png')}}" alt="" class="img-fluid">
            </div>
            <h2 class="text-center my-3 text-primary">Register</h2>
            <div class="form-group">
                <input type="text" class="form-control item" id="name" placeholder="Name...">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="phone" placeholder="Phone Number">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="dob" placeholder="Birth Date">
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" id="password" placeholder="********">
            </div>
            <div class="form-group">
                <input type="password_confirmation" class="form-control item" id="password_confirmation"
                    placeholder="********">
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-block create-account">Create Account</button>
            </div>

            <br><br>
            <p>Already have an account. <a href="/login">Sign In</a></p>
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