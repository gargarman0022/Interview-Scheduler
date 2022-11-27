<?php
    $id = $_POST['id'] ;
    $cnt = 1 ;
?>


<?php
$mysqli = new mysqli('localhost','root','','scaler');
$sql = "SELECT * FROM interviewer where id = '$id'";
$result = $mysqli->query($sql);
$mysqli->close(); 

?>

<!DOCTYPE html>
<html lang="en">
 
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link
      rel="stylesheet"
      type="text/css"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <meta charset="UTF-8">
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
      #project {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }

      #project td,
      #project th {
        border: 1px solid #ddd;
        padding: 8px;
      }

      #project tr:nth-child(even) {
        background-color: #f2f2f2;
      }

      #project tr:hover {
        background-color: #ddd;
      }

      #project th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04aa6d;
        color: white;
      }
      .NA {
        color: red;
      }

      .button {
        border: none;
        color: white;
        padding: 6px 12px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 12px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
      }

      .button1 {
        background-color: white;
        color: black;
        border: 2px solid #4caf50;
      }

      .button1:hover {
        background-color: #4caf50;
        color: white;
      }
      .button2 {
        background-color: white;
        color: black;
        border: 2px solid red;
      }

      .button2:hover {
        background-color: red;
        color: white;
      }
    </style>
</head>
  
<body>
    <section>
        <!-- TABLE CONSTRUCTION-->
        <table id="project">
            <tr>
                <th>Records</th>
                <th>Candidate_id</th>
                <th>Email</th>
                <th>date</th>
                <th>start_time</th>
                <th>end_time</th>
                

            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
              $arr = array() ;
                while($rows=$result->fetch_assoc() )
                {
             ?>
            <tr>
            
            <form action="Delete.php" method ='post'>
                <td>Old</td>
                <td><?php echo $rows['id']?> </td>
                <td><?php echo $rows['email']; array_push($arr , $rows['email']) ;?></td>
                <td><?php echo $rows['date'] ?></td>
                <td><?php echo $rows['start_time']?></td>
                <td><?php echo $rows['end_time']?></td>
                   
            
          </tr> 
          

            <?php
            
                }
             ?>
             <input type="hidden" name="id" value=<?php echo($id); $id ?>>
            <br><button class="button button2" type='submit' name='update'>

            Click here to delete original request
            </button><br><br><br>
            </form> 
            <tr>
            <form action="Update.php" method ='post'>
                <td>New</td>
                <td>
                    <label for="id_n"></label>
                    <input
                    id="id_n"
                    name="id_n"
                    value=<?php echo $id?>
                    required
                    />

                </td>
                
                <td>    
                <!-- <div class="form-group">  -->
                <label for="email_n"></label>
                    <input
                    id="email_n"
                    name="email_n"
                    value=<?php for ($x = 0; $x<count($arr); $x++) {
                             echo($arr[$x])." ";
                     } ?>
                    required
                    />
              <!-- </div> -->
                </td>
                
                <td>
                    <label for="date_n"></label>
                    <input
                    id="date_n"
                    type="date"
                    name="date_n"
                    required
                    />

                </td>

                <td>
                    <label for="start_time_n"></label>
                    <input
                    id="start_time_n"
                    name="start_time_n"
                    type="time"
                    required
                    />
                </td>

                <td>
                    <label for="end_time_n"></label>
                    <input
                    id="end_time_n"
                    name="end_time_n"
                    type="time"
                    required
                    />
                </td>
                

            </tr>
        </table>
      </section>
      
      
        <br><br><br><button class="button button1" type='submit' name='update'>
            Click here to update
        </button>
      </form>





    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
  </body>
  
</html>
