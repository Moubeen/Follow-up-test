<!DOCTYPE html>
<html>
<head>
<title>Conference registration Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>


<?php


if(!empty($_POST))
{
    $to = "ighoyota@tlu.ee";
    $subject = "Conference Registration";
    $message = 'User Name : ' . $_POST["Username"] . '<br> Email : ' . $_POST["email"]  . '<br>Phone Number : ' . $_POST["phonenumber"]  . '<br>Address : ' . $_POST["address"]  . '<br>City : ' . $_POST["city"]  . '<br>State : ' . $_POST["state"]  . '<br>Country : ' . $_POST["country"]  ;

    mail($to,$subject,$message);

    ?>
    <div class="main-w3layouts wrapper">
		<h1 class="thanks">Thankyou For Registration For Conference.</h1>

		<ul class="animated-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
    <?php
}


?>

</body>
</html>