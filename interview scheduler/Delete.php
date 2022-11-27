<style>
  body{
		background-image: linear-gradient(#8192b7, #89d9e2);
	}
	h1,h4{
		color:#166707;
		justify:content;
		text-align:center;
	}
	.button_button1{
		margin-left:530px;
		padding:15px;
		background-image: linear-gradient(#d16262, #decdcd);
	}
	.button_button1:hover{
		background-image: linear-gradient(#cd3131,#a37777 )
	}
</style>

<?php
	session_start();
	// $id = $_SESSION['id'];
    $id = $_POST['id'] ;
	// echo($id);
    $mysqli = new mysqli('localhost','root','','scaler');
    $sql1 = "DELETE FROM `interviewer` WHERE `id`='$id'" ;
    if (mysqli_query($mysqli, $sql1)) {
		echo "<br><h1> request succesfully Deleted where id = '$id'</h1>" ;
	} else {
	echo "Error: " . $sql1 . "<br>" . mysqli_error($mysqli);
	}
    $sql2 = "UPDATE `interview` SET `status`='not_scheduled' WHERE id='$id'" ;
    if (mysqli_query($mysqli, $sql2)) {
		echo "<br><h1> status succesfully updated as not_secheduled where id = '$id'</h1>" ;
	} else {
	echo "Error: " . $sql1 . "<br>" . mysqli_error($mysqli);
	}
?>

<html>
    <form action="project.php">
        <br><br><button
            class="button_button1"
          >
            Click here to go back
          </button>
    </form>
</html>