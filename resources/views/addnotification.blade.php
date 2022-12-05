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
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/monadi.css" />
    
    <title>MicroEye Educational Institute</title>
    <style>
    .sidebar-logo {​
      width:300px!important;
      height:140px!important;
      margin-left:1.2rem!important;
      margin-top:1.2rem!important;
      margin-bottom:1.2rem!important;
      }​
    .fa-bars:before {​
      margin-top:0.3rem!important;
      }​

      </style>
  </head>
  <body>
   
      <!-- Header Starts -->
      <nav class="navigaation-bar background-dark">
      <h1>
        <a href="index.html">
          <i class="fas fa-graduation-cap"> </i> MicroEye Educational Institute
        </a>
      </h1>

      <ul>
        <li><a href="#">Home</a></li>
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
              <li class="mb-2 ms-4"><a href="/teachernotice" class="text-decoration-none">Teacher Noticebord</a></li>
              <li class="mb-2 ms-4"><a href="/addnotice" class="text-decoration-none">Add Notices</a></li>
              <li class="mb-2 ms-4"><a href="/addnotification" class="text-decoration-none">Add Notifications</a></li>
              <li class="mb-2 ms-4"><a href="/get-teacher-notices" class="text-decoration-none">Generate Reports</a></li>
    
          </ul>
        </div>
      </div>
    </div>

    <section class="container">

  <h3>Add Notifications Here</h3>

  @foreach($errors->all() as $error)

<div class="alert alert-danger" role="alert">
  {{$error}}
</div>

  @endforeach

    <form action="{{route('Notification.save')}}" method="post">
    {{ csrf_field() }}
  
  <div class="mb-3">
   <label for="Title" class="form-label">Title</label>
   <input type="text" class="form-control" name="Title" placeholder="Add title">
   </div>
  
   <div class="mb-3">
   <label for="Notification" class="form-label">Notification</label>
   <textarea class="form-control" name="Notification" rows="4" placeholder="Add Notification"></textarea>
   </div>

   <div class="mb-3">
   <label for="Type" class="form-label">Type</label>
   <select class="form-select" aria-label="NotificationType" name="Type">
    <option selected >Add type</option>
    <option value="Email" name="Email" >Email</option>
    <option value="SMS" name="SMS" >SMS</option>
   </select>
   </div>

   <div class="col-xs-2">
   <label for="StudentID" class="form-label">Send To</label>
   <input type="text" class="form-control" name="StudentID" placeholder="Add Student id" >
   </div>

   <div class="mb-3">
   <label for="Active" class="form-label">Active</label>

   <select class="form-select" aria-label="NotificationActive" name="Active">
    <option selected >Add Active Status</option>
     <option value="1" id="ntrue">true</option>
     <option value="0" id="nfalse">false</option>
   </select>
   </div>


   <br>
  
    <input type ="submit" class="btn btn-primary" name="submit" value="ADD NOTIFICATION">
    


  














</form>
</section>


 <!-- Footer Starts -->
 <footer class="footer">
      <div class="footer-container">
        <div class="footer-lists">
          <ul>
            <div class="micro-eye-logo">
              <a href="index.html">
                <img src="images/Micro Eye Logo.png" alt="" />
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
