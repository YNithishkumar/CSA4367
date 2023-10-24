<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "login";

 
  $con = mysqli_connect($servername, $username, $password, $database);

  
  $sql = "INSERT INTO `login` (`username`, `password`) VALUES ( '$username', ' $password');";

  
  $result = mysqli_query($con, $sql);

  if ($result) {
    echo "Data inserted successfully";

  } else {
    echo "Data not inserted successfully";
  }
}
?>