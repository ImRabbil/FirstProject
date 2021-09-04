<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Insertion</title>
</head>
<body>


	<form method="post" action="{{URL::to('/DataInsert')}}">

		@csrf
  <label for="fname">Name:</label><br>
  <input type="text"  name="name"><br>

  <label for="fname">Email:</label><br>
  <input type="text"  name="email"><br>

  <label for="fname">Phone:</label><br>
  <input type="text"  name="phone"><br>

  <label for="fname">Description:</label><br>
  <input type="text"  name="description"><br>

  
  <input type="submit" name="submit" value="Submit">
</form> 

</body>
</html>