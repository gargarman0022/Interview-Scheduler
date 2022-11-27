<?php
  $id = $_POST['id'];
  $Name = $_POST['Name'] ;
?>

<!DOCTYPE html>
<html>
    <script>
        let toggle = button => {
           let element = document.getElementById("myselect");
           let hidden = element.getAttribute("hidden");
          
           if (hidden) {
              element.removeAttribute("hidden");
              button.innerText = "Hide Select";
           } else {
              element.setAttribute("hidden", "hidden");
              button.innerText = "Show Select";
           }
        }
      </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link
      rel="stylesheet"
      type="text/css"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <link rel = "icon" href = "images/img_logo.ico">
  <head>
    <title>Registration Page</title>
    <link
      rel="stylesheet"
      type="text/css"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <link rel = "icon" href = "images/img_logo.ico">
  </head>
  <style>
      body
      {
        padding-top : 2%;
        background-image : url('index.jpeg');
        background-size : cover;
      }
    </style>

  <body>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Registration Form</h1>
          </div>
          <div class="panel-body">
            <form action="application_s.php" method="post">
            <div class="form-group">
                <label for="Id">Cid</label>
                <input
                  type="text"
                  class="form-control"
                  id="id"
                  name="id"
                  value = <?php echo $id?>
                  required
                />
              </div>

              <div class="form-group">
                <label for="Name">Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="Name"
                  name="Name"
                  value = <?php echo $Name?>
                  required
                />
              </div>

              <div class="form-group"> 
                <label for="email_ids"></label>
                        <select class="form-control selectpicker" multiple name="email_ids[]">
                          <option value="sanjeetchodharydb@gmail.com" >sanjeetchodharydb@gmail.com</option>
                          <option value="b20131@students.iitmandi.ac.in" >b20131@students.iitmandi.ac.in</option>
                          <option value="b20106@students.iitmandi.ac.in" >b20106@students.iitmandi.ac.in</option>
                          <option value="b20117@students.iitmandi.ac.in" >b20117@students.iitmandi.ac.in</option>
                          <option value="123@gmail.com">123@gmail.com</option>
                        </select>
              </div>
            <br>
              <div class="form-group">
              <label>Choose Date : </label>
                <input
                    type="date"
                    required
                    value={date}
                    name="date"
                    
                />
              </div>
              <br>
              <div class="form-group">
                <label>Start Time : </label>
              <input
                type="time"
                value={startTime}
                required
                name="startTime"
                
                />
              </div>
              <br>
              <div class="form-group">
              <label>End Time : </label>
                <input
                    type="time"
                    value={endTime}
                    required
                    name="endTime"
                />
              </div>
              <br>
              <input type="submit"  />
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
  </body>
</html>