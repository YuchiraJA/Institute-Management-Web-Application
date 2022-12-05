<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
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
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="../css/styles.css" />
    <title>MicroEye Educational Institute</title>
  </head>
  <body>
    <!-- Header Starts -->
    <nav class="navbar bg-dark ">
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
        <li><a href="#">|</a></li>
        <li><a href="#">Logout</a></li>
      </ul>
    </nav>
    <!-- Header Ends -->
<section class="container">
<h1 class="large text-primary">Sign Up</h1>
      <p class="lead"><i class="fas fa-user"></i> Create Your Account</p>
      
      <form action="{{route('user.create')}}" method="POST" class="form">
      {{ method_field('POST') }}
            @csrf
            @if(Session::get('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
            @if(Session::get('fail'))
                <div class="alert alert-danger">
                    {{Session::get('fail')}}
                </div>
            @endif
        <div class="form-group">
          <input type="text" placeholder="First Name" name="first_name" value="{{old('first_name')}}" />
          <span class="text-danger">@error('first_name'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
          <input type="text" placeholder="Last Name" name="last_name" value="{{old('last_name')}}" />
          <span class="text-danger">@error('last_name'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
          <input type="email" placeholder="Email" name="email" value="{{old('email')}}"/>
          <span class="text-danger">@error('email'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
          <input type="password" placeholder="Password" name="password" value="{{old('password')}}"/>
          <span class="text-danger">@error('password'){{$message}}@enderror</span>          
        </div>
        <div class="form-group">
          <input type="password" placeholder="Confirm Password" name="cpassword" value="{{old('cpassword')}}"/>
          <span class="text-danger">@error('cpassword'){{$message}}@enderror</span>
        </div>
        
        <select class="form-group" aria-label="Default select example" name="grade" value="{{old ('grade')}}" required>
        <span class="text-danger">
            @error('grade'){{$message}}@enderror
        </span>
        <option selected>Select your grade</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
      </select>

        <select class="form-group" aria-label="Default select example" name="subject" value="{{old ('subject')}}" required>
        <span class="text-danger">
            @error('subject'){{$message}}@enderror
        </span>
        <option selected>Select your subject</option>
        <option value="English">English</option>
        <option value="Maths">Maths</option>
        <option value="Science">Science</option>
        <option value="ICT">ICT</option>
        <option value="Sinhala">Sinhala</option>
        <option value="Tamil">Tamil</option>
        <option value="Music">Music</option>
        <option value="History">History</option>
        <option value="Chemistry">Chemistry</option>
        <option value="Biology">Biology</option>
        <option value="Combined Maths">Combined Maths</option>
        <option value="Physics">Physics</option>
        <option value="Business Studies">Business Studies</option>
        <option value="Accounting">Accounting</option>
        <option value="Economics">Economics</option>
      </select>

        <div class="form-group">
          <input type="text" placeholder="Contact Number" name="mobile" value="{{old('mobile')}}" />
          <span class="text-danger">@error('mobile'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
          <input type="text" placeholder="Address" name="address" value="{{old('address')}}" />
          <span class="text-danger">@error('address'){{$message}}@enderror</span>
        </div>
        <div class="form-group"> 
          <input type="submit" value="Register" class="btn btn-primary" />
        </div>
      </form>
      <p class="my-1">
        Already have an account? <a href="{{route ('user.login')}}">Sign In</a>
      </p>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
