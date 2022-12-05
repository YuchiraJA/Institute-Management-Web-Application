<!DOCTYPE html>
<html lang="en">
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


    <title>Manage Library Item</title>
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
    <h1>Manage More Reading Materials</h1>
    </div>
</div>



<!--
<div class="container2">

    <form action="/librarian/save_material" method="post" style="border:1px solid #ccc">
    {{csrf_field()}}
          <div class="container1">
               <h2>Add More Reading Materials</h2>
              <p>Please fill deatils about the new more reading materials.</p>
          
                      
@foreach($errors->all() as $error)
          <div class="alert alert-danger" role="alert">
          {{$error}}
          </div>
        @endforeach
               <hr>
                <label for="name"><b>Teacher's Name</b></label><br>
                    <input type="text" placeholder="Enter Your Name" name="teachername" required>
                    <br>
                <label for="author"><b>Reading Material Name</b></label><br>
                    <input type="text" placeholder="Enter Material Item's Name" name="materialname">
                    <br>
                <label for="itemtype"><b>Reading Material Details</b></label><br>        
                   <textarea id="subject" name="materialdetails" placeholder="Enter Material Item Details.." style="height:140px"></textarea>
                   <br>
                <label for="itemlink"><b>Teacher's Drive Link</b></label><br>
                    <textarea id="subject" name="drivelink" placeholder="Enter Your Material Item Uploaded Drive Link.." style="height:110px"></textarea>
                    <br>
                    <br>
                 <div class="clearfix">
                 <button type="submit" class="signupbtn">Add</button>
                 <button type="button" class="cancelbtn">Cancel</button>
                 <br>
           </div>
       </div>
    </form>
</div>

<br>
<br>
<br>

<br>
-->

<div class="topnav123">
  <br>
<h2 align="center">Preview of More Reading Items</h2>
<div class="search-container">
    <form align="center" type="get" action="{{url('/librarian/MaterialSearch')}}">
      <input type="text" placeholder="Search.." name="Searchtext">
      <button type="submit"><i class="fa fa-search"></i></button>
      <br>
      <center>
      @if(session('message'))
      <div class="alert alert-success">{{session('message')}} </div>
      @endif   
      </center>
              <br>
    </form>
  </div>
</div>

<br>





<table id="customers">
  <tr>
    <th width="6%"><cneter>Item ID</center></th>
    <th width="25%"><center>More Reading Item Name</center></th>
    <th width="9%"><center>Added By (Teacher's Name)</center></th>
    <th width="9%"><center>Material Item Details</center></th>
    <th width="25%">More Reading Item Link</th>
    <th width="15%"><center>Action</center></th>
  </tr>

  @foreach($materials as $material)
  <tr>
    <td>{{$material->id}}</td>
    <td>{{$material->Material_name}}</td>
    <td>{{$material->Teacher_name}}</td>
    <td>{{$material->Item_details}}</td>
    <td><a href={{$material->Drive_link}}>{{$material->Drive_link}}></a></td>
    <td>  
      <center>
    <a href="/librarian/deletematerial/{{$material->id}}" id="btn1" class="btn btn-warning" onclick="return confirm('Are you sure you want to delete this more reading material?');">Delete</a>
    <a href="/librarian/updatematerial/{{$material->id}}" id="btn2" class="btn btn-primary" onclick="return confirm('Are you sure you want to update this more reading material?');">Update</a>
     </center>
    </td>

  </tr>
  @endforeach

</table>

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
