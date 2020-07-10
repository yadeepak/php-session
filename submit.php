<?php
include 'connection.php';

 $fname = $_REQUEST['fname'];
 $lname = $_REQUEST['lname'];
 $number = $_REQUEST['number'];
$fullname = $fname.$lname;
 $sql = "INSERT INTO `form-data` (`fullname`,`number`) VALUES
  ('$fullname','$number')";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "record added";
        header('location:form.php');
    }else{
        echo  "something wrong";
    }

    

?>