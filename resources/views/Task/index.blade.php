<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>tasks</h2>

  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif

  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>title</th>
        <th>content</th>
        <th>start-date</th>
        <th>end-date</th>
        <th>image</th>
      </tr>
    </thead>
    <tbody>
        @foreach($data as $key =>  $tasks)
      <tr>
        <td>{{ $tasks->id }}</td>
        <td>{{ $tasks->title }}</td>
        <td>{{ $tasks->content }}</td>
        <td>{{ $tasks->startdate }}</td>
        <td>{{ $tasks->enddate }}</td>
        <td><img src="{{url('Task/'.$tasks->image)}}"  width="80px" height="80px" ></td>
        <td><a href='{{url('Task/delete/'.$tasks->id)}}'> Delete</a></td>
        {{-- <td><a href='{{url('Task/delete/'.$tasks->id)}}'> Delete</a></td> --}}
        <td><a href='{{url('Task/edit/'.$tasks->id)}}'> Edit</a></td>
      </tr>
      @endforeach

    </tbody>
  </table>
</div>

</body>
</html>
