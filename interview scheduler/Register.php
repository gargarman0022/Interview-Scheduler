<!DOCTYPE html>
<html>
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
        background-image : url('images/registration.jpg');
        background-size : cover;
      }
    </style>

  <body style = "background-image:url('pk.jpeg');background-size:auto;">
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Registration Form</h1>
          </div>
          <div class="panel-body">
            <form action="Register_s.php" method="post">
              <div class="form-group">
                <label for="id">Id</label>
                <input
                  type="text"
                  class="form-control"
                  id="id"
                  name="id"
                  required
                />
              </div>
              <br>
              
              <div class="form-group">
                <label for="Name">Candidate_name</label>
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  name="name"
                  required
                />
              </div>
              <br>
                <div class="form-group">
                <label for="Name">Contact </label>
                <input
                  type="text"
                  class="form-control"
                  id="contact1"
                  name="contact1"
                  required
                />
              </div>
                <br>
              <div class="form-group">
                <label for="Name">Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email"
                  required
                />
              </div>
              
                <br>
                <br>
                <div class="button" style = "text-align:center"><input type="submit" class="btn btn-success" /></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>