<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="submit.php" method="post">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br><br>
  <label for="number">Number:</label><br>
  <input type="number" id="number" name="number" value="Doe"><br><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>

<?php 

$sql = "SELECT * FROM `form-data` ";
$result = mysqli_query($conn,$sql);
  if($result){
    $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
?>
<table border="1">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Number</th>
  </tr>
  <?php
  $count = count($data);
  for($i=0;$i<$count;$i++){ ?>  
    <tr>
    <td><?php echo $data[$i]['id']; ?> </td>
    <td><?php echo $data[$i]['fullname']; ?> </td>
    <td><?php echo $data[$i]['number']; ?> </td>
  </tr>
  <?php
  }
  ?>
 
</table>
<?php
  }else {

  }

?>