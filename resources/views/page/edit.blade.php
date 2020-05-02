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
  <h2 style="text-align: center;">
    Insert Data
  </h2><div class="text"style="text-align: right;margin: 10px;"><a href="{{url('/contact')}}"class="btn btn-primary">Go Back</a></div>
  <form class="form-horizontal" method="post"action="{{url('data-edited/'.$edt->id)}}">
    @csrf
       <div class="form-group">
      <label class="control-label col-sm-2" >Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter Name" value="{{$edt->name}}"name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter Email" value="{{$edt->email}}"name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Phone</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="phone" placeholder="Enter Phone Number" value="{{$edt->phone}}"name="phone">
      </div>
    </div>
       <div class="form-group">
      <label class="control-label col-sm-2" >Description:</label>
      <div class="col-sm-10">
        <textarea name="description"type="text" class="form-control" placeholder="Enter description"id="description" cols="30" rows="10"> {{$edt->description}}</textarea>
        
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
       <input type="submit"value="Update"class="form-control btn btn-success">
      </div>
    </div>
  </form>
</div>

</body>
</html>
