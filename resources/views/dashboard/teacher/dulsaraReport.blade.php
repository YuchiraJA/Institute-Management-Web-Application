<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
      #report {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }

      #report td, #report th {
        border: 1px solid #ddd;
        padding: 8px;
      }

      #report tr:nth-child(even){background-color: #f2f2f2;}

      #report tr:hover {background-color: #ddd;}

      #report th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
      }
    </style>
    
</head>
<body>
    
<center>
<h2>Students Details</h2><br>
    </center>
<table id="report">
<tr>
<th>student ID</th>
            <th>First Name</th>
            <th>Last Name</th>
         
            <th>Phone No</th>
            <th>subject</th>
            <th>grade</th>
            <th>Email</th>
</tr>

@foreach($userR as $userR)
<tr>
<td>{{$userR->id}}</td>
    <td>{{$userR->first_name}}</td>
    <td>{{$userR->last_name}}</td>
  
    <td>{{$userR->mobile}}</td>
    <td>{{$userR->subject}}</td>
    <td>{{$userR->grade}}</td>
    <td>{{$userR->	email}}</td>
</tr>
@endforeach

</table>
</body>
</html>