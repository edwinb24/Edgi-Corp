<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Thanks you for contacting us</title>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Contact Us</title>
<link href="css/style.css" rel="stylesheet" type="text/css">


<?php
$out_name = $_POST['name'];
$out_email = $_POST['email'];
$out_comments = $_POST['comments'];

$to = 'edwin_b24@hotmail.com';
$subject="Comments from client Mr./Ms.$out_name";
$message="Mr./Ms.$out_name comments: $out_comments";
$headers="$out_email";

mail($to,$subject, $message, $headers);


?>








</head>

<body>
<h1>Thank you for contacting us!</h1>
<a href="index.html#contact">
  <div class="boton"> Back to main</div></a>
  </section>
</div>
</body>
</html>