<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/dulsara.css">
    <title>Add new lesson</title>
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
	<li><a href="#">|</a></li>
	<li><a href="#">Logout</a></li>      
      </ul>
    </nav>

    <!-- Header Ends -->





<form action="{{ url('/store') }}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
    <div class="container">
       
          
            <div class="row">
                <div class="col-md-20">
                    
                    <br>
                    <h4>ClassID</h4>
                    <input type="text" class="form-control py-2" name="ClassID" placeholder=" ">
                    <br>
                    <h4>Enter LessonName</h4>
                    <input type="text" class="form-control py-2" name="ClassLname" placeholder="Enter the lesson name">
                    <br>
                    <h4>Select lesson type</h4>
                    <div class="custom-select" style="width:500px;">
                    <input type="text" class="form-control py-2" name="classLtype" placeholder="Enter the lesson type">
<br><br>
                    <h4>Enter Subject</h4>
                    <input type="text" class="form-control" name="classLSubject" placeholder="Enter the lesson name">
  <br><br>

  h4>Enter Grade</h4>
                    <input type="text" class="form-control" name="grade" placeholder="Enter the grade">
  <br><br>
 <h4> Enter the content</h4>
 
 <input type="file" name="file" placeholder="Choose file" id="file">


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>