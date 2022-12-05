 <!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    {!! HTML::style('/css/financial_style.css') !!}
    <link rel="stylesheet" href="/css/financial_style.css" /> -->

    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous"
  />
    <title>Document</title>

    <style> 
      .sidebar-logo {
        width: 300px !important;
        height: 140px !important;
        margin-left: 1.2rem !important;
        margin-top: 1.2rem !important;
        margin-bottom: 1.2rem !important;
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
        <li><a href="#">Timetables</a></li>
        <li><a href="#">Classes</a></li>
        <li><a href="#">Notices</a></li>
        <li><a href="#">Exams</a></li>
        <li><a href="#">Library</a></li>
        <li><a href="#">Q & A</a></li>
        <li><a href="#">Finance</a></li>
        <li><a href="#">|</a></li>   
        <li>
          <a class="" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            Quick Links
          </a>
        </li>      
      </ul>
    </nav>

    <!-- Header Ends -->

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header">
        <img src="Images/Micro Eye Logo.png" class="sidebar-logo" alt="">
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div class="fw-bold h3 ms-3">
          Quick Links       
      </div>
        <div class="my-3">
          <ul class="lead">
              <li class="mb-2 ms-4"><a href="#" class="text-decoration-none">Exam</a></li>
              <li class="mb-2 ms-4"><a href="#" class="text-decoration-none">Question</a></li>
              <li class="mb-2 ms-4"><a href="#" class="text-decoration-none">Test</a></li>
              <li class="mb-2 ms-4"><a href="#" class="text-decoration-none">Test</a></li>
              <li class="mb-2 ms-4"><a href="#" class="text-decoration-none">Test</a></li>
              <li class="mb-2 ms-4"><a href="#" class="text-decoration-none">Test</a></li>
              <li class="mb-2 ms-4"><a href="#" class="text-decoration-none">Test</a></li>
              <li class="mb-2 ms-4"><a href="#" class="text-decoration-none">Test</a></li>
              <li class="mb-2 ms-4"><a href="#" class="text-decoration-none">Test</a></li>
          </ul>
        </div>
      </div>
    </div>



    <br><br><br><br>

   



    <h2 style="text-align:center">Student Payments</h2>
    <table class="table" table class="table" style="text-align: center; margin:50px 100px 100px 100px; width: 80%;">
  <thead>
    <tr>
      
      <th scope="col">Student ID</th>
      <th scope="col">Class ID</th>
      <th scope="col">Month</th>
      <th scope="col">Amount</th>
     
    </tr>
  </thead>
  <tbody>
  @foreach($data as $Financial_Payment )
    <tr>
   
      <!-- <th scope="row">1</th> -->
      <td>{{$Financial_Payment['student_id']}}</td>
      <td>{{$Financial_Payment['class_id']}}</td>
      <td>{{$Financial_Payment['month']}}</td>
      <td>{{$Financial_Payment['amount']}}</td>
      <!-- <td>{{$Financial_Payment['slip']}}</td> -->
      <td>
     <!-- <button> <a href="/edit/{{$Financial_Payment->id}}">Edit</a></button> -->
    
    </td>
    </tr>
   @endforeach

   
  </tbody>
</table>
    

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

    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
  ></script>
  </body>
</html> -->