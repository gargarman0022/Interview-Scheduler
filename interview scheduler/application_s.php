<style>
    body{
		background-image: linear-gradient(#8192b7, #89d9e2);
	}
	h1,h2,h4{
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
	$id = $_POST['id'];
	$Name = $_POST['Name'] ;
	$emails = $_POST['email_ids'] ;
	$date = $_POST['date']   ;
	$start_time = $_POST['startTime'];
    $end_time = $_POST['endTime'];






	// Database connection
	$conn = new mysqli('localhost','root','','scaler');
    $count=0;
    
    for ($x = 0; $x<count($emails); $x++) {
        // echo($emails[$x]);
        $dm = $emails[$x] ;
        
        $mysqli = new mysqli('localhost','root','','scaler');
        $query = "select * from interviewer where `email` = '$dm' ";
        $result = $mysqli->query($query);
        if ($result->num_rows > 0) 
        { 
            foreach($result as $row) {
                $Date = $row['date'];
                $s_t = $row['start_time'];
                $e_t = $row['end_time'];
            }
            if ($Date == $date){
                
                if($start_time>= $s_t && $end_time<=$e_t){
                    $count=1;
                    echo("Access Denied. $dm has another interview scheduled at the same time slot.")
                    ?>
                    <script>
                        alert( "Access Denied. <?php echo $dm?> has another interview scheduled at the same time slot.")
                    </script>
                <?php
                
                    break ;

                }
                else if($start_time<= $s_t && $end_time>=$e_t){
                    $count=1;
                    echo("Access Denied. $dm has another interview scheduled at the same time slot.")
                    ?>
                    <script>
                        alert( "Access Denied. <?php echo $dm?> has another interview scheduled at the same time slot.")
                    </script>
                <?php
                    break ;
                }
                else if($start_time>$s_t && $start_time<$e_t){
                    $count=1;
                    echo("Access Denied. $dm has another interview scheduled at the same time slot.")
                    ?>
                    <script>
                        alert( "Access Denied. <?php echo $dm?> has another interview scheduled at the same time slot.")
                    </script>
                <?php
                
                    break ;
                }
                else if($end_time> $s_t && $end_time<$e_t){
                    $count=1;
                    echo("Access Denied. $dm has another interview scheduled at the same time slot.")
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
        for ($x = 0; $x<count($emails); $x++) {
            $sql = "INSERT INTO interviewer (id, email , date ,start_time,end_time)
             VALUES ('$id', '$emails[$x]', '$date','$start_time', '$end_time')";
             if (mysqli_query($conn, $sql)) {
                //  echo "<br><h2 style='color:green'><br> Your records has been stored successfully in the database</h2><br>" ;
             } else {
             echo "Error: " . $sql . "<br>" . mysqli_error($conn);
             }
        }
        echo "<br><h2 style='color:green'><br> Your records has been stored successfully in the database</h2><br>" ;
        $mysqli = new mysqli('localhost','root','','scaler');
        $query = "update interview set `status` = 'scheduled' where `id`='$id' ";
        $result = $mysqli->query($query);
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