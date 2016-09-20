<!DOCTYPE html>
<html lang="en">
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta http-equiv="Content-Style-Type" content="text/css">
      <meta http-equiv="Content-Script-Type" content="text/javascript">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>bootstrap page</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="shoes.css" rel="stylesheet">
    </head>
<body>
	

<?php
	//get ID of item with $_REQUEST
	//display item

?>
<form action="shoes_insert.php" id="buyShoes">

 <label for="name">Full Name: <br>
    <input type="text" name="name" id="name" title="Full Name" class="form-control" />
  </label><br>
  <label for="email">Email:<br>
    <input type="email" name="email" id="email" title="Email" class="form-control" />
  </label><br>
  <button type="submit" class="btn btn-primary">Pay Now</button>

</form>
	<div id="messageArea">msg:</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="shoes_buy.js"></script>
  </body>
</html>