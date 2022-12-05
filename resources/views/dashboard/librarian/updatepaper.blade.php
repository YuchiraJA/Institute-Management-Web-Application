<!DOCTYPE html>
<html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<!-- joel's code start-->

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
<link rel="stylesheet" href="/css/libraryheader-footer.css" />


<title></title>
<!-- joel's code end-->




<link rel="stylesheet" type="text/css"  href="/css/style.css">
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
          Library Menu       
      </div>
        <div class="my-3">
          <ul class="lead">
              <li class="mb-2 ms-4"><a href="/librarian/libraryHome" class="text-decoration-none">Library Home</a></li>
              <li class="mb-2 ms-4"><a href="/librarian/manage_libraryitems" class="text-decoration-none">Manage Library Items</a></li>
              <li class="mb-2 ms-4"><a href="/librarian/manage_papers" class="text-decoration-none">Manage Papers</a></li>
              <li class="mb-2 ms-4"><a href="/librarian/manage_materials" class="text-decoration-none">Manage More Reading Materials</a></li>
              <li class="mb-2 ms-4"><a href="/librarian/manage_feedbacks" class="text-decoration-none">Manage Feedback</a></li>
          </ul>
        </div>
      </div>
    </div>



<!-- image heading html -->
<div class="container0">
  <img src="/images/paper.jpg" alt="Notebook" style="width:100%;">
    <div class="content0">
    <h1>Manage Model and Past Papers</h1>
    </div>
</div>

<!-- <a href="/manage_papers" id="btn123" class="btn btn-success">Back</a> -->
<br>
<br>

<div class="container2">
     
    <form action="{{route('librarian.updatepapers')}}" method="post" style="border:1px solid #ccc">
   
          <div class="container1">
               <h2>Update Past and Model papers</h2>
              <p>Please fill in this form to create an account.</p>
              {{ method_field('POST') }}
            @csrf
            @if(session('message'))
              <div class="alert alert-success">{{session('message')}} </div>
            @endif
               
                      
@foreach($errors->all() as $error)
          <div class="alert alert-danger" role="alert">
          {{$error}}
          </div>
        @endforeach

<!--
            {{csrf_field()}}
         @foreach($errors->all() as $error)
          <div class="alert alert-danger" role="alert">
          {{$error}}
          </div>
        @endforeach -->
                      
               <hr>
               <input type="hidden" name="id" value="{{$paperdata->id}}"/>
                <label for="name"><b>Paper Name</b></label><br>
                <input type="text" placeholder="Enter Paper Name" name="papername" value="{{$paperdata->Paper_name}}" pattern="[a-zA-Z ]+" title="Numberical values cann't enter"/>
                 <br>
                 <label for="name"><b>Paper Type</b></label><br>
                <select id="papertype" name="papertype">
                     <option value="{{$paperdata->Paper_type}}">{{$paperdata->Paper_type}}</option>
                     <option value="Past Paper">Past Paper</option>
                     <option value="Model Paper">Model Paper</option>
                  </select>
                  <br>
                <label for="year"><b>Year</b></label><br>
               <input type="text" placeholder="Enter Password" name="year" value="{{$paperdata->Year}}" pattern="[0-9]{4}" title="Only 4 digit numerical value can enter"/>
                 <br>
                 <label for="grade"><b>Grade</b></label><br>
                 <select id="grade" name="grade">
                     <option value="{{$paperdata->Grade}}">{{$paperdata->Grade}}</option>
                      <option value="Grade 13">Grade 13</option>
                      <option value="Grade 12">Grade 12</option>
                      <option value="Grade 11">Grade 11</option>
                      <option value="Grade 10">Grade 10</option>
                      <option value="Grade 09">Grade 09</option>
                      <option value="Grade 08">Grade 08</option>
                      <option value="Grade 07">Grade 07</option>
                      <option value="Grade 06">Grade 06</option>
                   </select>
                <br>
                 <label for="grade"><b>Medium</b></label><br>
                <select id="medium" name="medium" value="{{$paperdata->Medium}}">
                      <option value="{{$paperdata->Medium}}">{{$paperdata->Medium}}</option>
                      <option value="Sinhala">Sinhala</option>
                      <option value="English">English</option>
                 </select>
                <br>
                <label for="subject"><b>Link</b></label><br>
                 <input type="text" placeholder="Enter Link" name="link" value="{{$paperdata->Paper_link}}" style="height:70px" pattern="https?://.+" title="Include http://"/>
     <br>
     <br>
    <div class="clearfix">
    <button type="submit" class="signupbtn" onclick="return confirm('Are you sure you want to update this paper details?');">Update</button>
    <button type="button" class="cancelbtn" onclick="return confirm('Are you sure you want to cancel this paper details?');">Cancel</button>
     
        <br>
        <br>
          </div>
         </div>
          </form>


</div>

<br>
<br>


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
