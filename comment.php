<?php include('session.php'); ?>
<?php
include("./php/config.php");

if (isset($_POST['post_comment'])) {
	$user = $_SESSION['unique_id'];
	$content_comment = $_POST['content_comment'];
	$post_id = $_POST['post_id'];
	$user_id = $_POST['user_id'];
	$time = time(); {
		mySQLi_query($conn, "INSERT INTO comments (post_id,user_id,name,content_comment,image,created)
			VALUES ('$post_id','$id','$user_id','$content_comment','$profile_picture',$time)");
		echo "<script>window.location='feed.php'</script>";
	}
}

?>