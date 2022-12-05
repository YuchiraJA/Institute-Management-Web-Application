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
    <link rel="stylesheet" href="/css/header-footer.css" />
    <link rel="stylesheet" href="/css/dulaksha.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>MicroEye Educational Institute</title>

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
  
    

    
<section class="container">

  


  <center><h1 class="topic1">Create Schedule</h1></center>

  <div >

   @if(session()->exists('message'))

     <div class="alert alert-success" role="alert">
        {{session('message')}}
     </div>
     @endif
    </div>
    
        
      <form method= "post" action="{{route('Schedule.store')}}">
            {{csrf_field()}}

       
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label fs-5">Grade</label>   
        
            <select class="form-select py-2 shadow p-3 mb-3 bg-body rounded" name ="grade" aria-label="Default select example">
            <span class="text-danger">@error('grade'){{$message}}@enderror</span>
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
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label fs-5">Subject</label>   
        
            <select class="form-select py-2 shadow p-3 mb-3 bg-body rounded" name ="subject" aria-label="Default select example">
            <span class="text-danger">@error('subject'){{$message}}@enderror</span>
            <option selected>Select your subject</option>
            <option value="Mathematics">Mathematics</option>
            <option value="Sinhala">Sinhala</option>
            <option value="History">History</option>
            <option value="English">English</option>
            <option value="Science">Science</option>
            <option value="ICT">ICT</option>
            <option value="Tamil">Tamil</option>
            <option value="Physics">Physics</option>
            <option value="Chemistry">Chemistry</option>
            <option value="Biology">Biology</option>
            <option value="C-Mathematics">C-Mathematics</option>
            <option value="Accounting">Accounting</option>
            <option value="Business">Business</option>
            <option value="Economics">Economics</option>
        </select>
        </div>

        

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label fs-5">Topic</label>
            <input type="text" class="form-control py-2 shadow p-3 mb-3 bg-body rounded" name="topic" aria-describedby="emailHelp">
            <span class="text-danger">@error('topic'){{$message}}@enderror</span>    
        </div>

        <div class="mb-3 col-md-4">
            <label for="exampleInputEmail1" class="form-label fs-5">Start Date</label>   
        
            <select class="form-select py-2 shadow p-3 mb-3 bg-body rounded" name ="sDate" aria-label="Default select example">
            <span class="text-danger">@error('start_date'){{$message}}@enderror</span> 
            <option selected>Select Date</option>
            <option value="Monday">Monday</option>
            <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
            <option value="Thursday">Thursday</option>
            <option value="Friday">Friday</option>
            <option value="Saturday">Saturday</option>
            <option value="Sunday">Sunday</option>
        </select>
        </div>

        <div class="mb-3 col-md-4">
            <label for="exampleInputEmail1" class="form-label fs-5">Start Time</label>
            <input type="time" id="stime" name="sTime" class = "form-control py-2 shadow p-3 mb-3 bg-body rounded">
            <span class="text-danger">@error('sTime'){{$message}}@enderror</span> 
        </div>

        <div class="mb-3 col-md-4">
            <label for="exampleInputEmail1" class="form-label fs-5">End Date</label>   
        
            <select class="form-select py-2 shadow p-3 mb-3 bg-body rounded" name ="eDate" aria-label="Default select example">
            <span class="text-danger">@error('end_date'){{$message}}@enderror</span> 
            <option selected>Select Date</option>
            <option value="Monday">Monday</option>
            <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
            <option value="Thursday">Thursday</option>
            <option value="Friday">Friday</option>
            <option value="Saturday">Saturday</option>
            <option value="Sunday">Sunday</option>
        </select>
        </div>

        <div class="mb-3 col-md-4">
            <label for="exampleInputEmail1" class="form-label fs-5">End Time</label>
            <input type="time" id="etime" name="eTime" class = "form-control py-2 shadow p-3 mb-3 bg-body rounded">
            <span class="text-danger">@error('eTime'){{$message}}@enderror</span> 
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label fs-5">Link</label>
            <input type="text" class="form-control py-2 shadow p-3 mb-3 bg-body rounded" name="link" aria-describedby="emailHelp"> 
            <span class="text-danger">@error('link'){{$message}}@enderror</span>   
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label fs-5">Description</label>
            <input type="text" class="form-control py-5 shadow p-3 mb-3 bg-body rounded" name="description" aria-describedby="emailHelp">  
            <span class="text-danger">@error('description'){{$message}}@enderror</span>  
        </div>
        
        <center>
            <button type="submit" class="btn btn-primary fs-5">Create</button>
        </center>  
        
        
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