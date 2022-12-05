<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <title>Add Exam</title>
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
    <title>MicroEye Educational Institute</title>
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
        <li><a href="#">Exams</a></li>
        <li><a href="#">Library</a></li>
        <li><a href="#">Q & A</a></li>
        <li><a href="#">Finance</a></li>
        <li>
          <i class="fas fa-bars align-items-center" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"></i>
        </li>
	      <li><a href="#">Logout</a></li>      
      </ul>
    </nav>

        <!-- Header Ends -->  

    
    <div class="container mt-5 m-auto">
    <br> <br>    
    <h2> Add Exam </h2>
        <form class="row g-3" nethod="post"  action="{{ route('Exam.store') }}">
        {{ method_field('POST') }}
            @csrf
            @method('PUT')

            <div class="col-md-6">
                <label class="form-label">Select Subject</label>     
                <select class="form-select" name="examSubject" required>
                    <option selected disabled value="">Choose...</option>
                    @foreach($addexam as $addexam)
                    <option>{{$addexam->subject}} - G {{$addexam->grade}}</option>  
                    @endforeach 
                </select>
               
            </div>

            <div class="col-md-3">
                <label class="form-label">Select Grade</label>
                <select class="form-select" name="examGrade" required>
                    <option selected disabled value="">Choose...</option>
                    <option> 6 </option>
                    <option> 7 </option>
                    <option> 8 </option>
                    <option> 9 </option>
                    <option> 10 </option>
                    <option> 11 </option>
                    <option> 12 </option>
                    <option> 13 </option>
                </select>
            </div>

            <div class="col-md-3">
                <label class="form-label">Select Exam Type</label>
                <select class="form-select" name="examtype" required>
                    <option selected disabled value="">Choose...</option>
                    <option> MCQ </option>
                    <option> Essay </option>
                </select>
            </div>

            <div class="col-md-12">
                <label class="form-label">Exam Title</label>
                <input type="text" class="form-control py-2" name="examTitle" required>
            </div>

            <div class="col-md-6">
                <label class="form-label">Duration</label>
                <select class="form-select py-2" name="examDuration" required>
                    <option>30 Minutes</option>
                    <option>60 Minutes</option>
                    <option>90 Minutes</option>
                    <option>120 Minutes</option>
                    <option>180 Minutes</option>
                    <option>1 Minutes</option>
                </select>
            </div>

            <div class="col-md-3">
                <label class="form-label">Exam Date</label>
                <input type="date" class="form-control py-2" name="examDate" required>
            </div>

            <div class="col-md-3">
                <label class="form-label">Exam Time</label>
                <input type="time" class="form-control py-2" name="examTime" required>
            </div>

            <div class="col-md-6">
                <label class="form-label">No of Questions</label>
                <input type="text" class="form-control py-2" name="examNoOfQuestions" required>
            </div>

            <div class="col-md-6">
                <label class="form-label">Enrollment Key</label>
                <input type="text" class="form-control py-2" name="examEnrollmentKey" required>
            </div>
            
            <br>

            <div class="col-12">
                <button class="btn btn-primary" type="submit">Add Exam</button>
                <button class="btn btn-warning" type="reset">Clear</button>
            </div>  
            <br> 
        </div>        
        </form>

        <br>

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
                <li class="mb-2"><a href="add-exam" class="text-decoration-none">Add Exam</a></li>
                <li class="mb-2"><a href="manage-exam" class="text-decoration-none">Manage Exam</a></li>
                <li class="mb-2"><a href="#" class="text-decoration-none">Calculation</a></li>
                <li class="mb-2"><a href="#" class="text-decoration-none">Student Result</a></li>
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
                <img src="images/Micro Eye Logo.png" alt="" />
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