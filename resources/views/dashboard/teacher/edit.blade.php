<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MicroEye Educational Institute</title>
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
    <link rel="stylesheet" href="/css/header-footer.css" />
    <link rel="stylesheet" href="/css/dulaksha.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    

    <style>
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

      .container{
        max: width 1200px !important;
      }
</style>

  </head>
  <body>
    <!-- Header Starts -->
    <nav class="navigaation-bar background-dark">
      <h1>
        <a href="/">
          <i class="fas fa-graduation-cap"> </i>MicroEye Educational Institute 
        </a>
      </h1>
      <ul>
        <!-- <li><a href="#">Home</a></li> -->
        <li><a href="teacherSchedule">Timetables</a></li>
        <li><a href="#">Classes</a></li>
        <li><a href="#">Notices</a></li>
        <li><a href="#">Exams</a></li>
        <li><a href="/librarian/libraryHome">Library</a></li>
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
        <li><a href="#">|</a></li>
        <li><a href="#">Logout</a></li>
      </ul>
    </nav>
    
    <!-- Header ends -->

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
              <li class="mb-2 ms-4"><a href="createschedule" class="text-decoration-none">Create a Schedule</a></li>
              <li class="mb-2 ms-4"><a href="teacherSchedule" class="text-decoration-none">Teacher Schedule</a></li>
              <li class="mb-2 ms-4"><a href="edit" class="text-decoration-none">Delete or Update Data</a></li>
              <li class="mb-2 ms-4"><a href="publicTable" class="text-decoration-none">Classes Time-Tables</a></li>
              
              
          </ul>
        </div>
      </div>
    </div>

    <br><br><br>

    <div class="topnav">
      <div class="search-container">
        <form action="{{url('/scheduleSearch')}}" type="get">
          <input type="text" placeholder="Enter Grade 6-13" name="searchGrade">
          <button type="submit">Search</button>
        </form>
      </div>
    </div>

    <center><h1 class="topic" class="my-1 large text-primary fw-bold">Edit Data</h1></center>

    <div >

   @if(session()->exists('message'))

     <div class="alert alert-success" role="alert">
        {{session('message')}}
     </div>
     @endif
     
    </div>

<table class="table table-striped">
  <thead class="table-info">
    <tr>
      <th scope="col">Grade</th>
      <th scope="col">Subject</th>
      <th scope="col">Topic</th>
      <th scope="col">Start Date</th>
      <th scope="col">Start Time</th>
      <th scope="col">End Date</th>
      <th scope="col">End Time</th>
      <th scope="col">Link</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
      <th scope="col">Action</th>

    </tr>
  </thead>

  <tbody>

    @foreach ($schedules as $item)

          <tr>
            <td>{{$item->grade}}</td>
            <td>{{$item->subject}}</td>
            <td>{{$item->topic}}</td>
            <td>{{$item->start_date}}</td>
            <td>{{$item->start_time}}</td>
            <td>{{$item->end_date}}</td>
            <td>{{$item->end_time}}</td>
            <td>{{$item->link}}</td>                  
            <td>{{$item->description}}</td>

          
          <td><a button type="button" class="btn btn-danger ms-3" href="/teacher/delete/{{$item->id}}">Delete</button></a></td>
          <td><a button type="button" class="btn btn-success ms-3" href="/teacher/scheduleUpdate/{{$item->id}}">Update</a></td>
        </tr>
    @endforeach
    
    </tbody>
  </table>

        <center>
            <a href="{{URL::to('/editDownload')}}"><button type="submit" class="btn btn-primary fs-5">Download Report</button>
        </center>
  <br><br>


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