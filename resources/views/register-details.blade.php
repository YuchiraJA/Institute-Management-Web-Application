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
    <link rel="stylesheet" href="/css/styles.css" />
    <!-- <link rel="stylesheet" href="/css/joel.css" /> -->
    <title>MicroEye Educational Institute</title>
    <style>
          /* Header */
          html {
              height: 100%;
          }

          body {
              min-height: 100%;
          }
            
          .navigaation-bar {
              display: flex !important;
              align-items: center !important;
              justify-content: space-between !important;
              padding: 0.9rem 2rem !important;
              position: fixed !important;
              z-index: 1 !important;
              width: 100% !important;
              top: 0 !important;
              border-bottom: 1px solid #17a2b8 !important;
              opacity: 0.9 !important;
              font-size: 1.2rem !important;
          }
          .navigaation-bar ul {
              display: flex !important;
          }
          .navigaation-bar ul i {
              display: flex !important;
              padding: 0 10px !important;
              align-items: center !important;
          }
          .navigaation-bar ul i:hover {
              color: #17a2b8 !important;
              cursor: pointer !important;
          }
          .navigaation-bar li {
              padding: 0 1.2rem !important;
          }
          .navigaation-bar a {
              color: #fff !important;
          }
          .navigaation-bar a:hover {
              color: #17a2b8 !important;
          }

          .background-dark {
              background-color: #343a40 !important;
              color: #fff !important;
          }

          /* Footer */
          .micro-eye-logo {
              width: 300px !important;
              height: 160px !important;
          }

          .footer {
              background: #dddddd88 !important;
              color: #333 !important;
              margin-top: auto !important;
          }

          .footer a {
              color: #333 !important;
          }

          .footer a:hover {
              color: #17a2b8 !important;
          }

          .footer-container {
              max-width: 1100px !important;
              margin: auto !important;
              padding: 40px !important;
          }

          .footer-lists {
              display: flex !important;
              justify-content: space-between !important;
          }

          .footer-lists .list-head {
              text-transform: uppercase !important;
              font-weight: bold !important;
              margin-bottom: 5px !important;
          }

          .divider {
              width: 100% !important;
              height: 3px !important;
              border: 1px solid #333 !important;
              margin: 30px 0 !important;
              margin-bottom: 0 !important;
          }

          .social-icons img {
              width: 25px !important;
              height: 25px !important;
              margin-right: 25px !important;
          }

          /* Footer End */

          .grid-container {
          display: grid !important;
          grid-template-columns: repeat(2, 1fr) !important;
          grid-column-gap: 0px !important;
          margin-bottom: 2rem !important;
      }

      .flex-container {
        div img {
          width: 200px !important;
          height: 200px !important;
        }
      }


    </style>
  </head>
  <body>

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
        <li><a href="#">Library</a></li>
        <li><a href="#">Q & A</a></li>
        <li><a href="#">Finance</a></li>
        @if(Auth::guest())
        @else
    
        <li class="dropdown">
          <a href="{{url('user/home')}}" class="text-sm text-gray-700 underline">Hi {{Auth::user()->first_name}}</a>        
        </li>
     
        @endif
      </ul>
    </nav>
    <!-- Header Ends -->

    <section class="container">
        <h1 class="large text-primary">Register Now</h1>
        <h2 style="margin-bottom: 20px !important;">Select Your Programme</h2>

        <div class="flex-container">
        <div>
          <img style="height: 500px !important;" src="images\undraw_teaching_f1cm.svg" alt="">
        </div>
      </div>

        <div class="wrapper col-md-12">
        <div>
        <table class="table table-striped">
        <thead>
        <tr>
          <th scope="col">Grade 6</th>
          <th scope="col">Grade 7</th>
          <th scope="col">Grade 8</th>
          <th scope="col">Grade 9</th>
          <th scope="col">Grade 10</th>
          <th scope="col">Grade 11</th>
          <th scope="col">Grade 12</th>
          <th scope="col">Grade 13</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>English</td>
            <td>English</td>
            <td>English</td>
            <td>English</td>
            <td>English</td>
            <td>English</td>
            <td>Physics</td>
            <td>Physics</td>
          </tr>

          <tr>
            <td>Mathematics</td>
            <td>Mathematics</td>
            <td>Mathematics</td>
            <td>Mathematics</td>
            <td>Mathematics</td>
            <td>Mathematics</td>
            <td>Chemistry</td>
            <td>Chemistry</td>
          </tr>

          <tr>
            <td>History</td>
            <td>History</td>
            <td>History</td>
            <td>History</td>
            <td>History</td>
            <td>History</td>
            <td>Combined Maths</td>
            <td>Combined Maths</td>
          </tr>

          <tr>
            <td>ICT</td>
            <td>ICT</td>
            <td>ICT</td>
            <td>ICT</td>
            <td>ICT</td>
            <td>ICT</td>
          </tr>

          <tr>
            <td>Literature</td>
            <td>Literature</td>
            <td>Literature</td>
            <td>Literature</td>
            <td>Literature</td>
            <td>Literature</td>
          </tr>

        </tbody>
            </table>
          </div>
        </div>

        <h2 style="margin-top: 20px !important;">To Register Call or Mail Us Now</h2>

        <h2 class="large text-primary">
        <i class="fas fa-phone-alt">
          <a href="callto:0713467829">0713467829 </a>
        </i>

        <i style="margin-left: 9rem!important;" class="far fa-envelope">
          <a href="mailto:microeye.live@gmail.com">microeye.live@gmail.com</a> 
        </i>
        </h2>

        <div class="grid-container">
            <div class="grid-item">
              <p class="lead">Mathematics - Koliya Pulasthi </p>
            </div>
            <div class="grid-item">
              <p class="lead">English - Damayanthi Renuka</p>
            </div>
            <div class="grid-item">
              <p class="lead">Science - Kanthi Dasanayake</p>
            </div>
            <div class="grid-item">
              <p class="lead">Literatue - Sandaruwan Kasthuriarachchi </p>               
            </div>
            <div class="grid-item">
              <p class="lead">ICT - Sagara Ariyapperuma</p>
            </div>
            <div class="grid-item">
              <p class="lead">Combined Maths - S.A Anurasinghe</p>
            </div>
            <div class="grid-item">
              <p class="lead">Physics - Terence Krishantha</p>
            </div>
            <div class="grid-item">
              <p class="lead">Chemistry - Sanjaya Disanayake</p> 
            </div>
      </div>

      <i class="small" style="margin-left: 9rem!important;margin-top: 10rem!important; class="far fa-envelope">
          If you are a teacher? Want to be a part of a MicroEye member? Mail Us Now <a href="mailto:careers@microeye.live@gmail.com"> careers@microeye.live@gmail.com</a> 
        </i>


      

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
  </html>