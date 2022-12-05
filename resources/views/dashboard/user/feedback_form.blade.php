<!DOCTYPE html>
<html>
<!--Header-->
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

<title>Feedback Form</title>
<!-- joel's code end-->


  <link rel="stylesheet" type="text/css"  href="/css/registerStyles.css">
    <title>MicroEye Educational Institute</title>
    	<!--joel's header content end-->


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



.alert {
    padding: 0.8rem !important;
    margin: 1px !important;
    opacity: 0.9 !important;
    background-color: #f4f4f4 !important;
    color: #333 !important;
    width:90%;
}

.alert.alert-success {
    background-color: #28a745 !important;
    color: #fff !important;
}
.alert.alert-danger {
    background-color: #dc3545 !important;
    color: #fff !important;
}
.alert-success {
    color: #28a745 !important;
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
        <li><a href="/librarian/manage_libraryitems">Library</a></li>
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
    <h1>Feedback Form</h1>
    </div>
</div>
<br>




 <!--content-->
<div class="content">
<br>
<br>

 <div class="container">
 
  <form method="post" action="/saveFeedback">




  <h1 align="center">Feedback</h1>
    <p align="center">Please fill in this form to send your feedback / suggestions.</p>
    <hr>
   
    <center>
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
  

<br>

   
	<table>
	  <tr>
	      <td width="30%" align="center" >
     
		     <b>Student Name</b>
</div>
		  </td>
		  <td width="30%" align="left">
		     <input type="text" size ="100" placeholder="Enter Full Name" value=" {{Auth::user()->first_name}}" name="Sname" pattern="[a-zA-Z ]+" title="Numberical values cann't enter" readonly/>
		  </td>
	  </tr>

	 
	  <tr>
	      <td style="margin-left: 80px" width="30%" align="center">
		     <div><b>Student E-mail</b>
		  </td>
		  <td width=> 
		     <input type="email" size="100" name="email" placeholder="xyz@gmail.com" value=" {{Auth::user()->email}}" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" readonly/> 
		  </td>
	  </tr>


      
      <tr>
	      <td style="margin-left: 80px" width="30%" align="center">
		     <div><b>Feedback Type</b>
		    </td>
		    <td width=> 
        <select id="grade" name="feedbacktype">
                       <option value="">Select your feedback type</option>
                       <option value="Positive">Positive &#128522;</option>
                       <option value="Negative">Negative &#128577;</option>
                       <option value="Neutral">Neutral 	&#128528;</option>
                       <option value="Other">Suggestions</option>
                     </select>
		  </td>
	  </tr>
                     
	  <tr>
	      <td width="12%" align="center">
		     <b>Feedback Message</b>
		  </td>
		  <td width="30%" align="left">
     
    <textarea id="subject" name="message" placeholder="Write something.." style="height:80px" pattern="[a-zA-Z0-9 ]+" title=""></textarea>
		  </td>
	  </tr>
	  
	</table>  
<br>
    <button type="submit" id="submitBtn" size="400" class="btn btn-primary" onclick="return confirm('Are you sure you want to send this feedback?');"> &nbsp &nbsp Send  &nbsp &nbsp </button>
  
  </div>

</form>
  
<br>

 <!-- Footer Starts -->


    <!-- Footer end -->

 
<br>
<br>

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
