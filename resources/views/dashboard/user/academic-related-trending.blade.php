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
    <link
      href="https://fonts.googleapis.com/css2?family=Lato&display=swap"
      rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel = "stylesheet" href="../css/academic-questions-page-trending.css">
    <link rel="stylesheet" href="../css/tookey.css" />
    <title>Academic Related Questions</title>

    <style>
    .table>:not(caption)>*>*{
      max-width: 200px;
    }

    .tabs {
      display: flex;
      justify-content: space-between;
    }

    .flex-items-2 {
      display: flex;
    }

    ..mt-100 {
      margin-top: 0;
    }
  
    </style>

</head>
<body>
<!-- Header Starts -->
<nav class="navbar bg-dark">
      <h1>
        <a href="index.html">
          <i class="fas fa-graduation-cap"> </i> 
        </a>
        <h1 class ="micro">MicroEye Educational Institute</h1>
      
    </h1>

      <ul>
        <li><a href="#">Timetables</a></li>
        <li><a href="#">Classes</a></li>
        <li><a href="#">Notices</a></li>
        <li><a href="#">Exams</a></li>
        <li><a href="#">Library</a></li>
        <li><a href="../q&a">Q & A</a></li>
        <li><a href="#">Finance</a></li>
        <li><a href="#">Hi {{Auth::user()->first_name}}</a></li>
      </ul>
    </nav>

<!-- Header Ends -->

<section class="container">
      </div>
      <div class="container-fluid mt-100">
      <div class="d-flex flex-wrap justify-content-between">
      <!-- <div> <a href="{{route('user.add-quize')}}"><button  type="button" class="btn btn-shadow btn-wide btn-primary"> <span class="btn-icon-wrapper pr-2 opacity-7"> <i class="fa fa-plus fa-w-20"></i> </span> New thread </button> </a> -->
    </div>
    
    <div class="tabs">
      <div class="flex-items">
        <a href="{{route('user.add-quize')}}"><button style="margin-right: 20px;" class="btn btn-primary" type="submit">New Question</button></a>
        <button style="margin-right: 20px;" class="btn btn-primary" type="submit">Most Recent</button>
       <a href="/user/my-ques/{{Auth::user()->id}}"> <button style="margin-right: 20px;" class="btn btn-primary" type="submit">My Qestions</button></a>
        <!-- <button style="margin-right: 20px;" class="btn btn-primary" type="submit">My Answers</button> -->
      </div>
        
        <form method="get" action="{{route ('user.q-search')}}">
        <div class="flex-items-2">
          <!-- <button style="" name="query" class="btn btn-primary" type="submit">Search</button> -->
              <input style="width: 500px; padding: 1.5rem 0; margin-right: 20px;" type="text" name="query" placeholder=" Search by question " class="form-control">
              <input style="padding: 0 30px;" type="submit" class="btn btn-primary" value="Search">
            </form>
        </div>

    </div>


    <div>

    </div>
     </div>
    </div>

      <h2 class="fw-bold my-1">Most Recent</h2>
      <table class="table">
        <thead>
          <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>   
          </tr>
        </thead>
        
        <tbody> 
        @foreach($questions as $question)
          <tr>
            <td class="hide-sm fw-bold"> {{$question->Title}} </td>
            <td class="hide-sm"> {{$question->Description}} </td>
            <td>
              <button class="btn btn-success">
                <a type="submit" href="{{'single-aq/' .$question->id}}">View Answers</a>
              </button>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>

      <div class="my-2">
        </button>
      </div>
    </section>







        


</div>
</section>


 
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