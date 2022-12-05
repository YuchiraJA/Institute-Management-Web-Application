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
   
    <link rel="stylesheet" href="/css/dulsara.css">
    <link rel="stylesheet" href="/css/dulsara1.css">
    <title>Report</title>
<style>

  #tab2{
    
    font-collapse:collapse;
    width:100%;
  }
  #tab2 td, #tab2 th{
    border:1px solid #ddd;
    padding:8px;

  }
  #tab2 tr:nth-child(even){
    background-color:#0bfdfd;

  }
  #tab2 th{
    padding-top:12px;
    padding-bottom:12px;
    text-align:left;
    background-color:#4CAF50;
    color:#fff;
  }
</style>
   
</head>
<body>
 
<center>

  
<section class="container">

<div class="col-md-4" >

<form  action="/teacher/search-stID" method="post">
{{@csrf_field()}}
<div class="input-group">
  <input type="search" placeholder="Enter student ID" name="search">
  <span class="input-group-prepend">
  <button  type="submit"  class="btn btn-primary">Search</button>
</span>
 
</div>
</form>
</div>
<br>



  <form action="/teacher/get-report">
  <a  class="btn btn-success mt-4" href="{{url('/download-classReportpdf')}}">Download Report</a>
  <br><br>
  {{@csrf_field()}}
  <h2>Students Details</h2><br>
<table id="tab2">
<thead>
        <tr>
            <th>student ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Phone No</th>
            <th>subject</th>
            <th>grade</th>
            <th>Email</th>
        </tr></thead>
       
          <tbody>
    @foreach($userR as $userR)
    <tr>
    <tr style="background:white;">
    <td>{{$userR->id}}</td>
    <td>{{$userR->first_name}}</td>
    <td>{{$userR->last_name}}</td>
    <td>{{$userR->address}}</td>
    <td>{{$userR->mobile}}</td>
    <td>{{$userR->subject}}</td>
    <td>{{$userR->grade}}</td>
    <td>{{$userR->	email}}</td>
    
        </tr>
        @endforeach
</tbody>
</table>

</form>
</section>
</center>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>


</body>
</html>