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


    <title>Update Library Item</title>
   <!-- joel's code end-->


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
    <h1> Manage Library Items</h1>
  </div>
</div>

<br>

<div class="container2">
     
    <form action="{{route('librarian.updatelibraryitems')}}" method="post" style="border:1px solid #ccc">

          <div class="container1">
               <h2>Update Library Item</h2>
               <p>Please fill new deatils about the library item.</p>

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
          
                      
<!-- type 1
    {{csrf_field()}}  

    @foreach($errors->all() as $error)
          <div class="alert alert-danger" role="alert">
          {{$error}}
          </div>
        @endforeach-->


               <!--type 2 
                       <span class="text-danger"> @error('papername'){{$message}}@enderror</span>  -->
               <hr>
               <input type="hidden" name="id" value="{{$libraryitemdata->id}}"/>
                <label for="name"><b>Library Item Name</b></label><br>
                <input type="text" placeholder="Enter Library Item Name" name="itemname" value="{{$libraryitemdata->Item_name}}" pattern="[a-zA-Z ]+" title="Numberical values cann't enter"/>
                 <br>
                <label for="year"><b>Author</b></label><br>
               <input type="text" placeholder="Enter Author" name="author"  value="{{$libraryitemdata->Author}}" pattern="[a-zA-Z ]+" title="Numberical values cann't enter"/>
                 <br>
                 <label for="grade"><b>Item Type</b></label><br>
                 <select id="grade" name="itemtype">
                     <option value="{{$libraryitemdata->Item_type}}">{{$libraryitemdata->Item_type}}</option>
                       <option value="Educational PDF">Educational PDF</option>
                       <option value="Subject Related E-books">Subject Related E-books</option>
                       <option value="Journal">Journal</option>
                       <option value="Other">Other</option>
                  </select>
                  <br>
                <label for="year"><b>Library Item Details</b></label><br>
               <input type="text" placeholder="Enter Library Item Details" name="itemdetails" value="{{$libraryitemdata->Item_details}}" style="height:100px" pattern="[a-zA-Z0-9 ]+" title=""/>
                 <br>
                <label for="subject"><b>Library Item Link</b></label><br>
                 <input type="text" placeholder="Enter Link" name="itemlink" value="{{$libraryitemdata->Item_link}}" style="height:70px" pattern="https?://.+" title="Include http://"/>
         <br>
     <br>
    <div class="clearfix">
    <button type="submit" class="signupbtn" onclick="return confirm('Are you sure you want to update this library item details?');">Update</button>
      <button type="button" class="cancelbtn" onclick="return confirm('Are you sure you want to cancel this library item details?');">Cancel</button>
     
        <br>
          </div>
         </div>
          </form>


</div>


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
