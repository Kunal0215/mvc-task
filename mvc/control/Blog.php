<!--
  * @file
  * This file contains controller for blog detailed display
-->

<?php
/**
 * Implements single blog display
 */
	class BlogControl {
		/**
		 * This functions takes block id and passes to model
		 * @param $id blog id to be displayed
		 * @return [mixed]
		 */
		function Blog($id) {
			include('model/Blog.php');
			$object = new BlogModel;
			$object -> Blog($id);
		}
	}
?>
