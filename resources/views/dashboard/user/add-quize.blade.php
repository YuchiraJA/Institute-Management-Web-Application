<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>Add Quize</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Lato&display=swap"
      rel="stylesheet"
    />
   <!---- <title> Responsive Contact Us Form | CodingLab </title>--->
    <link rel="stylesheet" href="../css/add-quize.css">
    <link rel="stylesheet" href="../css/styles.css" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

   </head>
<body>

<!-- Header Starts -->
<nav class="navbar bg-dark">
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
        <li><a href="../q&a">Q & A</a></li>
        <li><a href="#">Finance</a></li>
      </ul>
    </nav>

    <!-- Header Ends -->


  <div class="container">
    <div class="content">
      <div class="image-box">
       <!----<img src="contact.png" alt=""> ----->
       <img src = "../images/add-quize.jpg">
      </div>
    <form action="add-quize" method="POST">
      @csrf

      <div class="topic">Enter Your Question</div>
      <div class="input-box">
        <input type="text" name="Title"  required>
        <label>Title</label>
      </div>
        <div class="input-box">
        <input type="text" value="Academic Related Question" name="Category" required>
        <label>Category</label>
      </div>
    
      <div class="input-box">
      <textarea  placeholder="Description" name="Description" ></textarea>
      </div>

      <div class="form-group">
        <input type="hidden" name="user_id" placeholder="" value="{{Auth::user()['id']}}" />
      </div> 

      <div class="input-box">
        <input type="submit" value="Post">
        </div>
    </form>
  </div>
  </div>

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

</body>
</html>
