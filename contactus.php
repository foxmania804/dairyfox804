<?php 
	//if (isset($_POST['lname'])&&isset($_POST['lname'])) {
	//	mail("sudarshanagrawal491@gmail.com", "Contact","hi" );
	//}
 //?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="CSS/activities.css">
</head>
<body>
	<header style="padding-top: 30px;">
		<a href="homepage.html">
		<img src="Logos/mainlogo.jpg" alt="Hanilor Logo" id="leftlogo"></a>
		<div class="top">
			<a href="homepage.html" id="active">Home</a>
			<a href="activities.html">Our Activities</a>
			<a href="ourbands.html">Our Brands</a>
			<a href="recepies.php">Our Recepies</a>
			<a href="news.html">News</a>
			<a href="contactus.php" class="active">Contact Us</a>
		</div>
		<a href="http://www.lactalis.fr/en/">
		<img src="Logos/seclogo.jpg" alt="Lactalis Logo" id="rightlogo"></a>
	</header>
	<section>
		<div style="background-image: url('https://images.squarespace-cdn.com/content/v1/58d70b38579fb30814695e76/1547496873841-8A0KCF6S11RNJXYEMYLG/ke17ZwdGBToddI8pDm48kA8oBnZDZIoqKfYtSWYURtIUqsxRUqqbr1mOJYKfIPR7LoDQ9mXPOjoJoqy81S2I8N_N4V1vUb5AoIIIbLZhVYxCRW4BPu10St3TBAUQYVKc7dIiG406yLTS8CEEaG-FSfpQxRJ6Fu6OVCsPeH03pIbcYlNzkT5ebT8Krjy8Qqj_/contact+us.jpg?format=1500w');background-size: 100%;height: 450px;background-repeat: no-repeat;">
			<h2 style="margin-left: 65%; font-size: 400%;color: #ffffff;padding-top: 240px;">Get In Touch</h2>
		</div>
		<div style="padding-top: 40px;">
			<h4 style="margin-left: 30%;">Please fill out this form to get in touch with us</h4>
			<form method="POST">
				<p>Last Name: <input type="text" name="lname"></p>
				<p>First Name: <input type="text" name="fname"></p>
				<p><input type="submit" value="submit"></p>
			</form>
		</div>
	</section>
	</body>
</html>