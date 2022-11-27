<?php
  session_start();
  $mysqli = new mysqli('localhost','root','','scaler');
  $sql = "SELECT * FROM interview";
  $result = $mysqli->query($sql);
  $mysqli->close(); 
?>
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <title>Coordinator page</title>
    <link rel = "icon" href = "images/img_logo.ico">
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
      body
      {
        margin : 0; 
        font-family: "Haas Grot Text R Web", "Helvetica Neue", Helvetica, Arial, sans-serif;
        background-color : #D3E4CD;
      }

      .project {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 90%;
        margin-left:4%;
      }

      .project td,
      .project th {
        border: 1px solid #ddd;
        padding: 8px;
      }

      .project tr:nth-child(even) {
        background-color: #f2f2f2;
      }

      .project tr:hover {
        background-color: #ddd;
      }

      .project th {
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
      #NR{
          color : red ;
      }
      #AP{
          color : green ;
      }
      #RE{
          color : blue ;
      }
      .button {
        border: none;
        color: white;
        padding: 6px 12px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 12px;
        margin-top : 5%;
        margin-left : 4%;
        margin-bottom : 5%;
        transition-duration: 0.4s;
        cursor: pointer;
      }

      .button1 {
        background-color: white;
        color: black;
        border: 2px solid green;
      }
      .button1:hover {
        background-color: green;
        color: white;
      }
      .button2 {
        background-color: white;
        color: black;
        border: 2px solid blue;
      }
      .button2:hover {
        background-color: blue;
        color: white;
      }
      
      .head_doc
      {
        height : 80vh;
        width : 99vw;
        background-image : url('images/coord2.jpg');
        background-size : cover;
      }

      .head_heading
      {
        color : #B4FE98;
        text-align : center;
        font-size : 3rem;
        margin-top : 0;
      }
      h3
      {
        margin-top : 5%;
        text-align : center;
      }
    </style>
</head>

<body>
    <section>
        <h1 style = "margin-left:43%;color:DarkGreen;">Schedules</h1>
        <table id="table" class="project">
            <tr>
                <th>Id</th>
                <th>Candidate_name</th>
                <th>contact</th>
                <th>Email</th>
                <th>Status</th>
                <th>Schedule/Update</th>

            </tr>
            <?php   
                while($rows=$result->fetch_assoc())
                {                      
             ?>
            <tr>
                
                <td><?php echo $rows['id'];?></td>
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['contact'];?></td>
                <td><?php echo $rows['email'];?></td>
                <!-- <td><?php echo $rows['status'];?></td> -->
                <?php
                    if($rows['status']=="Approved"){
                ?>
				        <td id ="AP"><?php echo $rows['status'];?></td>


                <?php
                    }
                ?>
                <?php
                    if($rows['status']=="not_scheduled" or $rows['status']=="Rejected"){
                ?>
				        <td id ="NR"><?php echo $rows['status'];?></td>
                        <td>
                        <form method="post" action="application.php" target=”_blank”>
                            <input type="text" name="Name" id="Name" hidden value=<?php echo $rows['name']?>>
                            <input type="text" name="id" id="id" hidden value=<?php echo $rows['id']?>>
                            <button
                            class="button button1"
                            type ="submit"
                            name = "bt1"
                            >
                            Click here to schedule
                            </button>
                        </form>

                        </td>

                <?php
                    }
                ?>
                <?php
                    if($rows['status']=="scheduled"){
                ?>
				        <td id ="RE"><?php echo $rows['status'];?></td>
                        <td>
                        <form method="post" action="a_change.php" target=”_blank”>
                        <input type="text" name="Name" id="Name" hidden value=<?php echo $rows['name']?>>
                            <input type="text" name="id" id="id" hidden value=<?php echo $rows['id']?>>
                            <button
                            class="button button2"
                            type ="submit"
                            name = "bt1"
                            >
                            Click here to update
                            </button>
                        </form>

                        </td>

                <?php
                    }
                ?>
            </tr>
            <?php
                }
             ?>
        </table>
            <form action="Register.php" method ='post'>
                <div style = "margin-left:38%">
                <button class="button button1" type='submit' name='update'>
                    Click here to Register new project
                </button>
                </div>
    </form>

    </section>
</body>
  
</html>




