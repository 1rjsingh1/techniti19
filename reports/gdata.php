<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Report</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script type="text/javascript" src="jquery.min.js" ></script>
    <script type="text/javascript" src="jquery.table2excel.min.js" ></script>

    <script type="text/javascript" >

    	$(document).ready(function(e) {

    		$("#myButton").click(function(e) {

    			$("#mytable").table2excel({
    					name : "new File",
    					filename: "newfile",
    					fileext: ".xls"

    				});
            });

        });

    </script>
    <?php
    include('../connection.php');
     ?>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div class="container">
   <table id="mytable" class="table table-bordered">
    <tr><td colspan="8"><center><h1 style="text-transform:uppercase;"> Society -
    <?php
    $q1="Select sname from societies where sid=".$_SESSION['dept'];
     $r=mysqli_query($con,$q1);
     $namee=mysqli_fetch_assoc($r);
     $disp="'".$namee['sname']."'</h1><h2>";
     echo $disp."</h2></center></td></tr><tr><td colspan='8'><center><h2> Event -";
$q1="Select ename from events where eid=".$_SESSION['eid'];
 $r=mysqli_query($con,$q1);
 $namee=mysqli_fetch_assoc($r);
 $disp=$namee['ename'];
 echo $disp; ?> <br>
 Details Of Participants</h2></center>
    </td>
  </tr>
  <tr></tr>


    <tr>
      <th scope="col">Serail No</th>
      <th scope="col">Team Name</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">College</th>
      <th scope="col">Mobile</th>






    </tr>

  <tbody>
    <?php
      $que="Select tname,name,user.email,college,phone from user,groupe where user.email=groupe.email and eid=".$_SESSION['eid'];
     

      $r1t=mysqli_query($con,$que);
      $count=mysqli_num_rows($r1t);
      if($count==0)
        {
          echo "<h1>"."No record Found"."</h1>";
        }
        else
        {


          $t=0;
          while($fetch=mysqli_fetch_assoc($r1t))
          {
              $t=$t+1;
              echo "<tr>";
          echo "<td>".$t."</td>";
            echo "<td>".$fetch['tname']."</td>";
            echo "<td>".$fetch['name']."</td>";
            echo "<td>".$fetch['email']."</td>";
            echo "<td>".$fetch['college']."</td>";
            echo "<td>".$fetch['phone']."</td>";

            echo "</tr>";
          }
      }


  ?>
</tbody>
</table>
  </div>
  <center><button id="myButton" type="button" class="btn btn-primary btn-lg">Click to download excel</button></center>
  </body>
</html>
