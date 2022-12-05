@extends('librarian.manage_papers')

@section('content')
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


    <title></title>
   <!-- joel's code end-->



    <style>
        .container2 {
  
  background-color: #f2f2f2;
  width:97% !important;
  margin:auto;
  background:#f2f2f2;
  font-size:14px;
  font-family:Verdana;
  color:black;
  padding: 20px;
}

.container1 {

background-color: #f2f2f2;
width:96% !important;
margin:auto;
background:#f2f2f2;
font-size:14px;
font-family:Verdana;
color:black;
padding: 16px;
}


/* Full-width input fields */
input[type=text], input[type=password], select, textarea {
  width: 90%;
padding: 12px;
border: 1px solid #ccc;
border-radius: 4px;
box-sizing: border-box;
margin-top: 6px;
margin-bottom: 16px;
resize: vertical;
}

input[type=text]:focus, input[type=password]:focus, select, textarea {

}

hr {
border: 1px solid #f1f1f1;
margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
background-color: #04AA6D;
color: white;
padding: 14px 20px;
margin: 8px 0;
border: none;
cursor: pointer;
width: 100%;
opacity: 0.9;
}

button:hover {
opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
padding: 14px 20px;
background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
float: left;
width: 45%;
}



/* Clear floats */
.clearfix::after {
content: "";
clear: both;
display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
.cancelbtn, .signupbtn {
   width: 100%;
}
}


#customers {
font-family: Arial, Helvetica, sans-serif;
border-collapse: collapse;

width:95% !important;
  margin:auto;
  background:white;
  font-size:14px;
  font-family:Verdana;
  color:black;
  padding: 16px;
}

#customers td, #customers th {
border: 1px solid #ddd;
padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
padding-top: 12px;
padding-bottom: 12px;
text-align: left;
background-color: #04AA6D;
color: white;
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


  text-align: center;


 
  /*new */
  font-family: "Sofia", sans-serif;
  font-size: 30px;
  text-shadow: 3px 3px 3px #030101;

  
}




/* search bar css */

.topnav123 {
  overflow: hidden;
  background-color: #e9e9e9;
}




.topnav123 .search-container1 {
  float: left;
}

.topnav123 input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  width:40%;
}

.topnav123 .search-container button {
  float: ;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
  width:10%;
}

.topnav123 .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav123 .search-container {
    float: none;
  }
  .topnav123 input[type=text], .topnav123 .search-container button {
    float:;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav123 input[type=text] {
    border: 1px solid #ccc;  
  }
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
        <li><a href="/user/libraryHome">Library</a></li>
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
    <h1>Model and Past Papers</h1>
  </div>
</div>


<div class="topnav123">
  <br>
<h2 align="center"></h2>
<div class="search-container">
    <form align="center" type="get" action="{{url('/user/sPaperSearch')}}">
      <input type="text" placeholder="Search.." name="Searchtext1">
      <button type="submit"><i class="fa fa-search"></i></button>
      <br>
    </form>
  </div>
</div>

<br>
<br>


<table id="customers">
  <tr>
    <th width="7%">Paper ID</th>
    <th width="25%">Paper Name</th>
    <th width="9%">Year</th>
    <th width="9%">Grade</th>
    <th width="9%">Medium</th>
    <th width="5%">Paper Link</th>
  </tr>

  @foreach($papers as $paper)
  <tr>
    <td>{{$paper->id}}</td>
    <td>{{$paper->Paper_name}}</td>
    <td>{{$paper->Year}}</td>
    <td>{{$paper->Grade}}</td>
    <td>{{$paper->Medium}}</td>
    <td><a href={{$paper->Paper_link}} class="btn btn-success">View/Download</a></td>
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


#endsection 