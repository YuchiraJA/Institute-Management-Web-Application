<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="/css/dulsara.css" />
    <link rel="stylesheet" href="/css/dulsara1.css" />
    <title>Commerce Class list</title>
  </head>
  
   
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

<br><br><br><br>
 
<center>
    <h1><b>Commerce Classes<b></h1>
  <br>
<i>
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
    <img src="/images/classTeacher1.png" alt="Avatar" style="width:190px;height:250px;"><br>
     <h4><b>Ranjith suriyapperuma</b></h4>
     <h5><b>Buisness Studies</b></h5>
    </div>
    <div class="flip-card-back">
      
    <br><br><br>
    <a href="/user/BS" name="btn-1" class="btn btn-primary">View</a>

    </div>
  </div>
</div>


<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
    <img src="/images/classTeacher1.png" alt="Avatar" style="width:190px;height:250px;"><br>
     <h4><b>Hemal Ranasinghe</b></h4>
     <h5><b>Accounting</b></h5>

    </div>
    <div class="flip-card-back">
    <br><br><br><br>
    <a href="/user/AC" name="btn-1" class="btn btn-primary">View</a>

    </div>
  </div>
</div>


  
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
    <img src="/images/classTeacher1.png" alt="Avatar" style="width:190px;height:250px;"><br>
     <h4><b>Ajith Muthukumara</b></h4>
     <h5><b>Economics</b></h5>
    </div>
    <div class="flip-card-back">
    <br><br><br><br>
    <a href="/user/Econ" name="btn-1" class="btn btn-primary">View</a>
    </div>
  </div>
</div>

  
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
    <img src="/images/classTeacher1.png" alt="Avatar" style="width:190px;height:250px;"><br>
     <h4><b>Upul Rupasinghe</b></h4>
     <h5><b>Buisness paper Class</b></h5>
    </div>
    <div class="flip-card-back">
    <br><br><br><br>
    <a href="/user/BSppr" name="btn-1" class="btn btn-primary">View</a>
    </div>
  </div>
</div>

  
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
    <img src="/images/classTeacher2.png" alt="Avatar" style="width:190px;height:250px;"><br>
     <h4><b>Nadun Athapaththu</b></h4>
     <h5><b>Accounting Paper Class</b></h5>
    </div>
    <div class="flip-card-back">
    <br><br><br><br>
    <a href="/user/chemistry-paper" name="btn-1" class="btn btn-primary">View</a>
    </div>
  </div>
</div>

  
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
    <img src="/images/classTeacher1.png" alt="Avatar" style="width:190px;height:250px;"><br>
     <h4><b>Selwam puviraj</b></h4>
     <h5><b>Economics Paper Class</b></h5>
    </div>
    <div class="flip-card-back">
    <br><br><br><br>
    <a href="/user/ECppr " name="btn-1" class="btn btn-primary">View</a>
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