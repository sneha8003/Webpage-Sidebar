
<!DOCTYPE html>
<html>
<head>
  <title>Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <!--  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="main.css" />
</head>
<body>
  
  <div class="col-md-10 forms">

    <div>
        <label style="width: 180px;">Firstname</label>
        <input type="text" name="first" />
    </div>

    <div>
        <label style="width: 180px;">Lastname</label>
        <input type="text" name="last" />
    </div>

    <div>
       <label style="width: 180px;">Email Address</label>
        <input type="text" name="email" />
    </div>

    <div>
      <label style="width: 180px;">Sex</label>
      <label> Male </label><input  name="optradio" type="radio"> 
      <label> Female </label><input  name="optradio" type="radio">
    </div>

    <div>
      <input type="submit" name="submit" value="Submit" />
    </div>

  </div>
</body>
</html>