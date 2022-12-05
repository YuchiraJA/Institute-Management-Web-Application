<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <table border="1">
        <tr>
            <td>Title</td>
            <td>Description</td>
        </tr>
        @foreach($questions as $question)
        <tr>
            <td>{{$question['Title']}}</td>
            <td>{{$question['Description']}}</td>
            
        </tr>
        @endforeach

   </table>

</body>
</html>