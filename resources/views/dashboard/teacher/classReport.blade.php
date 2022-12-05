<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
   
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
   
    <link rel="stylesheet" href="/css/dulsara.css">
    <link rel="stylesheet" href="/css/dulsara1.css">
    <title>Report</title>
    <style>
   .table3 {
      border-collapse:collapse;
      width:100%;
      

   }

   .table3 th,td{
    text-align: left;
  padding: 8px;
   }
   .table3 tr:nth-child(even){
  background-color: #f2f2f2;

}

.table3 th {
  background-color:#2E86C1 ;
  color: white;
  padding-top:12px;
  padding-bottom:12px;
  
}
/*.table3 th{
  padding-top:12px;
  padding-bottom:12px;
  text-align:left;
  background-color:grey;
  color:#fff;
}*/
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
        
          <a class="" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
           Logout
          </a>
        </li>  
        <li><a> </a></li>    
      </ul>
    </nav>

    <!-- Header Ends -->


          <!-- Sitemap starts -->

          <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
          <img src="/Images/Micro Eye Logo.png" alt="" width="340px" height="150px">
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <div class="fw-bold h3 ms-3">
       Classes         
        </div>
          <div class="my-3">
            <ul class="lead">
                <li class="mb-2"><a href="Ladd" class="text-decoration-none">Add Lessons</a></li>
                <li class="mb-2"><a href="edit-lesson" class="text-decoration-none">Manage Lessons</a></li>
                <li class="mb-2"><a href="search" class="text-decoration-none">Add a class</a></li>
                <li class="mb-2"><a href="edit-class" class="text-decoration-none">Manage Classes</a></li>
                <li class="mb-2"><a href="get-report" class="text-decoration-none">Report of students</a></li>
            </ul>
          </div>
        </div>
      </div>

        <!-- Sitemap Ends --> 
<center>

  
<section class="container">

<div class="col-md-4">

<form  action="/teacher/search-stID" method="post">
{{@csrf_field()}}
<div class="input-group">
  <input type="search" placeholder="Enter student ID" name="search">
  <span class="input-group-prepend">
  <button  type="submit" class="btn btn-primary">Search</button>
</span>
 
</div>
</form>
</div>
<br

<a  class="btn btn-danger btn-lg" href="{{url('/download-classReportpdf')}}">Download Report</a>
<br><br><br>
  <form action="/teacher/get-report">
  {{@csrf_field()}}
  <h2>Students Details</h2><br>
<table   class="table3">
<thead>
        <tr>
            <th>student ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Phone No</th>
            <th>subject</th>
            <th>Email</th>
        </tr></thead>
        <tr>
          <tbody>
    @foreach($userR as $userR)
    
    <tr style="background:white;">
    <td>{{$userR->id}}</td>
    <td>{{$userR->first_name}}</td>
    <td>{{$userR->last_name}}</td>
    <td>{{$userR->address}}</td>
    <td>{{$userR->mobile}}</td>
    <td>{{$userR->subject}}</td>
    <td>{{$userR->	email}}</td>
    
        </tr>
        @endforeach
</tbody>
</table>


</form>
</section>
</center>

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



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>
</html>