<!DOCTYPE html>
<html lang="en">
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


    <title>Manage Library Item</title>
   <!-- joel's code end-->

<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column2 {
  float: left;
  width: 25%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column2 {
    width: 100%;
    display: block;
  }
}

.card2 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container2 {
  padding: 0 16px;
}

.container2::after, .row2::after {
  content: "";
  clear: both;
  display: table;
}

.title2 {
  color: grey;
}

.button2 {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button2:hover {
  background-color: #555;  
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
</head>
<body>
 


<!-- joel's code start-->

<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
  integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
/>



  <!-- Header Starts -->
  <nav class="navigaation-bar background-dark">
      <h1>
        <a href="index.html">
          <i class="fas fa-graduation-cap"> </i> <b>MicroEye Educational Institute</b>
        </a>
      </h1>

      <ul>
        <li><a href="#"><b>Home</b></a></li>
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
    <h1>Manage Library Items</h1>
    </div>
</div>
<br>
<br>


<div class="row2">
  <div class="column2">
    <div class="card2">
      <img src="/images/libraryebooks.jpg" alt="Jane" style="width:100%; height:160px;">
      <div class="container2">
        <h2>E-Books</h2>
        <p class="title2">{{ $libraryitem1 }}</p>
        <p></p>

        <p><button class="button2">Contact</button></p>
        <br>
      </div>
    </div>
  </div>

  <div class="column2">
    <div class="card2">
      <img src="/images/paper1.jpg" alt="Mike" style="width:100%; height:160px;">
      <div class="container2">
        <h2>Past Papers</h2>
        <p class="title2">{{ $libraryitem2 }}</p>
        <p></p>
   
        <p><button class="button2">Contact</button></p>
        <br>
      </div>
    </div>
  </div>
  
  <div class="column2">
    <div class="card2">
      <img src="/images/paper2.jpg" alt="John" style="width:100%; height:160px;">
      <div class="container2">
        <h2>Model Papers</h2>
        <p class="title2">Designer</p>
        <p></p>

        <p><button class="button2">Contact</button></p>
        <br>
      </div>
    </div>
  </div>
  <div class="column2">
    <div class="card2">
      <img src="/images/paper4.jpg" alt="Jane" style="width:100%; height:160px;">
      <div class="container2">
        <h2>Journals</h2>
        <p class="title2">CEO & Founder</p>
        <p></p>
        <p><button class="button2">Contact</button></p>
        <br>
      </div>
    </div>
  </div>
</div>
  
  
  <div class="row2">
 

  <div class="column2">
    <div class="card2">
      <img src="/images/12.jpg" alt="Mike" style="width:100%; height:160px;">
      <div class="container2">
        <h2>Educational PDF</h2>
        <p class="title2">Art Director</p>
        <p></p>
        <p><button class="button2">Contact</button></p>
        <br>
      </div>
    </div>
  </div>
  
  <div class="column2">
    <div class="card2">
      <img src="/images/12.jpg" alt="John" style="width:100%; height:160px;">
      <div class="container2">
        <h2>Other</h2>
        <p class="title2">Designer</p>
        <p></p>
        <p></p>
        <p><button class="button2">Contact</button></p>
        <br>
      </div>
    </div>
  </div>
  
  
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
