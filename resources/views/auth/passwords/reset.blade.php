<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Forgot Password</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="/css/styles.css" />
    <link rel="stylesheet" href="/css/joel.css" />

    <style>
      .container {
        max-width: 1500px !important;
        margin-top: 11rem !important;
        max-width: 1100px !important;
        padding: 0 2rem !important;
    }

    </style>

  </head>
<body>
      
        <!-- Header Starts -->
        <nav class="navigaation-bar background-dark">
      <h1>
        <a href="/">
          <i class="fas fa-graduation-cap"> </i> MicroEye Educational Institute
        </a>
      </h1>

      <ul>
        <!-- <li><a href="#">Home</a></li> -->
        <li><a href="#">Timetables</a></li>
        <li><a href="#">Classes</a></li>
        <li><a href="#">Notices</a></li>
        <li><a href="#">Exams</a></li>
        <li><a href="#">Library</a></li>
        <li><a href="#">Q & A</a></li>
        <li><a href="#">Finance</a></li>
        <li><a href="#">|</a></li>
        @if(Auth::guest())
        @else
    
        <li class="dropdown">
          <a href="{{url('user/home')}}" class="text-sm text-gray-700 underline">Hi {{Auth::user()->first_name}}</a>        
        </li>
     
        @endif
      </ul>
    </nav>

    <!-- Header Ends -->

        <section class="container">

        <h1 class="large text-primary">Reset Your Password</h1>
        <p class="lead"><i class="fas fa-user"></i> Enter your new password below</p>

        <form action="{{route ('password.update')}}" method="POST" class="form" novalidate="">
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

            <!-- Footer Starts -->
            <footer class="footer">
      <div class="footer-container">
        <div class="footer-lists">
          <ul>
            <div class="micro-eye-logo">
              <a href="index.html">
                <img src="/images/Micro Eye Logo.png" alt="" />
              </a>
            </div>
          </ul>
          <ul>
            <li class="list-head">Quick Links</li>
            <li><a href="#">My Pofile</a></li>
            <li><a href="#">Attendance</a></li>
            <li><a href="#">Finance</a></li>
            <li><a href="#">Timetables</a></li>
          </ul>
          <ul>
            <li class="list-head">Quick Links</li>
            <li><a href="#">My Exams</a></li>
            <li><a href="#">Classes</a></li>
            <li><a href="#">Notices</a></li>
            <li><a href="#">Notifications</a></li>
          </ul>
          <ul>
            <li class="list-head">Sitemap</li>
            <li><a href="#">Home</a></li>
            <li><a href="#">Sign Up</a></li>
            <li><a href="#">Login</a></li>
          </ul>
          <ul>
            <li class="list-head">Contact Us</li>
            <li><a href="#">124/B</a></li>
            <li><a href="#">Aluthgama</a></li>
            <li><a href="#">Bogamuwa</a></li>
            <li><a href="#">Yakkala</a></li>
          </ul>
        </div>
        <div class="divider"></div>
      </div>
    </footer>
    <!-- Footer end -->


</body>
</html>