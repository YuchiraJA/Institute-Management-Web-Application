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
    <link rel="stylesheet" href="/css/dulsara.css" />
    <link rel="stylesheet" href="/css/dulsara1.css" />
    <title>Class list</title>
    <style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.flip-card {
  background-color: grey;
  width: 280px;
  height: 400px;
  perspective: 1000px;
  padding: 50px 50px;
  display: inline-block;
  vertical-align: middle;

}

.flip-card-inner {
  position: relative;
  width: 120%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: white;
  color: black;
}

.flip-card-front h5{
  color:#00008B;
}

.flip-card-back {
  background-color: white;
  color: black;
  transform: rotateY(180deg);
}

.btn btn-primary{
  background-color: Black;
}
</style>

<style>
/*side bar*/
.sidebar-logo {

width: 300px !important;

height: 140px !important;

margin-left: 1.2rem !important;

margin-top: 1.2rem !important;

margin-bottom: 1.2rem !important;

}



.fa-bars:before {

margin-top: 0.3rem !important;

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


          <!-- Sitemap starts -->

          <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
          <img src="/Images/Micro Eye Logo.png" alt="" width="340px" height="150px">
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <div class="fw-bold h3 ms-3">
       Classes         
        </div>
          <div class="my-3">
            <ul class="lead">
                <li class="mb-2"><a href="Ladd" class="text-decoration-none">View profile</a></li>
                <li class="mb-2"><a href="edit-lesson" class="text-decoration-none">View Lessons</a></li>
               
            </ul>
          </div>
        </div>
      </div>

        <!-- Sitemap Ends -->


<center>
  <br><br><br><br>
  <h2>6-11 Classes</h2>
  <br><br>
<i>
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
    <img src="/images/classTeacher1.png" alt="Avatar" style="width:190px;height:250px;"><br>
     <h6><b>Darshana Kumarasinghe</b></h6>
     <h5><b>Math</b></h5>
    </div>
    <div class="flip-card-back">
      
    <br><br><br>
    <a href="/user/math" name="btn-1" class="btn btn-primary">View</a>

    </div>
  </div>
</div>


<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
    <img src="/images/classTeacher1.png" alt="Avatar" style="width:190px;height:250px;"><br>
     <h6><b>Ashan Ilangakoon</b></h6>
     <h5><b>Science</b></h5>

    </div>
    <div class="flip-card-back">
    <br><br><br><br>
    <a href="/user/science" name="btn-1" class="btn btn-primary">View</a>

    </div>
  </div>
</div>


  
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
    <img src="/images/classTeacher1.png" alt="Avatar" style="width:190px;height:250px;"><br>
     <h6><b>Shakila Manoji</b></h6>
     <h5><b>ICT</b></h5>
    </div>
    <div class="flip-card-back">
    <br><br><br><br>
    <a href="/user/ICT " name="btn-1" class="btn btn-primary">View</a>
    </div>
  </div>
</div>

  
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
    <img src="/images/classTeacher1.png" alt="Avatar" style="width:190px;height:250px;"><br>
     <h6<b>Upuli Ariyasena</b></h6>
     <h5><b>Sinhala</b></h5>
    </div>
    <div class="flip-card-back">
    <br><br><br><br>
    <a href="/user/Sinhala" name="btn-1" class="btn btn-primary">View</a>
    </div>
  </div>
</div>

  
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
    <img src="/images/classTeacher2.png" alt="Avatar" style="width:190px;height:250px;"><br>
     <h6><b>Ishara Malshani</b></h6>
     <h5><b>English</b></h5>
    </div>
    <div class="flip-card-back">
    <br><br><br><br>
    <a href="/user/English" name="btn-1" class="btn btn-primary">View</a>
    </div>
  </div>
</div>

  
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
    <img src="/images/classTeacher1.png" alt="Avatar" style="width:190px;height:250px;"><br>
     <h6><b>Munship Shiwaran</b></h6>
     <h5><b>Tamil</b></h5>
    </div>
    <div class="flip-card-back">
    <br><br><br><br>
    <a href="/user/Tamil " name="btn-1" class="btn btn-primary">View</a>
    </div>
  </div>
</div>
  
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
    <img src="/images/classTeacher2.png" alt="Avatar" style="width:190px;height:250px;"><br>
     <h6><b>Geethma Edirisinghe</b></h6>
     <h5><b>Music</b></h5>
    </div>
    <div class="flip-card-back">
    <br><br><br><br>
    <a href="/user/Music" name="btn-1" class="btn btn-primary">View</a>
    </div>
  </div>
</div>
  
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
    <img src="/images/classTeacher1.png" alt="Avatar" style="width:190px;height:250px;"><br>
     <h6><b>Ashoka Vithanage</b></h6>
     <h5><b>History</b></h5>
    </div>
    <div class="flip-card-back">
    <br><br><br><br>
    <a href="/user/History" name="btn-1" class="btn btn-primary">View</a>
    </div>
  </div>
</div>
  

<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
    <img src="/images/classTeacher1.png" alt="Avatar" style="width:190px;height:250px;"><br>
     <h6><b>Ishara Malshani</b></h6>
     <h5><b>English Literature</b></h5>
    </div>
    <div class="flip-card-back">
    <br><br><br><br>
    <a href="/user/Elit" name="btn-1" class="btn btn-primary">View</a>
    </div>
  </div>
</div>


<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
    <img src="/images/classTeacher1.png" alt="Avatar" style="width:190px;height:250px;"><br>
     <h6><b>Charitha Wijesundara</b></h6>
     <h5><b>Commerce</b></h6>
    </div>
    <div class="flip-card-back">
    <br><br><br><br>
    <a href="/user/Commerce" name="btn-1" class="btn btn-primary">View</a>
    </div>
  </div>
</div>
</i>
</center>

<br><br>

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







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>