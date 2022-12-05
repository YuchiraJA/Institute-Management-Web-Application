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

    
    <title>MicroEye Educational Institute</title>
  </head>
  <body>
   
  



    <section class="container">

  <h3>Update Notifications Here</h3>

  @foreach($errors->all() as $error)

<div class="alert alert-danger" role="alert">
  {{$error}}
</div>

  @endforeach

    <form action="/editnotification" method="post">
    
  @csrf
  <div class="mb-3">

  <input type="hidden" name="id" value="{{$data['id']}}">

   <label for="Title" class="form-label">Title</label>
   <input type="text" class="form-control" name="Title" placeholder="Add title" value="{{$data['title']}}">
  
  
   <label for="Notification" class="form-label">Notification</label>
   <input type="textarea" class="form-control" name="Notification" rows="4"  value="{{$data['notification']}}">

   <label for="Type" class="form-label">Type</label>
   <select class="form-select" aria-label="NotificationType" name="Type" >
    <option selected >{{$data['type']}}</option>
    <option value="Email" >Email</option>
    <option value="SMS" >SMS</option>
   </select>

   <label for="StudentID" class="form-label">Send To</label>
   <input type="text" class="form-control" name="StudentID" placeholder="Add Student id" value="{{$data['student_id']}}">

   <label for="Active" class="form-label">Active</label>

   <select class="form-select" aria-label="NotificationActive" name="Active" >
    <option selected >{{$data['active']}}</option>
     <option value="1" id="notrue">true</option>
     <option value="0" id="nofalse">false</option>
   </select>



   <br>
  
    <input type ="submit" class="btn btn-primary" name="submit" value="UPDATE">
    


  </div>














</form>
</section>









  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
