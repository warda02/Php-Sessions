<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>MY_Page</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assests/css/style.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="signup-form">
  <form action="register_a.php" method="post" enctype="multipart/form-data">

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 text-center mb-5">
            <!-- Add any content here if needed -->
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-5">
            <div class="login-wrap p-4 p-md-5">
              <div class="icon d-flex align-items-center justify-content-center">
                <span class="fa fa-user-o"></span>
              </div>
              <h3 class="text-center mb-4">Register</h3>
                 <div class="form-group">
                  <input type="text" name="first_name" class="form-control rounded-left" placeholder="First Name" required>
                </div>
                <div class="form-group">
                  <input type="text" name="last_name" class="form-control rounded-left" placeholder="Last Name" required>
                </div>
                <div class="form-group">
                  <input type="email" name="email" class="form-control rounded-left" placeholder="Email" required>
                </div>
                <div class="form-group">
                  <input type="password" name="pass" class="form-control rounded-left" placeholder="Password" required>
                </div>
                <div class="form-group">
                  <input type="password" name="cpass" class="form-control rounded-left" placeholder="Confirm Password" required>
                </div>
               
                <div class="form-group" style="text-align: center;">
                  <button type="submit" name="save" class="btn btn-primary rounded submit p-2 px-2">Register</button>
                </div>
              </form>
              <h6 class="text-center mb-2">Already have an account? <a href="./login.php">Login</a></h6>
</form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</body>
</html>
