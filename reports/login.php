<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" href="login.css">
  <?php
  require("../connection.php");
   ?>
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body style="background:black">
  <br>
  <div class="container" >

    <!-- <div class="wrapper" ng-hide="show()"> -->
      <form class="form-signin" method="post">
        <h1 class="form-signin-heading">Log-In </h1><br>
        <label for="Email1"><strong>Society Id </strong></label><br>
        <input id="Email1" type="number" class="form-control" name="user"  required>
          <label for="pass"><strong>Event Id</strong></label><br>
        <input id="pass" type="number" class="form-control" name="pass"  required/>
        <br>
        <button id="button" class="btn btn-lg btn-primary btn-block" type="submit">Login </button>
      </form>
    </div>


<?php
    session_start();
    if(isset($_POST['user']) and isset($_POST['pass']))
    {
      $name=$_POST['user'];
      $pass=$_POST['pass'];
      $_SESSION['dept']=$name;
      $_SESSION['eid']=$pass;
      $q1="Select * from checka where eid=".$pass;
      $r1=mysqli_fetch_assoc($conn,$q1);

      if($r1)
    {
        header("Location:data.php");
      }

      else {
      header("Location:gdata.php");
      }

    }

 ?>


</body>
