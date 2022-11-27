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
		margin-left:80vh;
		padding:15px;
		background-image: linear-gradient(#d16262, #decdcd);
	}
	.button_button1:hover{
		background-image: linear-gradient(#cd3131,#a37777 )
	}
</style>

<?php
  // $CN_n = $_POST['CN_n'];
  $id_n = $_POST['id_n'];
	
	$emails_n = array();
	$date_n = $_POST['date_n']   ;
	$start_time_n = $_POST['start_time_n'];
  $end_time_n = $_POST['end_time_n'];
    
	// Database connection
	$conn = new mysqli('localhost','root','','scaler');
  $count=0;
    
    $mysqli = new mysqli('localhost','root','','scaler');
    $query = "select * from interviewer where `id` = '$id_n'";
    $result = $mysqli->query($query);

    if ($result->num_rows > 0) 
        { 
            foreach($result as $row) {
                array_push($emails_n , $row['email']) ;
            }
        }

    for ($x = 0; $x<count($emails_n); $x++) {
        // echo($emails[$x]);
        $dm = $emails_n[$x] ;
        
        $mysqli = new mysqli('localhost','root','','scaler');
        $query = "select * from interviewer where `email` = '$dm' and `id`!='$id_n'";
        $result = $mysqli->query($query);
        if ($result->num_rows > 0) 
        { 
            foreach($result as $row) {
                $Date = $row['date'];
                $s_t = $row['start_time'];
                $e_t = $row['end_time'];
            }
            if ($Date == $date_n){
                
                if($start_time_n>= $s_t && $end_time_n<=$e_t){

                    echo("Access Denied. $dm has another interview scheduled at the same time slot.");
                    $count = 1 ;
                    ?>
    
                    <script>
                        alert( "Access Denied. <?php echo $dm?> has another interview scheduled at the same time slot.")
                    </script>
                <?php
                
                    break ;

                }
                else if($start_time_n<= $s_t && $end_time_n>=$e_t){
                    echo("Access Denied. $dm has another interview scheduled at the same time slot.")
                    ;$count = 1 ;
                    ?>
                    <script>
                        alert( "Access Denied. <?php echo $dm?> has another interview scheduled at the same time slot.")
                    </script>
                <?php
                    break ;
                }
                else if($start_time_n>$s_t && $start_time_n<$e_t){
                    echo("Access Denied. $dm has another interview scheduled at the same time slot.")
                    ;$count = 1 ;
                    ?>
                    <script>
                        alert( "Access Denied. <?php echo $dm?> has another interview scheduled at the same time slot.")
                    </script>
                <?php
                
                    break ;
                }
                else if($end_time_n> $s_t && $end_time_n<$e_t){
                    echo("Access Denied. $dm has another interview scheduled at the same time slot.")
                    ;$count = 1 ;
                    ?>
                    <script>
                        alert( "Access Denied. <?php echo $dm?> has another interview scheduled at the same time slot.")
                    </script>
                <?php
                
                    break ;
                }

            }
            
        }
         
    }

    if($count==1){
      
  }
  else{
      $sql1 = "DELETE FROM interviewer where `id` = '$id_n'" ;
      if (mysqli_query($conn, $sql1)) {
        // echo "<br><h2 style='color:green'><br> Your records has been dele successfully in the database</h2><br>" ;
      } else {
      echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
      }
      for ($x = 0; $x<count($emails_n); $x++) {
          $sql = "INSERT INTO interviewer (id, email , date ,start_time,end_time)
           VALUES ('$id_n', '$emails_n[$x]', '$date_n','$start_time_n', '$end_time_n')";
           if (mysqli_query($conn, $sql)) {
            //    echo "<br><h2 style='color:green'><br> Your records has been updated successfully in the database</h2><br>" ;
           } else {
           echo "Error: " . $sql . "<br>" . mysqli_error($conn);
           }
        
      }
      echo "<br><h2 style='color:green'><br> Your records has been updated successfully in the database</h2><br>" ;
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