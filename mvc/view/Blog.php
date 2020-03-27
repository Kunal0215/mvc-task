<!--
  * @file
  * This file is used for displaying single blog in detail
-->
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel='stylesheet' type='text/css' href='/view/css/show.css'>
	<link rel='stylesheet' type='text/css' href='/view/css/main.css'>
	<link rel='stylesheet' type='text/css' href='/view/css/font-awesome.min.css'>
</head>
<body>
	<div class="row container mx-auto">
		<div class="leftcolumn">
			<div class='card'>
				<div class='inside'>
<?php
/**
 * To display the blog details
 */
class BlogView {
	/**
	 * Data of blog is displayed by this
	 * @param $row details fetched from database
	 * @return [mixed]
	 */
	function Show($row) {
			echo "<h1>" . $row['title'] ."</h1><div class = 'image fit flush'>";
			echo "<img src = '/" . $row['image'] . "'></div><br><h5>" . $row['content'] .
			"</h5><br><p style = 'background-color:yellow;width: 39%;padding: 2px;'>
			created by : <u>" . $row['username'] . "</u> --- createdat : " . $row['created_at'] . "</p></div>" ;
			 // Own content edit and delete options
			if(isset($_SESSION['user_id']) && $_SESSION['user_id'] == $row['username']) {
				echo "<a href = /index.php/User/Delete/". $row['id'] ."''>DELETE POST</a>";
				echo "<a href = '/index.php/User/Edit/". $row['id'] ."'>EDIT POST</a>";
			}
	}
}
?>
</div><br>
</body>
</html>
