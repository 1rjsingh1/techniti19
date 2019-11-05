<?php
    // session_start();
     include('connection.php');
if(isset($_POST['final5']))
{
  extract($_POST);

    $quer1="Insert into user(Name,Email,College,Phone,Password) values(\"".$_POST['name']."\",\"".$_POST['email']."\",\"".$_POST['colg']."\",".$_POST['phone'].",\"".md5($_POST['Password'])."\")";

$_SESSION['regquer']=$quer1;
$result=mysqli_query($con,$_SESSION['regquer']);

        if ($result) {
          $_SESSION['check']=1;
          echo "<script> alert('Registered Successfully')</script>";
         header("Location:index.php");
        }
        else {
          $_SESSION['naa']=1;
          echo "<script> alert('Registration Unsuccessful Try again!!')</script>";
         header("Location:index.php");
        }
      }

//  $count1=mysqli_query($con,$quer1);
// 		$mail=$_POST['email'];
// 		$queee="Select idp from register where email='$mail'";
//
// 		$res=mysqli_query($con,$queee);
// 		$out=mysqli_fetch_array($res);
//         $pri=$out['idp'];
// 		$quer2="Insert into login(pid,name,email,password) values('$pri',\"".$_POST['user']."\",\"".$_POST['email']."\",\"".$_POST['pass']."\")";
//
// $_SESSION['logquer']=$quer2;
// 		//$count2=mysqli_query($con,$quer2);
//
// 		$string = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
// 		    $string_shuffled = str_shuffle($string);
// 		    $password = substr($string_shuffled, 1, 7);
// 				$_SESSION['otp']=$password;
// 				mail($mail,"OTP Confirmation","You had requested for a registration with us. Please enter this
// 				OTP -".$password."to confirm your registration");
// 			header("Location:confirm.php");
//
//     }
// 		else {
//
// 			echo "<script>alert('Paaswords Dont match!!!')</script>";
//
// 		}
// 	}
?>
