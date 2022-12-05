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


/* Heading Near Button  */
#btn123 {
width:20% ;
margin:20px;
font-size:14px;
padding: 10px;
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
<link rel="stylesheet" type="text/css"  href="/css/style.css">
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
    <h1>Manage Mode and Past Papers</h1>
    </div>
</div>

<a href="/manage_papers" id="btn123" class="btn btn-success">Back</a>


<div class="container2">
     
    <form action="/updatepapers" method="post" style="border:1px solid #ccc">
    {{csrf_field()}}
          <div class="container1">
               <h2>Update Past and Model papers</h2>
              <p>Please fill in this form to create an account.</p>
          
                      
@foreach($errors->all() as $error)
          <div class="alert alert-danger" role="alert">
          {{$error}}
          </div>
        @endforeach
               <hr>
               <input type="hidden" name="id" value="{{$paperdata->id}}"/>
                <label for="name"><b>Paper Name</b></label><br>
                <input type="text" placeholder="Enter Paper Name" name="papername" value="{{$paperdata->Paper_name}}" required>
                 <br>
                <label for="year"><b>Year</b></label><br>
               <input type="text" placeholder="Enter Password" name="year" value="{{$paperdata->Year}}">
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
                 <input type="text" placeholder="Enter Link" name="link" value="{{$paperdata->Paper_link}}" style="height:130px" required>
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

</body>
</html>
