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

  <h3>Update Notices Here</h3>


    <form action="/updatenotice" method="post">
    @csrf

    <input type="hidden" name="id" value="{{$data['id']}}">
  <div class="mb-3">
   <label for="Title" class="form-label">Title</label>
   <input type="text" class="form-control"  value="{{$data['title']}}">
  
  
   <label for="Details" class="form-label">Details</label>
   <input type="textarea" class="form-control" rows="4" value="{{$data['details']}}">

   <label for="User" class="form-label">User</label>
   <select class="form-select" aria-label="NoticeUser" >
    <option selected >{{$data['user']}}</option>
    <option value="Students" >Students</option>
    <option value="Teachers" >Teachers</option>
   </select>

   <label for="Active" class="form-label">Active</label>

   <select class="form-select" aria-label="NoticeActive" >
    <option selected >{{$data['active']}}</option>
    
    <option value="1" id="ntrue" >true</option>
    
    <option value="0" id="nfalse" >false</option>
   </select>



   <br>
  
    <input type="submit" class="btn btn-warning" value="UPDATE"/>
    


  </div>














</form>
</section>









  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
