<?php
        include('conn.php');
        if(! isset($_SESSION['pid']))
        {
          echo "<script>alert('Please Log In!!!')</script>";
          echo "here";
          $_SESSION['reg']=1;

          header("Location:../../index.php");
        }
        else {
        $eid=$_GET['id'];
        $quer="Insert into ind values(".$eid.",".$_SESSION['pid'].")";
        $result=mysqli_query($con,$quer);

                if ($result) {
                  $_SESSION['suck']=1;
                  echo "<script> alert('Registered Success')</script>";
                 header("Location:../../index1.php");
                }
                else {
                  echo $quer;
                }
              }



  ?>
