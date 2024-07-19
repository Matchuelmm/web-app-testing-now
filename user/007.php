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

    $user_key = $_REQUEST['k_cd'];
    $current_date = date('Y-m-d H:i:s');

    $sql = "SELECT id, user_name, access_key FROM user_logger WHERE access_key ='".$user_key."' AND date_time <'".$current_date."' ";

    // echo $sql; 

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      if($row = $result->fetch_assoc()) 
      {
          // echo $row["access_key"]."<br>";
            $ciphering = "AES-128-CTR";
            $encryption = $row["access_key"]; 
            $decryption_iv = '1234567891011121';
            $decryption_key = "matmaxtest";
            $decryption=openssl_decrypt ($encryption, $ciphering,$decryption_key, $options, $decryption_iv);
                  

            $sqle = "UPDATE user_logger SET login_status ='logged_out' WHERE access_key ='".$user_key."' AND date_time <'".$current_date."' ";
            
            // echo "Decrypted String: " . $decryption."<br>";
            // echo $sqle."<br>";

            if ($conn->query($sqle) === TRUE) {
              header("Location: /benchmark/");
            } else {
              echo "Error updating record: " . $conn->error;
            }

            $conn->close();

      }
    } else {
     header("Location: /benchmark/");
    }
    $conn->close();
?>