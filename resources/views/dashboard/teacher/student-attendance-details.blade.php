<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous"
  />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/../css/joel.css" />
    <link rel="stylesheet" href="/../css/styles.css" />
    <title>Admin Update</title>

    <style>
     #checkBox {
        margin-top: 7px !important;
        margin-right: 7px !important;
      }

        .container-md {
            margin-top: 4rem !important;
            margin-bottom: 4rem !important;
        }

        .container {
          max-width: 1200px !important;
        }

        .sidebar-logo {
        width: 300px !important;
        height: 140px !important;
        margin-left: 1.2rem !important;
        margin-top: 1.2rem !important;
        margin-bottom: 1.2rem !important;
      }

      .fa-bars:before {
        margin-top: 0.3rem !important;
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
        <li>
          <i class="fas fa-bars align-items-center" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"></i>
        </li>   
        @if(Auth::guest())
        @else
    
        <li class="dropdown">
          <a href="{{url('user/home')}}" class="text-sm text-gray-700 underline">Hi {{Auth::user()->first_name}}</a>        
        </li>
     
        @endif
      </ul>
    </nav>
    <!-- Header Ends -->

    <!-- Sidebar -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header">
        <img src="/images/Micro Eye Logo.png" class="sidebar-logo" alt="">
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div class="fw-bold h3 ms-3">
          Quick Links       
      </div>
        <div class="my-3">
          <ul class="lead">
              <li class="mb-2 ms-4"><a href="#" class="text-decoration-none">Exam</a></li>
              <li class="mb-2 ms-4"><a href="#" class="text-decoration-none">Question</a></li>
              <li class="mb-2 ms-4"><a href="#" class="text-decoration-none">Test</a></li>
              <li class="mb-2 ms-4"><a href="#" class="text-decoration-none">Test</a></li>
              <li class="mb-2 ms-4"><a href="#" class="text-decoration-none">Test</a></li>
              <li class="mb-2 ms-4"><a href="#" class="text-decoration-none">Test</a></li>
              <li class="mb-2 ms-4"><a href="#" class="text-decoration-none">Test</a></li>
              <li class="mb-2 ms-4"><a href="#" class="text-decoration-none">Test</a></li>
              <li class="mb-2 ms-4"><a href="#" class="text-decoration-none">Test</a></li>
          </ul>
        </div>
      </div>
    </div>


    <section class="container">
    <h1 class="large text-primary">Mark Attendance </h1>

    <form action="{{route('teacher.student-attendance-details')}}" method="POST" class="form">
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
        <label for="">ID</label>
          <input type="text" name="id" value="{{$data['id']}}" readonly />
          <span class="text-danger">
            @error('id'){{$message}}@enderror
          </span>
    </div>
    <div class="form-group">
        <label for="">First Name</label>
          <input type="text" name="first_name" value="{{$data['first_name']}}" readonly />
          <span class="text-danger">
            @error('first_name'){{$message}}@enderror
          </span>
    </div>
    <div class="form-group">
        <label for="">Last Name</label>
          <input type="text" name="last_name" value="{{$data['last_name']}}" readonly />
          <span class="text-danger">
            @error('last_name'){{$message}}@enderror
          </span>
    </div>
    <div class="form-group">
        <label for="">Email</label>
          <input type="email" name="email" value="{{$data['email']}}" readonly />
          <span class="text-danger">
            @error('email'){{$message}}@enderror
          </span>
    </div>
    <div class="form-group">
        <label for="">Mobile</label>
          <input type="text" name="mobile" value="{{$data['mobile']}}" readonly />
          <span class="text-danger">
            @error('mobile'){{$message}}@enderror
          </span>
    </div>
    <div class="form-group">
        <label for="">Grade</label>
          <input type="text" name="grade" value="{{$data['grade']}}" readonly />
          <span class="text-danger">
            @error('grade'){{$message}}@enderror
          </span>
    </div>
    <div class="form-group">
        <label for="">Subject</label>
          <input type="text" name="subject" value="{{$data['subject']}}" readonly />
          <span class="text-danger">
            @error('subject'){{$message}}@enderror
          </span>
    </div>

    <select class="form-group" aria-label="Default select example" name="attendance" required>
        <span class="text-danger">
            @error('attendance'){{$message}}@enderror
        </span>
        <option selected>Select Attendance</option>
        <option value="Attended">Attended</option>
        <option value="Not Attended">Not Attended</option>
      </select>

    <div class="form-group">
          <input style="width: 100%; padding: 0.7rem 0 !important;" type="submit" value="Mark Attendance" class="btn btn-success" />
        </div>

    </form>


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

    
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
  ></script>

  <!-- <script>
      function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
        }

        function myFunction2() {
        var y = document.getElementById("myInput2");
        if (y.type === "password") {
            y.type = "text";
        } else {
            y.type = "password";
        }
        }

  </script> -->
</body>
</html> 