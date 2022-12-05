<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <title>MicroEye Educational Institute</title>
  </head>

  <body>
    <nav class="navbar bg-dark">
      <h1>
        <a href="#">
          <i class="fas fa-graduation-cap"> </i> MicroEye Educational Institute
        </a>
      </h1>

      <ul class="header-links">
        <i class="fab fa-facebook"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-twitter"></i>

        <li><a href="{{route ('select-type-login')}}">Login</a></li>
        <li><a href="{{route ('select-type')}}">Sign Up</a></li>
        <li><a href="{{url ('register-details')}}">Register</a></li>

      </ul>    

        <!-- @if(Route::has('user.login'))
        @auth
          <a href="{{url('user/home')}}" class="text-sm text-gray-700 underline" style="padding-left: 1em !important;">Hi {{Auth::user()->first_name}}</a>
       
        @elseif(Route::has('admin.login'))
        @auth
          <a href="{{url('admin/home')}}" class="text-sm text-gray-700 underline" style="padding-left: 1em !important;">My Profile</a>
       
        @elseif(Route::has('teacher.login'))
        @auth
        <a href="{{url('teacher/home')}}" class="text-sm text-gray-700 underline" style="padding-left: 1em !important;">Hi {{Auth::teacher()->first_name}}</a>
  
        @else -->

      <!--  
        @endauth
        @endauth
        @endauth
      @endif -->
      
    </nav>

    <section class="landing">
      <div class="dark-overlay">
        <div class="landing-inner">
          <h1 class="x-large">MicroEye Institute</h1>
          <p class="lead">
            Education is the most powerful weapon which you can use to change
            the world
          </p>
          <div class="button">
            <a href="{{url ('register-details')}}" class="btn btn-primary"> Get Started </a>
            <!-- <a href="login.html" class="btn"> Login </a> -->
          </div>
        </div>
      </div>
    </section>
  </body>
</html>