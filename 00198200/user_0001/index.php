<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "benchmark_sql";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


// Create connection
$connx = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($connx->connect_error) {
  die("Connection failed: " . $connx->connect_error);
}

$sql = "SELECT id, cellphone, email FROM users WHERE cellphone='".$_POST['mobile']."' AND email='".$_POST['email']."' ";
$result = $connx->query($sql);

// echo $sql;


if ($result->num_rows > 0) 
{

      header("Location: /benchmark/00198200/user_0001/message.php/?message=Error!! This User already Exists!!! <br>Please recreate the new user!!<br></br><br></br><button onclick='history.back()'>Go Back</button> ");
   
} 
else
{
      $names = $_POST['name'];
      $surname = $_POST['surname'];
      $cellphone = $_POST['mobile'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $usertype = "Admin";
      $company = $_POST['company'];
      $comp_key = "".uniqid();

      $sql = "INSERT INTO users (id,name,surname,cellphone,email,password,user_type,company,company_key)
      VALUES ('0','".$names."', '".$surname."', '".$cellphone."', '".$email."','".$password."','".$usertype."','".$company."','".$comp_key."')";

      if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: /benchmark/");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

      $conn->close();
}
$connx->close();


?>