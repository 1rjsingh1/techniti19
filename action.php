<?php
 include('connection.php');


    if(isset($_POST['uname']) and isset($_POST['psw']))
    {
      $uname=$_POST['uname'];
      $pass=$_POST['psw'];
      $uname=mysqli_real_escape_string($con,$uname);
      $pass=mysqli_real_escape_string($con,$pass);
      $query="select userid,name from user where email='$uname' AND password='$pass'";
      $result=mysqli_query($con,$query);
      $count=mysqli_num_rows($result);

      if($count == "0")
      {

        echo "<script>alert('No User Found!!!')</script>";
      }
      else {
       $out=mysqli_fetch_array($result);
        $uid=$out['userid'];
        $name=$out['name'];
        $_SESSION['name']=$name;
        $_SESSION['pid']=$uid;
      //  echo $_SESSION['name'];
        //echo $_SESSION['pid'];
          /*if($name=="admin")
          header("Location:admin.php");*/

    header("Location:index1.php");

      }
    }

 ?>
