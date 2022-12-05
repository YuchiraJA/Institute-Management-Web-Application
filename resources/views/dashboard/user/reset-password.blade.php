<section class="container">

      <h1 class="large text-primary">Sign In</h1>
      <p class="lead"><i class="fas fa-user"></i> Sign into Your Account</p>

      <form action="{{route ('password.update')}}" method="POST" class="form">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
        <div class="form-group">
          <input type="email" name="email" placeholder="Email" value="{{$email ?? old('email')}}" />
          <span class="text-danger">@error('email'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
          <input type="password" name="password" placeholder="Enter New Password" minlength="6" value="{{old('password')}}"  id="password" />
          <span class="text-danger">@error('password'){{$message}} @enderror</span>
        </div>
        <div class="form-group">
          <input type="password" name="cpassword" placeholder="Confirm New Password" minlength="6" value="{{old('password')}} id="password-confirm"" />
          <span class="text-danger">@error('cpassword'){{$message}} @enderror</span>
        </div>
        <div class="form-group">
          <input type="submit" value="Login" class="btn btn-primary" />
        </div>
      </form>
      <p class="my-1">
        Don't have an account? <a href="{{route('user.register')}}">Sign Up</a>
      </p>
      <p class="my-1">
        <a href="{{route('user-forgot-password')}}">Forgot Password?</a>
      </p>
    </section>