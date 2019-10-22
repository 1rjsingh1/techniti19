<?php
 include('conn.php');
if(! isset($_SESSION['name']))
{
  echo $_SESSION['name'];
  echo "<script>alert('Please Log In!!!')</script>";
  echo "here";
  $_SESSION['reg']=1;

//  header("Location:../../index.php");
} ?>
<?php
    // session_start();

if(isset($_POST['final5']))
{
  extract($_POST);
  $i=$_GET['id'];

    $q1="insert into groupe values(".$i.",\"".$_POST['teamname']."\",\"".$_POST['leaderid']."\")";
    $r1t=mysqli_query($con,$q1);

    $q2="insert into groupe values(".$i.",\"".$_POST['teamname']."\",\"".$_POST['m1email']."\")";
    $r2t=mysqli_query($con,$q2);
if($_POST['m2email']!=0){
    $q3="insert into groupe values(".$i.",\"".$_POST['teamname']."\",\"".$_POST['m2email']."\")";
    $r3t=mysqli_query($con,$q3);
  }
if($_POST['m3email']!=0){
    $q4="insert into groupe values(".$i.",\"".$_POST['teamname']."\",\"".$_POST['m3email']."\")";
    $r4t=mysqli_query($con,$q4);
}
if($_POST['m4email']!=0){
    $q5="insert into groupe values(".$i.",\"".$_POST['teamname']."\",\"".$_POST['m4email']."\")";
    $r5t=mysqli_query($con,$q5);
}
if($_POST['m5email']!=0){
    $q6="insert into groupe values(".$i.",\"".$_POST['teamname']."\",\"".$_POST['m5email']."\")";
    $r6t=mysqli_query($con,$q6);
}
if($_POST['m6email']!=0){
    $q7="insert into groupe values(".$i.",\"".$_POST['teamname']."\",\"".$_POST['m6email']."\")";
    $r7t=mysqli_query($con,$q7);
}
if($_POST['m7email']!=0){
    $q8="insert into groupe values(".$i.",\"".$_POST['teamname']."\",\"".$_POST['m7email']."\")";
    $r8t=mysqli_query($con,$q8);
}

        if ($r2t) {
          $_SESSION['suck']=1;
        
          header("Location:../../index1.php");
     }
      }

?>
<!DOCTYPE html>
<html lang="en">


                        <head>
                            <meta charset="utf-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>Team Register</title>
                            <link rel="icon" type="image/ico" href="../../images/favlogo.ico">

                            <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                            <link href="../../cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" rel="stylesheet">
                            <link href="../../cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.2.0/css/mdb.min.css" rel="stylesheet">
                            <script type="text/javascript" src="../../cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                            <script type="text/javascript" src="../../cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js"></script>

                            <script type="text/javascript" src="../../cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.2.0/js/mdb.min.js"></script>
                            <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
                            <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
                            <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                            <link rel="stylesheet" type="text/css" href="../local.css" />
                            <script type="text/javascript" src="../../cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
                            <script src="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

                        </head>
                        <body>

                            <div id="wrapper">
                                  <?php include('../../navbar.php'); ?>
          <div class="collapse navbar-collapse navbar-ex1-collapse" style="background: black;">


                                    </div>
                                </nav>

                                <!DOCTYPE html>
<html>
<style>
input[type=text], input[type=email], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  font-size: 10px;
  color: black;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: black;
}

.register {
  border-radius: 5px;
  background-color: transparent;
  padding: 50px;
  width: auto;
  position: relative;
}
.fname{
    color: black;
    font-size: 15px;
}
</style>
<body>


<div class="register">
  <form method="post" enctype="multipart/form-data">
    <div style="font-size: 25px; color: black; font-family: arial;"><b>Register your team</b></div>
    <br>
    <label class="fname">Team Name *</label>
    <input type="text" id="teamname" name="teamname" placeholder="Team Name">

    <label class="fname">Team Leader's Name *</label>
    <input type="text" id="leadername" name="leadername" required  placeholder="Team Leader's Name">

    <label class="fname">Team Leader's Email ID *</label>
    <input type="email" id="leaderid" name="leaderid" required placeholder="Team Leader's Email ID">

    <label class="fname">Member 1 Name</label>
    <input type="text" id="m1name" name="m1name" required placeholder="Member 1">

    <label class="fname">Member 1 Email ID</label>
    <input type="email" id="m1email" name="m1email" required placeholder="Member 1">

    <label class="fname">Member 2 Name</label>
    <input type="text" id="m2name" name="m2name" placeholder="Member 2">

    <label class="fname">Member 2 Email ID</label>
    <input type="email" id="m2email" name="m2email" placeholder="Member 2">

    <label class="fname">Member 3 Name</label>
    <input type="text" id="m3name" name="m3name" placeholder="Member 3">

    <label class="fname">Member 3 Email ID</label>
    <input type="email" id="m3email" name="m3email" placeholder="Member 3">

    <label class="fname">Member 4 Name</label>
    <input type="text" id="m4name" name="m4name" placeholder="Member 4">

    <label class="fname">Member 4 Email ID</label>
    <input type="email" id="m4email" name="m4email" placeholder="Member 4">

    <label class="fname">Member 5 Name</label>
    <input type="text" id="m5name" name="m5name" placeholder="Member 5">

    <label class="fname">Member 5 Email ID</label>
    <input type="email" id="m5email" name="m5email" placeholder="Member 5">

    <label class="fname">Member 6 Name</label>
    <input type="text" id="m6name" name="m6name" placeholder="Member 6">

    <label class="fname">Member 6 Email ID</label>
    <input type="email" id="m6email" name="m6email" placeholder="Member 6">

    <label class="fname">Member 7 Name</label>
    <input type="text" id="m7name" name="m7name" placeholder="Member 7">

    <label class="fname">Member 7 Email ID</label>
    <input type="email" id="m7email" name="m7email" placeholder="Member 7">


    <input style="background-color: black;" name="final5" type="submit" value="Register">
  </form>
</div>

</body>
</html>










                            <div id="myModal" class="modal fade" role="dialog">
                                <div class="modal-dialog" style="width: 90%;max-width: 90%;">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" style="color: white;" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">
                                            <center> REGISTRATION </center>
                                        </h4>
                                      </div>
                                      <div class="modal-body">
                                            <form name="myForm" method="post" onsubmit="return register()" autocomplete>
                                                <div class="md-form">
                                                    <div class="row" style="margin-bottom: 40px;">
                                                        <div class="col-md-12">
                                                            <center>
                                                                <div class="googin loginBUTTON">
                                                                </div>
                                                                <div class="logon axisLOGIN" id="axisLOGIN" style="color: white;font-family: nexalight;" title="user">
                                                                    <div style="text-align: center;"><span class="nameid">NAME : </span><span class="clientName" id="clientName" title="name"></span></div>
                                                                    <div style="text-align: center;"><span class="nameid">techNITi19 ID : </span><span class="techNITi19id" id="techNITi19id" title="axis id"></span></div>
                                                                </div>
                                                                <div class="myRegistrations"></div>
                                                            </center>
                                                        </div>
                                                    </div>

                                                    <div class="row" style="margin-bottom: 40px;">
                                                        <div class="col-md-12">
                                                            <center>
                                                                <input type="text" name="teamName"  placeholder="Team Name" style="color: white;font-size: 17px;max-width: 40%;" id="inputValidationEx" class="form-control validate" required="true" />
                                                                <input type="text" name="eventName" value="ALGO-RHYTHM" hidden />
                                                            </center>
                                                        </div>
                                                    </div>



                                                    <br />
                            <div class="row">
                                <div class="col-md-3 flex-center">
                                    <span class="flex-center" style="padding: 10px;font-size: 19px; vertical-align: baseline;text-decoration: none;"> Team Leader</span>
                                </div>

                                <div class="col-md-3">
                                  <input type="text"  name="name1" placeholder="Name" style="color: white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate" required />
                                </div>
                                <div class="col-md-3">
                                  <input type="text" name="id1" placeholder="techNITi19 ID" style="color: white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate" required />
                                </div>
                                <div class="col-md-3">
                                  <input type="email" name="email1" placeholder="Email" style="color: white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate" required />
                                </div>
                            </div>
                            <br />


                                                    <center>
                                                        <div>You can have team of 1.</div>
                                                    </center>
                                                    <br />


                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <center>
                                                                <input type="submit" name="Submit" value="Submit" class="btn btn-warning" />

                                                            </center>
                                                        </div>
                                                    </div>
                                                    <div style="visibility: hidden;">
                                                        <div class="row">
                                                            <div class="col-md-2 flex-center">
                                                                <span class="flex-center" style="padding: 10px;font-size: 19px; vertical-align: baseline;text-decoration: none;"> Member 2</span>

                                                            </div>

                                                            <div class="col-md-2">
                                                              <input type="text"  name="name2" placeholder="Name" style="color: white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate" />

                                                            </div>
                                                            <div class="col-md-2">
                                                              <input type="text" name="id2" placeholder="techNITi19 ID" style="color:white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate" />

                                                            </div>
                                                            <div class="col-md-2">
                                                              <input type="email" name="email2" placeholder="Email" style="color: white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate" />

                                                            </div>
                                                            <div class="col-md-2">
                                                              <input type="text" name="contact2" placeholder="Contact No." style="color: white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate" />

                                                            </div>
                                                            <div class="col-md-2">
                                                              <input type="text" name="college2" placeholder="College" style="color: white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate" />

                                                            </div>
                                                        </div>

                                                        <br />
                                                        <div class="row">
                                                            <div class="col-md-2 flex-center">
                                                                <span class="flex-center" style="padding: 10px;font-size: 19px; vertical-align: baseline;text-decoration: none;"> Member3</span>

                                                            </div>

                                                            <div class="col-md-2">
                                                              <input type="text"  name="name3" placeholder="Name" style="color: white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate" />

                                                            </div>
                                                            <div class="col-md-2">
                                                              <input type="text" name="id3" placeholder="techNITi19 ID" style="color:white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate" />

                                                            </div>
                                                            <div class="col-md-2">
                                                              <input type="email" name="email3" placeholder="Email" style="color: white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate" />

                                                            </div>
                                                            <div class="col-md-2">
                                                              <input type="text" name="contact3" placeholder="Contact No." style="color: white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate" />

                                                            </div>
                                                            <div class="col-md-2">
                                                              <input type="text" name="college3" placeholder="College" style="color: white;font-size: 17px;max-width: 90%;" id="inputValidationEx" class="form-control validate" />

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </form>
                                      </div>
                                    </div>
                                </div>




                            </div>


                            <script type="text/javascript">
                                if (typeof(Storage) !== "undefined")
                                {
                                    sessionStorage.setItem("path", "events/construction_and_design/crepido.html");
                                    sessionStorage.setItem("formPath","../../form.html");
                                }
                            </script>

                            <script src="../../www.gstatic.com/firebasejs/5.7.0/firebase.js"></script>
                            <script src="../../js/login.js" ></script>
                            <script src="../registration.js"></script>
                            <script src="../events.js"></script>
                        </body>

                        <!-- Mirrored from www.axisvnit.org/events/construction_and_design/crepido.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Apr 2019 06:47:37 GMT -->
