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
background-color: #255aa2;
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

/* Heading Near Button  */
#btn123 {
width:4%;
margin-left:25px;
margin-right:0px;
margin-top:10px;
margin-bottom:10px;
font-size:14px;
padding: 10px;
background-color: #B7AA04;
}

#btn1234 {
width:4% ;
margin-left:5px;
margin-right:0px;
margin-top:10px;
margin-bottom:10px;
font-size:14px;
padding: 10px;
background-color: #255aa2;

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
}

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
      </ul>
    </nav>

    <!-- Header Ends -->

<!-- image heading html -->
<div class="container0">
  <img src="/images/paper.jpg" alt="Notebook" style="width:100%;">
    <div class="content0">
    <h1> 
    <a href="/manage_libraryitems" id="btn123" class="btn btn-success">  <i class="fa fa-arrow-left  fa-2x" aria-hidden="true"></i></a>
      <a href="/manage_libraryitems" id="btn1234" class="btn btn-success"><i class="fa fa-bars  fa-2x" aria-hidden="true"></i></a>
     Manage Library Items</h1>
   
    </div>
</div>

<a href="/manage_libraryitems" id="btn123" class="btn btn-success">  <i class="fa fa-arrow-left  fa-2x" aria-hidden="true"></i></a>
<a href="/manage_libraryitems" id="btn1234" class="btn btn-success"><i class="fa fa-bars  fa-2x" aria-hidden="true"></i></a>


<div class="container2">
     
    <form action="/updatelibraryitems" method="post" style="border:1px solid #ccc">
    {{csrf_field()}}
          <div class="container1">
               <h2>Update Library Item</h2>
              <p>Please fill in this form to create an account.</p>
          
                      
@foreach($errors->all() as $error)
          <div class="alert alert-danger" role="alert">
          {{$error}}
          </div>
        @endforeach
               <hr>
               <input type="hidden" name="id" value="{{$libraryitemdata->id}}"/>
                <label for="name"><b>Library Item Name</b></label><br>
                <input type="text" placeholder="Enter Library Item Name" name="itemname" value="{{$libraryitemdata->Item_name}}" required>
                 <br>
                <label for="year"><b>Author</b></label><br>
               <input type="text" placeholder="Enter Author" name="author"  value="{{$libraryitemdata->Author}}">
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
               <input type="text" placeholder="Enter Library Item Details" name="itemdetails" value="{{$libraryitemdata->Item_details}}" style="height:130px" required>
                 <br>
                <label for="subject"><b>Library Item Link</b></label><br>
                 <input type="text" placeholder="Enter Link" name="itemlink" value="{{$libraryitemdata->Item_link}}" style="height:100px" required>
         <br>
     <br>
    <div class="clearfix">
    <button type="submit" class="signupbtn" ">Add</button>
      <button type="button" class="cancelbtn">Cancel</button>
     
        <br>
          </div>
         </div>
          </form>


</div>


<br>
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
