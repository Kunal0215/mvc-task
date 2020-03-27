<!--
  * @file
  * This file contains database files for Single blog display
-->

<?php
/**
 * To display single detailed blog
 */
class BlogModel {
	/**
	 * To fetch blog data out of database
	 * @param $blog_id blog id that is to be displayed
	 * @return [mixed]
	 */
	function Blog($blog_id) {
		// Sql querries
		$con = mysqli_connect("localhost", "root", "root", "project");
		$sql = "SELECT * FROM blogs WHERE id = '$blog_id'";
		$result = $con->query($sql);
		$row = $result->fetch_assoc();
		// Check if blog exist or not
		if(!empty($row['title']))
		{
			// Pass sql result to view for output display
			include ('view/Blog.php');
			$object = new BlogView;
			$object->Show($row);
		}
		else {
			include('view/404.php');
		}
		}
	}
?>
