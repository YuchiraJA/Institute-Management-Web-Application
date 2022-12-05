<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
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
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/monadi.css" rel="stylesheet">
  
    <title>MicroEye Educational Institute</title>

  <style>
  
  .sidebar-logo {​
    width:300px!important;
    height:140px!important;
    margin-left:1.2rem!important;
    margin-top:1.2rem!important;
    margin-bottom:1.2rem!important;
    }​
  .fa-bars:before {​
    margin-top:0.3rem!important;
    }​


  #noti{
    font-family:Arial,Helvetica,sans-serif;
    border-collapse:collapse;
    width:80%;

    }
  #noti td,#noti th{
    border: 1px solid #ddd;
    padding: 8px;

  }  
  #noti tr:nth-child(even){
    background-color: #cccccc;
  }
  #noti th{
    padding-top: 12px;
    padding-bottom: 12px;
    text-align:left;
    background-color: #cccccc;

  }

  </style>

  </head>
  <body>
   
    


    <section class="container">

<center>  <h3>MicroEye Educational Institute</h3>  </center>
<br>

<h3>Generate Report Of Teachers Notices</h3> 
<br>
<table id="noti">
 <thead>
 <tr>
     <th>ID</th>
     <th>Title</th>
     <th>Details</th>
     <th>Active</th>
     <th>Created By</th>
     <th>Created Date</th>
     <th>Updated Date</th>
     
 </tr>
 </thead>
 <tbody>
 @foreach($notices as $no)
 <tr>
   <td>{{$no->id}}</td>
   <td>{{$no->title}}</td>
   <td>{{$no->details}}</td>
   <td>  @if($no->active)
       true
       @else
       false
       @endif</td>
    <td>{{$no->created_by}}</td>
    <td>{{$no->created_at}}</td>
    <td>{{$no->updated_at}}</td>

</tr>
@endforeach
 </tbody>

</table>
<br>
<a href="{{URL::to('/download-tpdf')}}"><input type ="submit" class="btn btn-primary" name="submit" value="GENERATE PDF"></a>


</section>




 






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>