<!--
  * @file
  * This file contains controller for all user specific functions
-->

<?php
/**
 * Implements logged in user operations namely add, delete, edit, user homepage.
 */
class UserControl {
  /**
   * For displaying adding a new blog page
   * @return [mixed]
   */
  function Add() {
		include('view/Add.php');
	}
  /**
   * New post data to model
   * @return [mixed]
   */
  function Add_feed() {
		include('model/User.php');
		$object = new UserModel;
		$object -> Add();
	}
  /**
   * User specific homepage
   * @return [mixed]
   */
  function Home() {
		$user = $_SESSION['user_id'];
		include('model/User.php');
		$object = new UserModel;
		$object -> Home($user);
	}
  /**
   * To delete a particular blog
   * @param $blog_id blog that is to be deleted
   * @return [mixed]
   */
  function Delete ($blog_id) {
		include('model/User.php');
		$object = new UserModel;
		$object -> Delete ($blog_id);
	}
  /**
   * Edit a perticular blog and fetch previous data to show in form
   * @param $blog_id blog that is to be edited
   * @return [mixed]
   */
  function Edit ($blog_id) {
		include('model/User.php');
		$object = new UserModel;
		$result = $object -> Edit_show ($blog_id);
		$row = $result -> fetch_assoc();
    // Check if user is editing own blog otherwise restrict edit
		if ($row['username'] == $_SESSION['user_id']) {
      // Previous data to form through calling editview class
			include('view/Edit.php');
			$object = new EditView;
			$object -> Edit($result);
		}
		else {
			include('view/noaccess.php');
		}
	}
  /**
   * To update the data in database as per new changes in a blog
   * @param $blog_id blog that is edited
   * @return [mixed]
   */
  function Edit_feed ($blog_id) {
		include('model/User.php');
		$object = new UserModel;
		$object -> Edit ($blog_id);
  }
}
?>
