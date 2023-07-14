<?php
$username1 = $_POST['username'];
$password1 = $_POST['password'];
$username = "root"; 
$servername = "localhost";
$password = "";
$dbname = "mydb"; 
$conn = mysqli_connect($servername,$username,$password,$dbname);
if( ! $conn )
{
    die("connection failed".mysqli_connect_error());
}


$sql5="INSERT INTO myTable(username , password) VALUES('$username1','$password1')";
    if(mysqli_query($conn,$sql5)){
        echo "Inserted Successfully";
    }
    else{
        echo "Error";
    }
?>
 
