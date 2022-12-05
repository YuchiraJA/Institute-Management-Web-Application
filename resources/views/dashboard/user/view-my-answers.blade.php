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
    <title>View Result</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="/css/rajith3.css">
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
    
    <div class="container mt-2 m-auto">
    <br> <br>    
    
    </div>

        <section class="container">

        <h2> Students' Results </h2>

        <table id="report" width="100%">

          <tr> 

            <th> Question </th>

            <th> Option A </th>

            <th> Option B </th>

            <th> Option C </th>

            <th> Option D </th>

            <th> Correct Answer </th>
            
            <th> Student's Answer </th>

            <th> Mark </th>

          </tr>

          @foreach($student as $student)
          <tr>

            <td> {!!$student->question!!} </td>

            <td> {{$student->option_a}} </td>

            <td> {{$student->option_b}} </td>

            <td> {{$student->option_c}} </td>

            <td> {{$student->option_d}} </td>

            <td> <font color="green"> <b> {{$student->correct_answer}} </b> </font> </td>

            <td> <font color="blue"> <b> {{$student->std_answer}}  </b> </font> </td>

            <td> <font color="red"> <b> {{$student->mark}}  </b> </font> </td>

          </tr>
          @endforeach

        </table>
        <br> 

        <div class="col-12">
                <a href="/user/AnswerSheet-pdf/{{Auth::user()->id}}/{{$student->e_id}}" class="btn btn-danger">
                  DOWNLOAD 
                </a>
        </div>
        
        </section>

</body>

<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

</html>