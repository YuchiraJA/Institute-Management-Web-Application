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
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous"
  />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/../css/joel.css" />
    <link rel="stylesheet" href="/../css/styles.css" />
    <title>Admin Update</title>

    <style>
     #checkBox {
        margin-top: 7px !important;
        margin-right: 7px !important;
      }

        .container-md {
            margin-top: 4rem !important;
            margin-bottom: 4rem !important;
        }

        .container {
          max-width: 1200px !important;
        }

        .sidebar-logo {
        width: 300px !important;
        height: 140px !important;
        margin-left: 1.2rem !important;
        margin-top: 1.2rem !important;
        margin-bottom: 1.2rem !important;
      }

      .fa-bars:before {
        margin-top: 0.3rem !important;
      }

      .table th  {
          margin-right: !important;
      }

    </style>
</head>
<body>

    <section class="container">
    <h1 class="large text-primary">Generate Your Attendance Report </h1>
    <table class="table">
        <thead>
          <tr>
            <th style="padding-right:3.5rem !important;">First Name</th>
            <th style="padding-right:3.5rem !important;">Last Name</th>
            <th style="padding-right:5rem !important;">Email</th>
            <th style="padding-right:3.5rem !important; padding-left:2rem !important;">Mobile</th>
            <th style="padding-right:3.5rem !important;">Grade</th>
            <th style="padding-right:3.5rem !important;">Subject</th>
            <th style="padding-right:3.5rem !important;">Attendace</th>
          </tr>
        </thead>

        <tbody> 
        @foreach($attendance as $report)
          <tr>
            <td class="hide-sm"> {{$report->first_name}} </td>
            <td class="hide-sm"> {{$report->last_name}} </td>
            <td class="hide-sm"> {{$report->email}} </td>
            <td class="hide-sm"> {{$report->mobile}} </td>
            <td class="hide-sm"> {{$report->grade}} </td>
            <td class="hide-sm"> {{$report->subject}} </td>
            <td class="hide-sm"> {{$report->attendance}} </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <a class="btn btn-success mt-4" href="{{route ('teacher.download-pdf')}}"><i class="fas fa-sign-out-alt"></i> Generate Report</a>
    </section>
    
    <script>
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
  </script>
</body>
</html> 