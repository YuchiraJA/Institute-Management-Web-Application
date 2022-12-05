<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Manage MCQ Exams</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="/css/rajith3.css">
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
        <li><a href="#">Timetables</a></li>
        <li><a href="#">Classes</a></li>
        <li><a href="#">Notices</a></li>
        <li><a href="/teacher/add-exam">Exams</a></li>
        <li><a href="#">Library</a></li>
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

	      <li><a href="#">Logout</a></li>      
      </ul>
    </nav>

        <!-- Header Ends -->   
    <section class="container">
    <h2> Manage MCQ Exams </h2>

    @if(session('message'))
      <div class="alert alert-success">{{session('message')}} </div>
    @endif

    <br>

    <div class="col-md-4"  style="margin-left:650px">
      <form action="/search" method="get">
        <div class="input-group">
          <input type="search" name="search" class="form-control" placeholder="Search exams">
          <span class="input-group-prepend">
            <button type="submit" class="btn btn-primary"> Search </button>
          </span>
        </div>
      </form>
    </div>

    <br>

                            <center> <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Exam Title</th>
                                        <th>Subject</th>
                                        <th>Grade</th>
                                        <th>Duration</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($manageexam as $manageexam)
                                    <tr>
                                        <td>{{$manageexam->e_title}}</td>
                                        <td>{{$manageexam->subject}}</td>
                                        <td>{{$manageexam->grade}}</td>
                                        <td>{{$manageexam->duration}}</td>
                                        <td>
                                            <table width="100%">
                                                <tr>
                                                    <td>
                                                        <a href="/teacher/addQuestion/{{$manageexam->id}}" class="btn btn-primary"> Add </a>
                                                    </td>  
                                                    
                                                    <td> 
                                                        <a href="/teacher/editExam/{{$manageexam->id}}" class="btn btn-success"> Update </a>
                                                    </td> 

                                                    <td> 
                                                        <a href="/teacher/deleteExam/{{$manageexam->id}}" class="btn btn-danger"> Delete </a>
                                                    </td> 

                                                    <td> 
                                                        <a href="/teacher/viewQuestion/{{$manageexam->id}}" class="btn btn-dark"> View</a>
                                                    </td>
                                                </tr>    
                                            </table>
                                        </td>        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </center> </table>


    </section>

                <!-- Sitemap starts -->

                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
          <img src="/Images/Micro Eye Logo.png" alt="" width="340px" height="150px">
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <div class="fw-bold h3 ms-3">
          Exams         
        </div>
          <div class="my-3">
            <ul class="lead">
                <li class="mb-2"><a href="/teacher/add-exam" class="text-decoration-none">Add Exam</a></li>
                <li class="mb-2"><a href="/teacher/manage-exam" class="text-decoration-none">Manage MCQ Exam</a></li>
                <li class="mb-2"><a href="/teacher/manage-essay-exam" class="text-decoration-none">Manage Essay Exam</a></li>
                <li class="mb-2"><a href="/teacher/approve-result" class="text-decoration-none">Approval of MCQ Marks</a></li>
                <li class="mb-2"><a href="/teacher/manage-essayq-marks" class="text-decoration-none">Marking Essay Answers</a></li>
            </ul>
          </div>
        </div>
      </div>

        <!-- Sitemap Ends -->

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
            <li><a href="#">124/B</a></li>
            <li><a href="#">Aluthgama</a></li>
            <li><a href="#">Bogamuwa</a></li>
            <li><a href="#">Yakkala</a></li>
          </ul>
        </div>
        <div class="divider"></div>
      </div>
    </footer>
    <!-- Footer end -->

  </body>

  <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

</html>
