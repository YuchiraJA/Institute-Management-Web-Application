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

    <title>Library Home</title>
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

.column3 {
  float: left;
  width: 45%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.column4 {
  float: right;
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
  background-color: #0495b3 ;
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




.row2 a {
  text-decoration: none ;
  color: black ;
}

.row2 a:hover{
  color:  #17a2b8;
}



.row3 a {
  text-decoration: none ;
  color: white ;
}

.row3 a:hover{
  color:  white;
}


.container-md {
            margin-top: 4rem !important;
            margin-bottom: 4rem !important;
        }
        .container {
          max-width: 1600px !important;
        }
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
        <a href="/">
          <i class="fas fa-graduation-cap"> </i> MicroEye Educational Institute
        </a>
      </h1>
      <ul>
        <!-- <li><a href="#">Home</a></li> -->
        <li><a href="#">Timetables</a></li>
        <li><a href="#">Classes</a></li>
        <li><a href="#">Notices</a></li>
        <li><a href="#">Exams</a></li>
        <li><a href="/librarian/libraryHome">Library</a></li>
        <li><a href="#">Q & A</a></li>
        <li><a href="#">Finance</a></li>
        <li><a><i class="fas fa-bars align-items-center" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"></i>
        </a></li>  
        @if(Auth::guest())
        @else
        <li class="dropdown">
          <a href="{{url('user/home')}}" class="text-sm text-gray-700 underline">Hi {{Auth::user()->first_name}}</a> 
                 
        </li>
        @endif
        <li><a href="#">|</a></li>
        <li><a href="#">Logout</a></li>
      </ul>
    </nav>
    <!-- Header ends -->

          <!-- Sidebar -->
  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header">
        <img src="/images/Micro Eye Logo.png" class="sidebar-logo" alt="">
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div class="fw-bold h3 ms-3">
          Library Menu       
      </div>
        <div class="my-3">
          <ul class="lead">
              <li class="mb-2 ms-4"><a href="/librarian/libraryHome" class="text-decoration-none">Library Dashboard</a></li>
              <li class="mb-2 ms-4"><a href="/librarian/manage_libraryitems" class="text-decoration-none">Manage Library Items</a></li>
              <li class="mb-2 ms-4"><a href="/librarian/manage_papers" class="text-decoration-none">Manage Papers</a></li>
              <li class="mb-2 ms-4"><a href="/librarian/manage_materials" class="text-decoration-none">Manage More Reading Materials</a></li>
              <li class="mb-2 ms-4"><a href="/librarian/manage_feedbacks" class="text-decoration-none">Manage Feedback</a></li>
          </ul>
        </div>
      </div>
    </div>
    
<!-- image heading html -->
<div class="container0">
  <img src="/images/paper.jpg" alt="Notebook" style="width:100%;">
    <div class="content0">

    <div class="row3">

    <div class="column3">
    <h1>Library Dashboard</h1>
    </div>

    <div class="column4">
    <a href="/librarian/libraryhomereport" class="btn btn-primary">Generate Report</a>
    </div>

    </div>

    
    </div>
</div>
<br>
<div class="row2">

<div class="column3">
<div id="donutchart" style="width: 900px; height: 500px;"></div>
</div>


     <div class="column3">
      <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
      <div id="toolbar_div"></div>
     </div>

    </div>

<div class="row2">
  <div class="column2">
    <div class="card2">
      <img src="/images/libraryebooks.jpg" alt="Jane" style="width:100%; height:160px;">
      <div class="container2">
      <br>
      <a href="/librarian/manage_libraryitems"><h2>E-Books</h2></a>
        <p class="title2"></p>
        <p></p>
        <p><button class="button2">Total Items: {{ $libraryitem3 }}</button></p>
        
      </div>
    </div>
  </div>

  <div class="column2">
    <div class="card2">
      <img src="/images/paper1.jpg" alt="Mike" style="width:100%; height:160px;">
      <div class="container2">
      <br>
      <a href="/librarian/manage_papers"><h2>Past Papers</h2></a>
        <p class="title2"></p>
        <p></p>
        <p><button class="button2">Total Items: {{ $libraryitem5 }}</button></p>
      </div>
    </div>
  </div>
  
  <div class="column2">
    <div class="card2">
      <img src="/images/paper2.jpg" alt="John" style="width:100%; height:160px;">
      <div class="container2">
      <br>
      <a href="/librarian/manage_papers"><h2>Model Papers</h2></a>
        <p class="title2"></p>
        <p></p>
        <p><button class="button2">Total Items: {{ $libraryitem6 }}</button></p>
      </div>
    </div>
  </div>
  <div class="column2">
    <div class="card2">
      <img src="/images/paper4.jpg" alt="Jane" style="width:100%; height:160px;">
      <div class="container2">
      <br>
      <a href="/librarian/manage_libraryitems"><h2>Journals</h2></a>
        <p class="title2"></p>
        <p></p>
        <p><button class="button2">Total Items: {{ $libraryitem1 }}</button></p>
      </div>
    </div>
  </div>
</div>
  
  
  <div class="row2">

  <div class="column2">
    <div class="card2">
      <img src="/images/123.jpg" alt="John" style="width:100%; height:160px;">
      <div class="container2">
      <br>
      <a href="/user/view_libraryitems"><h2>More Reading Materials</h2></a>
      <h5><p class="title2"></p></h5>
        <p></p>
        <p></p>
        <p><a style="color:white;" href="/user/view_libraryitems" class="button2">Total Items: {{ $libraryitem7 }}</a></p>
      </div>
    </div>
  </div>
 

  <div class="column2">
    <div class="card2">
      <img src="/images/library1.jpg" alt="Mike" style="width:100%; height:160px;">
      <div class="container2">
      <br>
      <a href="/librarian/manage_libraryitems"><h2>Educational PDF</h2></a>
        <p class="title2"></p>
        <p></p>
        <p><a style="color:white;" class="button2">Total Items: {{ $libraryitem2 }}</a></p>
      </div>
    </div>
  </div>
  
  <div class="column2">
    <div class="card2">
      <img src="/images/123.jpg" alt="John" style="width:100%; height:160px;">
      <div class="container2">
      <br>
      <a href="/librarian/manage_libraryitems"><h2>Other</h2></a>
        <p class="title2"></p>
        <p></p>
        <p></p>
        <p><a style="color:white;" class="button2">Total Items: {{ $libraryitem4 }}</a></p>
      </div>
    </div>
  </div>
  9
  
</div>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});

      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['LibraryItems', 'Hours per Day'],
          ['E-books',  <?= $libraryitem3 ?>],
          ['Jornals',  <?= $libraryitem1 ?>],
          ['Edutacional PDF',  <?= $libraryitem2 ?>],
          ['Other',  <?= $libraryitem4 ?>],
          ['Past Papers',  <?= $libraryitem5 ?>],
          ['Model Papers',  <?= $libraryitem6 ?>],
          ['More Reading Materials',  <?= $libraryitem7 ?>]
        ]);

        var options = {
          title: 'Library Item Statistics',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>





 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Tas', 'Hours per Day'],
          ['Positive', <?= $feedback1 ?>],
          ['Negative', <?= $feedback2 ?>],
          ['Neutral', <?= $feedback3 ?>],
        ]);

        var options = {
          title: 'Studen Feedback Statistics',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
<!--
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {packages: ['corechart']});

    
    var visualization;

    function draw() {
      drawVisualization();
      drawToolbar();
    }

    function drawVisualization() {
      var container = document.getElementById('visualization_div');
      visualization = new google.visualization.PieChart(container);
      new google.visualization.Query('https://spreadsheets.google.com/tq?key=pCQbetd-CptHnwJEfo8tALA').
          send(queryCallback);
    }

    function queryCallback(response) {
      visualization.draw(response.getDataTable(), {is3D: true});
    }

    function drawToolbar() {
      var components = [
          {type: 'igoogle', datasource: 'https://spreadsheets.google.com/tq?key=pCQbetd-CptHnwJEfo8tALA',
           gadget: 'https://www.google.com/ig/modules/pie-chart.xml',
           userprefs: {'3d': 1}},
          {type: 'html', datasource: 'https://spreadsheets.google.com/tq?key=pCQbetd-CptHnwJEfo8tALA'},
          {type: 'csv', datasource: 'https://spreadsheets.google.com/tq?key=pCQbetd-CptHnwJEfo8tALA'},
          {type: 'htmlcode', datasource: 'https://spreadsheets.google.com/tq?key=pCQbetd-CptHnwJEfo8tALA',
           gadget: 'https://www.google.com/ig/modules/pie-chart.xml',
           userprefs: {'3d': 1},
           style: 'width: 800px; height: 700px; border: 3px solid purple;'}
      ];

      var container = document.getElementById('toolbar_div');
      google.visualization.drawToolbar(container, components);
    };

    google.charts.setOnLoadCallback(draw);
  </script>




<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {packages: ['corechart']});

    
    var visualization;

    function draw() {
      drawVisualization();
      drawToolbar();
    }

    function drawVisualization() {
      var container = document.getElementById('visualization_div');
      visualization = new google.visualization.PieChart(container);
      new google.visualization.Query('https://spreadsheets.google.com/tq?key=pCQbetd-CptHnwJEfo8tALA').
          send(queryCallback);
    }

    function queryCallback(response) {
      visualization.draw(response.getDataTable(), {is3D: true});
    }

    function drawToolbar() {
      var components = [
          {type: 'igoogle', datasource: 'https://spreadsheets.google.com/tq?key=pCQbetd-CptHnwJEfo8tALA',
           gadget: 'https://www.google.com/ig/modules/pie-chart.xml',
           userprefs: {'3d': 1}},
          {type: 'html', datasource: 'https://spreadsheets.google.com/tq?key=pCQbetd-CptHnwJEfo8tALA'},
          {type: 'csv', datasource: 'https://spreadsheets.google.com/tq?key=pCQbetd-CptHnwJEfo8tALA'},
          {type: 'htmlcode', datasource: 'https://spreadsheets.google.com/tq?key=pCQbetd-CptHnwJEfo8tALA',
           gadget: 'https://www.google.com/ig/modules/pie-chart.xml',
           userprefs: {'3d': 1},
           style: 'width: 800px; height: 700px; border: 3px solid purple;'}
      ];

      var container = document.getElementById('toolbar_div');
      google.visualization.drawToolbar(container, components);
    };

    google.charts.setOnLoadCallback(draw);
  </script>

  -->

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
