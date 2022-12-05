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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/joel.css" />
    <link rel="stylesheet" href="../css/styles.css" />
    <title>Teacher Dashboard</title>

    <style>
        .container-md {
            margin-top: 4rem !important;
            margin-bottom: 4rem !important;
        }
        .container {
          max-width: 1600px !important;
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

      .search-bar {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
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
        <li><a href="/teacher/Ladd">Classes</a></li>
        <li><a href="#">Notices</a></li>
        <li><a href="/teacher/add-exam">Exams</a></li>
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

    <!-- Header Ends -->

    <section class="container">
    <!-- <h2 class="my-2 text-center large text-primary fw-bold">Current Students List in MicroEye</h2> -->

        <h2 class="my-1 large text-primary fw-bold">Search Students</h2>
    
        <span class="search-bar">
        <form type="get" action="{{route ('teacher.search-student')}}">
            <input style="padding: 0.7rem 0 !important; width: 600px;" class="form-control text-center mb-3" name="query" placeholder="Search Student Using ID" >
            <div class="form-group">
                <input style="width: 600px; margin-bottom: 10px !important;" type="submit" value="Search" class="btn btn-primary" />
            </div>

        
            <!-- <button style="width: 600px; margin-bottom: 10px !important;" class="btn btn-primary ms-2">
                  <i class="fas fa-search"></i><a style="color: #fff !important;" href=""> search</a> 
            </button> -->
        </form>
        </span>
    
      <table class="table">
        <thead>
          <tr>
            <th >ID</th>
            <th >First Name</th>
            <th class="hide-sm">Last Name</th>
            <th class="hide-sm">Email</th>
            <th class="hide-sm">Mobile</th>
            <th class="hide-sm">Grade</th>
            <th class="hide-sm">Subject</th>
            <th class="hide-sm">Address</th>
            <th></th>
          </tr>
        </thead>

        <tbody>
          @foreach($data as $users)
          <tr>
            <td>{{ $users['id'] }}</td>
            <td>{{ $users['first_name'] }}</td>
            <td>{{ $users['last_name'] }}</td>
            <td>{{ $users['email'] }}</td>
            <td>{{ $users['mobile'] }}</td>
            <td>{{ $users['grade'] }}</td>
            <td>{{ $users['subject'] }}</td>
            <td>{{ $users['address'] }}</td>
            <td>
                
            </td>
          </tr>
          @endforeach
          </tbody>
        
      </table>
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
</body>
</html>