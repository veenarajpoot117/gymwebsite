<?php

$page_title = "Rizwan";

require_once ('includes/header.php');
require_once ('includes/database.php');

//select statement
$query_str = "SELECT * FROM movies";

//execut the query
$result = $conn->query($query_str);

//Handle selection errors
if (!$result) {
	$errno = $conn->errno;
	$errmsg = $conn->error;
	echo "Selection failed with: ($errno) $errmsg<br/>\n";
	$conn->close();
	exit;
}else { //display results in a table
	?>
	<div class="container wrapper" style="margin-bottom:50px;">

		<ul class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">About</li>
		</ul>
		<div style="text-align:center">
			<h1>About</h1>
			<hr style="width:100px;border:1px solid">
			<div style="display:flex;justify-content:space-around;align-items:center">
				<div style="flex:0.3">
					<p style="text-align:justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae obcaecati voluptate facilis, officiis suscipit quaerat dolore nostrum officia alias sint animi magni ratione corrupti ea praesentium nobis repellendus distinctio perspiciatis?</p>
					
				</div>
				<div style="flex:0.3">
					<p style="text-align:justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae obcaecati voluptate facilis, officiis suscipit quaerat dolore nostrum officia alias sint animi magni ratione corrupti ea praesentium nobis repellendus distinctio perspiciatis?</p>
					
				</div>
			</div>
		</div>
	</div>
	<?php
	// clean up result sets when we're done with them!
	$result->close();
}

// close the connection.
$conn->close();

include ('includes/footer.php');
?>