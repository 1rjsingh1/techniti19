<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php
    include('../connection.php');
     ?>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class=""  method="post" enctype="multipart/form-data">
      <input type="text" name="quer" value="">
      <button type="submit" name="button">Run</button>
    </form>
    <?php
    if(isset($_POST['button']))
    {
      $que="Select ".$_POST['quer'];
      echo $que;
      $r1t=mysqli_query($con,$que);
      $count=mysqli_num_rows($r1t);
      echo $count;
    }
     ?>
  </body>
</html>
