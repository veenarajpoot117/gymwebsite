<?php

$page_title = "Rizwan";

require_once ('includes/header.php');
require_once ('includes/database.php');

$query_str = "SELECT * FROM movies";
$result = $conn->query($query_str);
?>
	<div class="container wrapper" style="margin-bottom:50px">
		<ul class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Coaches</li>
		</ul>
		<div style="display:flex;justify-content:flex-start;align-items:center">
			<div style="margin:20px;width:350px;border:1px solid black;border-radius:20px">
				<img style="width:100%;margin-bottom:40px;border-top-left-radius: 20px;border-top-right-radius: 20px;" src="assets/img/6.jpg">
				<div style="text-align:left;padding:20px">
					<span><b>Name:</b> Lorem</span><br>
					<span><b>Phone:</b> 7894456123</span><br>
					<span><b>Address:</b> Lorem ipsum dolor sit amet consectetur</span><br>
					<span><b>Email:</b> lorem@gmail.com</span>	<br>
				</div>
			</div>
			<div style="margin:20px;width:350px;border:1px solid black;border-radius:20px">
				<img style="width:100%;margin-bottom:40px;border-top-left-radius: 20px;border-top-right-radius: 20px;" src="assets/img/6.jpg">
				<div style="text-align:left;padding:20px">
				<span><b>Name:</b> Lorem</span><br>
					<span><b>Phone:</b> 7894456123</span><br>
					<span><b>Address:</b> Lorem ipsum dolor sit amet consectetur</span><br>
					<span><b>Email:</b> lorem@gmail.com</span>	<br>
				</div>
			</div>
			<div style="margin:20px;width:350px;border:1px solid black;border-radius:20px">
				<img style="width:100%;margin-bottom:40px;border-top-left-radius: 20px;border-top-right-radius: 20px;" src="assets/img/6.jpg">
				<div style="text-align:left;padding:20px">
				<span><b>Name:</b> Lorem</span><br>
					<span><b>Phone:</b> 7894456123</span><br>
					<span><b>Address:</b> Lorem ipsum dolor sit amet consectetur</span><br>
					<span><b>Email:</b> lorem@gmail.com</span>	<br>
					
				</div>
			</div>	
		</div>
		
	</div>
<?php
$conn->close();

include ('includes/footer.php');
?>