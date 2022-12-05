<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
   
 {!! HTML::style('/css/financial_style.css') !!}
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous"
  />

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
    <title>Document</title>
</head>
<body>
 <br>  <br>  <br>   

<center><h2 >Student Payment Details Table</h2></center>

<section class="container">
<center><table  id="report"  width="100%">
  <thead>
    <tr>
      
    <th scope="col">Student ID</th>
   <th scope="col">Class ID</th>
    <th scope="col">Month</th> 
    <th scope="col">Amount</th> 
      <!-- <th scope="col">Action</th> -->
     
     
    </tr>
  </thead>
  <tbody>
  @foreach($data as $Financial_Payment)
    <tr>
   
      <!-- <th scope="row">1</th> -->
      <td>{{$Financial_Payment['student_id']}}</td>
      <td>{{$Financial_Payment['class_id']}}</td>
      <td>{{$Financial_Payment['month']}}</td>
      <td>{{$Financial_Payment['amount']}}</td>
      <!-- <td>{{$Financial_Payment->slip}}</td> -->
      <!-- <td><button> <a href="{{ url('getPayment/' .$Financial_Payment->id)}}">View</a></button></td> -->
      
     
   
  
    </tr>
    
   @endforeach

  
  </tbody>
</table></center>
    </section>
<center><a href="/download-pdf" class="btn btn-primary" style="color:white !important;">Download Report</a></center>
</body>
</html>