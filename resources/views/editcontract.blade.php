
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title></title>
</head>
<body>
        <form method="post" action="{{url('update-contract/'.$edt->id)}}">

        @csrf
  <label for="fname">Name:</label><br>
  <input type="text"  name="name" value="{{ $edt->name}}"><br>

  <label for="fname">Email:</label><br>
  <input type="text"  name="email" value="{{ $edt->email}}"><br>

  <label for="fname">Phone:</label><br>
  <input type="text"  name="phone" value="{{ $edt->phone}}"><br>

  <label for="fname">Description:</label><br>
  <input type="text"  name="description" value="{{ $edt->description}}"><br>

  
  <input type="submit" name="submit" value="Submit">
</form> 
</body>
</html>

