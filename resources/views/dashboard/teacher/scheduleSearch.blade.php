@extends('edit')

@section('content')

<table class="table table-striped">
  <thead class="table-info">
    <tr>
      <th scope="col">Grade</th>
      <th scope="col">Subject</th>
      <th scope="col">Topic</th>
      <th scope="col">Start Date</th>
      <th scope="col">Start Time</th>
      <th scope="col">End Date</th>
      <th scope="col">End Time</th>
      <th scope="col">Link</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
      <th scope="col">Action</th>

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
            <td>{{$item->end_date}}</td>
            <td>{{$item->end_date}}</td>
            <td>{{$item->link}}</td>                  
            <td>{{$item->description}}</td>

          
          <td><a button type="button" class="btn btn-danger ms-3" href={{"delete/".$item->id}}">Delete</button></a></td>
          <td><a button type="button" class="btn btn-success ms-3" href={{"scheduleUpdate/".$item->id}}>Update</a></td>
        </tr>
    @endforeach
    
    </tbody>
  </table>

@endsection