<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Login</title>
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
    <link rel="stylesheet" href="../css/styles.css" />
    <title>MicroEye Educational Institute</title>
    <style>
      .container {
      margin-top: 10rem !important;
    }
    </style>
  </head>
  <body>
    <!-- Header Starts -->
    <nav class="navbar bg-dark">
      <h1>
        <a href="/">
          <i class="fas fa-graduation-cap"> </i> MicroEye Educational Institute
        </a>
      
    </h1>

      <ul>
        <li><a href="#">Timetables</a></li>
        <li><a href="#">Classes</a></li>
        <li><a href="#">Notices</a></li>
        <li><a href="#">Exams</a></li>
        <li><a href="#">Library</a></li>
        <li><a href="#">Q & A</a></li>
        <li><a href="#">Finance</a></li>
      </ul>
    </nav>

    <!-- Header Ends -->
    
    <section class="container">
      <!-- Alert
      <div class="alert alert-danger">Invalid Credentials</div> -->

      <h1 class="large text-primary">Sign In</h1>
      <p class="lead"><i class="fas fa-user"></i> Sign into Your Account</p>

      <form action="{{route ('admin.check')}}" method="POST" class="form">
      {{ method_field('POST')}}
            @if (Session::get('fail'))  
                 <div class="alert alert-danger">
                     {{Session::get('fail')}}
                 </div>
            @endif
            @csrf
        <div class="form-group">
          <input type="email" name="email" placeholder="Email" value="{{old('email')}}" />
          <span class="text-danger">@error('email'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
          <input type="password" name="password" placeholder="Password" minlength="6" value="{{old('password')}}" />
          <span class="text-danger">@error('password'){{$message}} @enderror</span>
        </div>
        <div class="form-group">
          <input type="submit" value="Login" class="btn btn-primary" />
          <p class="my-1">
            <a href="{{route ('admin.password.request')}}">Forgot Password?</a>
         </p>
        </div>
      </form>
      <!-- <p class="my-1">
        Don't have an account? <a href="{{route('select-type')}}">Sign Up</a>
      </p> -->
    </section>

    <!-- Footer Starts -->
    <footer class="footer">
      <div class="footer-container">
        <div class="footer-lists">
          <ul>
            <div class="micro-eye-logo">
              <a href="index.html">
                <img src="../images/Micro Eye Logo.png" alt="" />
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
            <li><a href="#">Micro Eye</a></li>
            <li><a href="#">No:21, 2nd Road</a></li>
            <li><a href="#">Malabe</a></li>
            <li><a href="#">Sri Lanka</a></li>
          </ul>
        </div>
        <div class="divider"></div>
      </div>
    </footer>
    <!-- Footer end -->
  </body>
</html>
