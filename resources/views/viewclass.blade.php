<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view class</title>
</head>
<body>
@foreach($class as $Class)
    
    
    {{$Class->c_type}}<br>
    {{$Class->subject}}<br>
    {{$Class->grade}}<br>
    {{$Class->fee}}<br>
@endforeach
</body>
</html>