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

input[type=text], input[type=password], select, textarea {
    width: 90%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
margin-top: 6px;
margin-bottom: 16px;
resize: vertical;
}
 

   input[type=text]:focus, input[type=password]:focus,  input[type=mobile]:focus, input[type=email]:focus,  select:focus, textarea:focus {
  background-color: #facfcf;
  outline: 1;
}
</style>

<link rel="stylesheet" type="text/css"  href="/css/style.css">
</head>


<body>

        <!-- Header Starts -->
        <nav class="navigaation-bar background-dark">
      <h1>
        <a href="/">
          <i class="fas fa-graduation-cap"> </i>MicroEye Educational Institute 
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
        <li>
          <i class="fas fa-bars align-items-center" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"></i>
        </li>  
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
              <li class="mb-2 ms-4"><a href="/librarian/libraryHome" class="text-decoration-none">Library Home</a></li>
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
    <h1>Manage Library Items</h1>
    </div>
</div>
<br>
<br>

<div class="container2">

    <form action="{{route('librarian.save_libraryitem')}}" method="post" enctype="multipart/form-data" style="border:1px solid #ccc">
  

          <div class="container1">
               <h2>Add Library Items</h2>
              <p>Please fill deatils about the new library item.</p>
              {{ method_field('POST') }}
            @csrf
            @if(session('message'))
              <div class="alert alert-success">{{session('message')}} </div>
            @endif
               

         @foreach($errors->all() as $error)
          <div class="alert alert-danger" role="alert">
          {{$error}}
          </div>
        @endforeach 

         <!-- type 2
          <span class="text-danger"> @error('papername'){{$message}}@enderror</span>  -->




     
     <!--      {{csrf_field()}}              
           @foreach($errors->all() as $error)
               <div class="alert alert-danger" role="alert">
               {{$error}}
               </div>
          @endforeach   -->
               <hr>
                <label for="name"><b>Library Item Name</b></label><br>
                    <input type="text" placeholder="Enter Library Item Name" name="itemname" pattern="[a-zA-Z ]+" title="Numberical values cann't enter"/>
          
                    <br>
                <label for="author"><b>Author</b></label><br>
                    <input type="text" placeholder="Enter Author" name="author" pattern="[a-zA-Z. ]+" title="Numberical values cann't enter"/>
                    <br>
                <label for="itemtype"><b>Item Type</b></label><br>
                     <select id="grade" name="itemtype">
                       <option value="">Select the Item Type</option>
                       <option value="Educational PDF">Educational PDF</option>
                       <option value="E-books">E-book</option>
                       <option value="Journal">Journal</option>
                       <option value="Other">Other</option>
                     </select>
                     <br>

          
               <label for="itemdetails"><b>Library Item Details</b></label><br>
                   <textarea id="subject" name="itemdetails" placeholder="Enter Library Item Details.." style="height:100px" pattern="[a-zA-Z0-9 ]+" title="Numberical values cann't enter" required></textarea>
                   <br>

                   <div class="custom-file-input" id="customFile" name="filename">
              
                   
                <label for="itemlink"><b>Choose Image</b></label><br>
             
                   <input type="file"  class="custom-file-label" for="customFile" name="file">
                 
                   </div>
                   <br>
                   <label for="itemlink"><b>Library Item Link</b></label><br>
                   <input type="text" name="itemlink" placeholder="Enter Library Item Link.." style="height:70px" pattern="https?://.+" title="Include http://"/>
                    <br>
                    <br>
                 <div class="clearfix">
                 <button type="submit" class="signupbtn" onclick="return confirm('Are you sure you want to add this library item?');">Add</button>
                 <button href="http://127.0.0.1:8000/librarian/manage_libraryitems" type="button" style="" class="cancelbtn" onclick="return confirm('Are you sure you want to cancel this library item?');"><center>Cancel</center></button>
                 <br>
           </div>
       </div>
    </form>
</div>


<br>
<br>
<br>


<br>
<div class="topnav123">
  <br>
<h2 align="center">Preview of Library Items</h2>
  <div class="search-container">
    <form align="center" type="get" action="{{url('/librarian/libraryItemSearch')}}">
      <input type="text" placeholder="Search.." name="Searchtext">
      <button type="submit"><i class="fa fa-search"></i></button>
      <br>
    </form>

    
    <script>
      $(".custom-file-input").on("change",function() {

        var image = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(image);
      });
      </script>

  </div>
</div>
<br>

<table id="customers">
  <tr>
    <th width="4%">Item ID</th>
    <th width="15%">Item Name</th>
    <th width="13%">Item Name</th>
    <th width="10%">Author</th>
    <th width="9%">Item Type</th>
    <th width="25%">Item Details</th>
    <th width="20%">Item Link</th>
    <th width="30%">Action</th>
  </tr>

  @foreach($libraryitems as $libraryitem)
  <tr>
    <td>{{$libraryitem->id}}</td>
    <td><img src="{{ asset('uploads/'.$libraryitem->file) }}" width="10px" height="200px"></td>
    <td>{{$libraryitem->Item_name}}</td>
    <td>{{$libraryitem->Author}}</td>
    <td>{{$libraryitem->Item_type}}</td>

    <td>{{$libraryitem->Item_details}}</td>
    <td><a href={{$libraryitem->Item_link}}>{{$libraryitem->Item_link}}></a></td>
    <td>  
    <a href="/librarian/deletelibraryitem/{{$libraryitem->id}}" id="btn1" class="btn btn-warning" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
    <br>
    <br>
    <a href="/librarian/updatelibraryitem/{{$libraryitem->id}}" id="btn2" class="btn btn-primary" onclick="return confirm('Are you sure you want to update this item?');">Update</a>
    </td>

  </tr>
  @endforeach

</table>

<br>
<br>

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
