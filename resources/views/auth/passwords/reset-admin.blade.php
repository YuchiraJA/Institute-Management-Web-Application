<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Reset Password</title>
    <link rel="stylesheet" href="/css/styles.css" />
</head>
<body>
        <section class="container">

        <h1 class="large text-primary">Reset Your Password</h1>
        <p class="lead"><i class="fas fa-user"></i> Enter your new password below</p>

        <form action="{{route ('admin.password.request')}}" method="POST" class="form" novalidate="">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
        <div class="form-group">
            <input type="email" name="email" placeholder="Email" value="{{$email ?? old('email')}}" />
            <span class="text-danger">@error('email'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder="Enter New Password" minlength="6" value="{{old('password')}}"  id="password" />
            <span class="text-danger">@error('password'){{$message}} @enderror</span>
            <!-- @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror -->
        </div>
        <div class="form-group">
            <input type="password" name="password_confirmation" placeholder="Confirm New Password" minlength="6" value="{{old('password_confirmation')}}" id="password-confirm"" />
            <span class="text-danger">@error('cpassword') {{$message}} @enderror</span>
        </div>
        <div class="form-group">
            <input type="submit" value="Reset Password" class="btn btn-primary" />
        </div>
        </form>
        <!-- <p class="my-1">
        Don't have an account? <a href="{{route('user.register')}}">Sign Up</a>
        </p>
        <p class="my-1">
        <a href="{{route('user-forgot-password')}}">Forgot Password?</a>
        </p> -->
        </section>
</body>
</html>
