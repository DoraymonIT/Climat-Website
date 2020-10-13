<?php
    session_start();
    if(!empty($_SESSION['username'])) {
        header('location: admin.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="../vondor/bootstrap/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="../style/style.css" />
    <link
      rel="shortcut icon"
      href="../images/air-conditioner 1.png"
      type="image/x-icon"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto"
      rel="stylesheet"
    />

    <title>FROID INTER | Login Page</title>
  </head>

  <body>
    <div class="container-fluid" style="padding-top: 160px; height: 100%;background-color: whitesmoke;">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 shadow">
            <div class="row">
                <div class="col-md-12" style="text-align: center;">
                    <i
                    class="fa fa-user-circle-o"
                    style="font-size: 70px; text-align: center"
                    aria-hidden="true"
                  ></i>
                  <br>
                  <h4>FROID INTER</h4>
                  <br>
                </div>
            </div>
         
          <form action="login-process.php" method="post" >
            <label for="">
              <i class="fa fa-envelope-o" aria-hidden="true"></i> Email</label
            >
            <input type="email" name="username" class="form-control btn-block" placeholder="Email@gmail.com" required />
            <br />
            <label for="">
              <i class="fa fa-lock"  aria-hidden="true"></i> Password</label
            >
            <input type="password" name="password" class="form-control" placeholder="*********" required />
           <hr>
            <button class="btn btn-block btn-success" type="submit" name="login-submit">
              Se connecter
            </button>
          </form>
        </div>
        <div class="col-md-4"></div>
      </div>

      <hr />
      <p style="float: left; padding: 5px">
        Tous les droits sont réservés au FROID INTER
        <i
          class="fa fa-copyright"
          style="font-size: 15px"
          aria-hidden="true"
        ></i>
        2020
      </p>
    </div>
  </body>

  <script
    type="text/javascript"
    src="https://code.jquery.com/jquery-3.2.1.min.js"
  ></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>
