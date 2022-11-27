<style>
    h1{
      margin-top:30px;
      color:#166707;
      text-align:center;
    }
      .button {
        border: none;
        color: white;
        padding: 20px 18px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 12px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
        margin-left: 43%;
      }
      body{
		    background-image: linear-gradient(#8192b7, #89d9e2);
	    }
</style>

<?php
$id = $_POST['id'];
$name = $_POST['name'] ;
$contact1 = $_POST['contact1'] ;
$email = $_POST['email'] ;
$conn = new mysqli('localhost','root','','scaler');
$mysqli = new mysqli('localhost','root','','scaler');

$sql = "INSERT INTO interview (Id, name ,contact ,email , Status)
VALUES ('$id', '$name', '$contact1','$email', 'not_scheduled')";
if (mysqli_query($conn, $sql)) {
// echo "<br><h2 style='color:green'><br> Your records has been stored successfully in the database</h2><br>" ;
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
<html>
    <form action="project.php">
      <h1>Data Updated succesfully.</h1>
        <br><br><button
            class="button" style = "background-color:green">
            Click here to go back
          </button>
    </form>
</html>