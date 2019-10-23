<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
//error_reporting(0);
$FName=$_POST['FirstName'];
$LName=$_POST['LastName'];
$empcode=$_POST['EmpCode'];
$EmpDept=$_POST['EmpDept'];
$EmpDesignation=$_POST['EmpDesignation'];
$EmpContactNo=$_POST['EmpContactNo'];
$gender=$_POST['gender'];
$empjdate=$_POST['EmpJoingdate'];
$query=mysqli_query($con, "insert into employeedetail (EmpFname,EmpLName,EmpCode,EmpDept,EmpDesignation,EmpContactNo,EmpGender,EmpJoingdate) values ('$FName','$LName','$empcode','$EmpDept','$EmpDesignation',$EmpContactNo,'$gender','$empjdate')");
    if ($query) {
      echo "Operation Successful";
  }
  else
    {
      echo "Operation Failed";
    }
?>
