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
    <title>Exam Instructions</title>
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
        <li><a href="/user/exam-introduction">Exams</a></li>
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

    <h2> Introduction About The e-Exam </h2>
    <br>

      <p>
      Developed by MicroEye Educational Institute, the exam system aims to promote online education. 
      At the same time, our aim is to direct the students of the institute towards the digitized education system.
      We have decided to conduct all the examinations online at our institute which conducts tuition classes targeting Advanced Level and Ordinary Level. 
      The specialty of this system is that it uses the same question paper format that the exam consists of.
      Students can answer both multiple-choice question papers and essay question papers online.
      </p>
      <p>
      You need to follow the steps below to enter the exam.
      <br> <br>
      First, click on the icon as shown below.
      <br>
      <table>
        <img src="/images/examss1.png">
      </table>
      <br>
      Then in the sidebar that appears, click on the options you want.
      <br> <br>
      For example, if you want to appear for an MCQ exam, click on the<font color="blue"> <b> MCQ Exams</b> </font> option.
      <br> <br>
      <table>
        <img src="/images/examss2.png">
      </table>

      </p>


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
                <li class="mb-2"><a href="/user/exam-introduction" class="text-decoration-none">Introduction About The e-Exam</a></li>
                <li class="mb-2"><a href="/user/e-instructions" class="text-decoration-none">MCQ Exams</a></li>
                <li class="mb-2"><a href="/user/essayQ-instruction" class="text-decoration-none">Essay Exams</a></li>
                <li class="mb-2"><a href="/user/progress-report" class="text-decoration-none">My Progress Report</a></li>
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
