<!--
  * @file
  * This file contains controller home page display
-->

<?php
/**
 * Implements homepage
 */
	class HomeControl {
		/**
		 * Homepage display
		 * @return [mixed]
		 */
		function Home() {
			include('model/Home.php');
			$obje = new HomeModel;
			$obje -> Home();
		}
	}
?>
