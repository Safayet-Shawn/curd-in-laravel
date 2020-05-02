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
	<div style="text-align: right;"><a href="{{URL::to('/contact')}}"class="btn btn-primary">Go Back</a>  </div>
         <h1 style="text-align: center;">{{$vvv->name}}</h1>
  <table class="table table-striped">
    <thead>
      <tr>
      
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Description</th>
       
      </tr>
    </thead>
    <tbody>
    	
      <tr>
        <td>{{ $vvv->name }}</td>
        <td>{{ $vvv->email }}</td>
        <td>{{ $vvv->phone }}</td>
        <td>{{ $vvv->description }}</td>

      
    </tbody>
  </table>
</div>

</body>
</html>
