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


    <title>Library Home</title>
   <!-- joel's code end-->

<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column2 {
  float: left;
  width: 25%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column2 {
    width: 100%;
    display: block;
  }
}

.card2 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container2 {
  padding: 0 16px;
}

.container2::after, .row2::after {
  content: "";
  clear: both;
  display: table;
}

.title2 {
  color: grey;
  font-size: 120%;
}

.button2 {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #0495b3 ;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button2:hover {
  background-color: #555;  
}



/*heading photo css*/
.container0 {
  position: relative;
  width: 100%;
  
  margin: 0 auto;
}

.container0 img {vertical-align: middle;    height: 450px;}

.container0 .content0 {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  padding: 30px;
}




a {
  text-decoration: none ;
  color: black;
}

a:hover{
  color:  #17a2b8;
}


</style>
</head>
<body>
 


<!-- joel's code start-->

<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
  integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
/>


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
        <li><a><i class="fas fa-bars align-items-center" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"></i>
        </a></li>  
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
          <li class="mb-2 ms-4"><a href="/user/libraryHome" class="text-decoration-none">Library Home</a></li>
              <li class="mb-2 ms-4"><a href="/user/view_libraryitems" class="text-decoration-none">Library Items</a></li>
              <li class="mb-2 ms-4"><a href="/user/view_papers" class="text-decoration-none">Past & Model Papers</a></li>
              <li class="mb-2 ms-4"><a href="/user/view_materials" class="text-decoration-none">More Reading Materials</a></li>
              <li class="mb-2 ms-4"><a href="/user/feedback_form" class="text-decoration-none">Feedback Form</a></li>
          </ul>
        </div>
      </div>
    </div>
    
<!-- image heading html -->
<div class="container0">
  <img src="/images/paper.jpg" alt="Notebook" style="width:100%;">
    <div class="content0">
    <h1>Library Home</h1>
    </div>
</div>
<br>


<div class="row2">
  <div class="column2">
    <div class="card2">
      <img src="/images/libraryebooks.jpg" alt="Jane" style="width:100%; height:160px;">
      <div class="container2">
      <br>
      <a href="/user/view_libraryitems"><h2>E-Books</h2></a>
        <p class="title2">Total Items: {{ $libraryitem3 }}</p>
        <p></p>
        <p style="text-colour:white"><a href="/user/view_libraryitems" class="button2">View</a></p>
        
      </div>
    </div>
  </div>

  <div class="column2">
    <div class="card2">
      <img src="/images/paper1.jpg" alt="Mike" style="width:100%; height:160px;">
      <div class="container2">
      <br>
      <a href="/user/view_libraryitems"><h2>Past Papers</h2></a>
        <p class="title2">Total Items: {{ $libraryitem5 }}</p>
        <p></p>
        <p style="text-colour:white"><a href="/user/view_libraryitems" class="button2">View</a></p>
      </div>
    </div>
  </div>
  
  <div class="column2">
    <div class="card2">
      <img src="/images/paper2.jpg" alt="John" style="width:100%; height:160px;">
      <div class="container2">
      <br>
      <a href="/user/view_libraryitems"><h2>Model Papers</h2></a>
        <p class="title2">Total Items: {{ $libraryitem6 }}</p>
        <p></p>
        <p style="text-colour:white"><a href="/user/view_libraryitems" class="button2">View</a></p>
      </div>
    </div>
  </div>
  <div class="column2">
    <div class="card2">
      <img src="/images/paper4.jpg" alt="Jane" style="width:100%; height:160px;">
      <div class="container2">
      <br>
      <a href="/user/view_libraryitems"><h2>Journals</h2></a>
        <p class="title2">Total Items: {{ $libraryitem1 }}</p>
        <p></p>
        <p><a href="/user/view_libraryitems" class="button2">View</a></p>
      </div>
    </div>
  </div>
</div>
  
  
  <div class="row2">
 

  <div class="column2">
    <div class="card2">
      <img src="/images/library1.jpg" alt="Mike" style="width:100%; height:160px;">
      <div class="container2">
      <br>
      <a href="/user/view_libraryitems"><h2>Educational PDF</h2></a>
        <p class="title2">Total Items: {{ $libraryitem2 }}</p>
        <p></p>
        <p><a href="/user/view_libraryitems" class="button2">View</a></p>
      </div>
    </div>
  </div>

  <div class="column2">
    <div class="card2">
      <img src="/images/123.jpg" alt="John" style="width:100%; height:160px;">
      <div class="container2">
      <br>
      <a href="/user/view_libraryitems"><h2>More Reading Materials</h2></a>
        <p class="title2">Total Items: {{ $libraryitem7 }}</p>
        <p></p>
        <p></p>
        <p><a href="/user/view_libraryitems" class="button2">View</a></p>
      </div>
    </div>
  </div>
  
  <div class="column2">
    <div class="card2">
      <img src="/images/123.jpg" alt="John" style="width:100%; height:160px;">
      <div class="container2">
      <br>
      <a href="/user/view_libraryitems"><h2>Other</h2></a>
        <p class="title2">Total Items: {{ $libraryitem4 }}</p>
        <p></p>
        <p></p>
        <p><a href="/user/view_libraryitems" class="button2">View</a></p>
      </div>
    </div>
  </div>
  
</div>

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
