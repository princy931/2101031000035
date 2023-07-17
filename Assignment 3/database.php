<?php
$Name1=$_POST['name'];
$Email1=$_POST['email'];
$Phone1=$_POST['phone'];
$Subject1=$_POST['subject'];
$Mesage1=$_POST['message'];
$Conditions1=$_POST['conditions'];

$UserName="root";
$Servername="localhost";
$Password="";
$dbname="feedBack";
$conn=mysqli_connect($Servername,$UserName,$Password,$dbname);
if(!$conn)
{
    die("Connection faild".mysqli_connect_error());
}
//  $sql="Create database feedBack";
// if(mysqli_query($conn,$sql))
//  {
//      echo "Database Created";
//  }
// else{
//    echo "Error";
// }
// $sql1="CREATE TABLE feedbackTABLE(Id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, Name VARCHAR(20),Email VARCHAR(20),Phone INT(10),Subject VARCHAR(10), Message VARCHAR(10),Conditions VARCHAR(50))";
// if($conn->query($sql1)===TRUE)
//  {
//      echo "Table Created";
//  }
//  else{
//     die("Connection faild".mysqli_connect_error());
// }
// $sql2="INSERT INTO feedbackTABLE(Name,Email,Phone,Subject,Message,Conditions) VALUES('nisha','nisha@gmail.com',987412323,'web development','Nice')";
// if(mysqli_query($conn,$sql2))
// {
//     echo "Value Insert Successfully";
// }
// else{
//     echo "Error";
// }
// $sql3="INSERT INTO feedbackTABLE(name,email,phone,subject,message,conditions) VALUES('$Name1','$Email1','$Phone1','$Subject1','$Message1','$Conditions1')";
// if(mysqli_query($conn,$sql3))
// {
//     echo "Value Insert Successfully";
// }
// else{
//     echo "Error";
// }
// $sql4="DELETE FROM feedbackTABLE WHERE Id=1";
// if(mysqli_query($conn,$sql4))
// {
//     echo "Deleted Successfully";
// }
// else{
//     echo "Error";
// }
// $sql5="DELETE FROM feedbackTABLE WHERE Id=4";
// if(mysqli_query($conn,$sql5))
// {
//     echo "Deleted Successfully";
// }
// else{
//     echo "Error";
// }

?>