<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <a href="{{URL::to('/')}}"class="btn btn-success mt-3"style="margin-top: 10px;">Home</a>  
	<div style="text-align: right;"><a href="{{URL::to('/insert-data')}}"class="btn btn-primary">Add New</a>  </div>
         
  <table class="table table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Description</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	@foreach( $datapaisi as $row )
    	
      <tr>
        <td>{{ $row->id }}</td>
        <td>{{ $row->name }}</td>
        <td>{{ $row->email }}</td>
        <td>{{ $row->phone }}</td>
        <td>{{ $row->description }}</td>
        <td>
        	<a href="{{URL::to('/view-data/'.$row->id)}}"class="btn btn-primary">View</a>
        	<a href="{{URL::to('/update-data/'.$row->id)}}"class="btn btn-info">Edit</a>
        	<a href="{{URL::to('/delete-data/'.$row->id)}}"class="btn btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>

</body>
</html>
