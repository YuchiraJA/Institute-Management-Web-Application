<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MicroEye Educational Institute</title>
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
    <link rel="stylesheet" href="/css/header-footer.css" />
    <link rel="stylesheet" href="/css/dulaksha.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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

<table id="report">
  <thead class="table-info">
    <tr>
      <th scope="col">Grade</th>
      <th scope="col">Subject</th>
      <th scope="col">Topic</th>
      <th scope="col">Start Date</th>
      <th scope="col">Start Time</th>
      <th scope="col">End Time</th>
      <th scope="col">Link</th>
      <th scope="col">Description</th>
      

    </tr>
  </thead>

  <tbody>

    @foreach ($schedules as $item)

          <tr>
            <td>{{$item->grade}}</td>
            <td>{{$item->subject}}</td>
            <td>{{$item->topic}}</td>
            <td>{{$item->start_date}}</td>
            <td>{{$item->start_time}}</td>
            <td>{{$item->end_time}}</td>
            <td>{{$item->link}}</td>                  
            <td>{{$item->description}}</td>

        </tr>
    @endforeach
    
    </tbody>
  </table>

    
</body>
</html>