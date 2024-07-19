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

    $sql = "SELECT name,surname,email,company_key FROM users WHERE password='".$_POST['password']."' AND email='".$_POST['email']."' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc())
      {
         
          // header("Location: /benchmark/00198200/main/index.php?uid=".$row["company_key"]."&nm=".$row["name"]."".$row["surname"]." ");     

            $user_mail = $row["email"];
            $simple_string = $user_mail;
             
            // Store the cipher method
            $ciphering = "AES-128-CTR";
             
            // Use OpenSSl Encryption method
            $iv_length = openssl_cipher_iv_length($ciphering);
            $options = 0;
             
            // Non-NULL Initialization Vector for encryption
            $encryption_iv = '1234567891011121';
             
            // Store the encryption key
            $encryption_key = "matmaxtest";
             
            // Use openssl_encrypt() function to encrypt the data
            $encryption = openssl_encrypt($simple_string, $ciphering,
                        $encryption_key, $options, $encryption_iv);
             
            // Display the encrypted string
            // echo "Encrypted String: " . $encryption . "\n";   

            // $decryption_iv = '1234567891011121';
 
            // // Store the decryption key
            // $decryption_key = "matmaxtest";
             
            // // Use openssl_decrypt() function to decrypt the data
            // $decryption=openssl_decrypt ($encryption, $ciphering, 
            //         $decryption_key, $options, $decryption_iv);
             
            // // Display the decrypted string
            // echo "Decrypted String: " . $decryption;     

            $current_date = date('Y-m-d H:i:s');      

            $sqlx = "INSERT INTO user_logger (id,user_name,access_key,login_status ) VALUES ('0', '".$user_mail."','".$encryption."','logged_in')";

            if ($conn->query($sqlx) === TRUE) {

              echo "<!DOCTYPE html>
                <html lang='en' >
                <head>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                  <meta charset='UTF-8'>
                  <title>Main Dashboard</title>
                  <link rel='stylesheet' href='./styles/style001.css'>
                <link rel='stylesheet' href='./styles/style002.css'>
                <link rel='stylesheet' href='./styles/style.css'>

                <!-- Favicons -->
                <link href='/benchmark/assets/img/benchmark.png' rel='icon'>
                <link href='/benchmark/assets/img/benchmark.png' rel='apple-touch-icon'>

               </head>
                <body>
                <!-- partial:index.partial.html -->
                <div class='dashboard-layout'>

                  <aside id='sidebar' class='sidebar' style='background-color: #18c4ff;' >
                    <h3 class='sidebar-heading'>
                      <span></span>
                    </h3>
                    <br></br>

                    <ul class='nav flex-column'>
                    <ul class='nav flex-column'>
                      <li class='nav-item'>
                        <a class='nav-link active' href='myprofile/index.php?k_cd=".$encryption."&nms=".$row["name"]." ".$row["surname"]." '>
                          <img src='./img/loggedin.png' style='width:43px; height:43px;'></img>
                          <span style='margin-left:10px;'>My Profile</span>
                        </a>
                      </li>

                    </ul>
                    <ul class='nav flex-column'>
                      <li class='nav-item'>
                        <a class='nav-link active' href='candidates/index.php?k_cd=".$encryption."&nms=".$row["name"]." ".$row["surname"]."'>
                           <img src='./img/candidates.png' style='width:43px; height:43px;'></img>
                          <span style='margin-left:10px;'>Candidates</span>
                        </a>
                      </li>
                    </ul>
                    </ul>

                  </aside>

                  <main id='main' class='main'>
                    <nav class='navbar navbar-expand navbar-light bg-light shadow'>

                      <button id='sidebarToggler' type='button' class='btn btn-outline-dark mr-3 d-md-none'>
                        <i class='fas fa-bars'></i>
                      </button>

                      <a class='navbar-brand' href='#'>
                        <img src='./img/dashboard.png' style='width:43px; height:43px;'></img>
                        <span>My Dashboard</span>
                      </a>

                      <ul class='navbar-nav ml-auto'>    
                        <li class='nav-item dropdown'>
                          <a class='nav-link dropdown-toggle' href='#' data-toggle='dropdown'>
                            <span>".$row["name"]." ".$row["surname"]."</span>
                            <span class='fa-stack'>
                              <img src='./img/loggedin.png' style='width:33px; height:33px;'></img>
                            </span>
                          </a>
                          <div class='dropdown-menu dropdown-menu-right'>
                            <a class='dropdown-item' href='/benchmark/user/007.php?k_cd=".$encryption."&nms=".$row["name"]." ".$row["surname"]."'>Logout</a>
                          </div>
                        </li>
                      </ul>
                    </nav>

                    <div class='container-fluid py-4'>
                      <br></br>
                          <div class='row'>
                            <div class='col-xl-3 col-md-6 mb-4'>
                            <a href='javascript:myFunction();'>
                              <div class='card border-left-success shadow h-100 py-2' >
                               <div class='dropdown'>
                                <div class='card-body'>
                                  <div class='row no-gutters align-items-center'>
                                    <div class='col mr-2'>
                                      <div class='text-xs font-weight-bold text-muted text-uppercase mb-1'>Resumes / CV's</div>
                                      <div class='h5 mb-0 font-weight-bold text-gray-800'>84</div>
                                    </div>
                                    <div class='col-auto'>
                                      <img src='./img/resume.png' style='width:33px; height:33px;'></img>
                                    </div>
                                  </div>
                                  </a>
                                    <div id='myDropdown' class='dropdown-content'>
                                    <a href='upload/00123.php?k_cd=".$encryption."&nms=".$row["name"]." ".$row["surname"]."'> <img src='./img/cv.png' style='width:33px; height:23px;margin-right:2px;'></img>Upload Candidate Cv</a>
                                    <a href='upload/004011.php?k_cd=".$encryption."&nms=".$row["name"]." ".$row["surname"]."'><img src='./img/cv.png' style='width:33px; height:23px;margin-right:2px;'></img>View Candidate Cv</a>
                                    <a href='upload/00007.php?k_cd=".$encryption."&nms=".$row["name"]." ".$row["surname"]."'><img src='./img/cv.png' style='width:33px; height:23px;margin-right:2px;'></img>Remove Candidate Cv</a>
                                  </div>
                                </div>
                                </div>
                              </div>
                            </div>

              
                            <div class='col-xl-3 col-md-6 mb-4'>
                            <a href='javascript:myFunctionTwo();'>
                              <div class='card border-left-success shadow h-100 py-2' >
                               <div class='dropdown'>
                                <div class='card-body'>
                                  <div class='row no-gutters align-items-center'>
                                    <div class='col mr-2'>
                                      <div class='text-xs font-weight-bold text-muted text-uppercase mb-1'>Assesments</div>
                                      <div class='h5 mb-0 font-weight-bold text-gray-800'>20</div>
                                    </div>
                                    <div class='col-auto'>
                                      <img src='./img/resume.png' style='width:33px; height:33px;'></img>
                                    </div>
                                  </div>
                                  </a>
                                    <div id='myDropdown2' class='dropdown-content'>
                                    <a href='upload/000012.php?k_cd=".$encryption."&nms=".$row["name"]." ".$row["surname"]."'> <img src='./img/test2.png' style='width:33px; height:33px;margin-right:2px;'></img>Prepare Assessment</a>
                                    <a href='upload/000076.php?k_cd=".$encryption."&nms=".$row["name"]." ".$row["surname"]."'><img src='./img/test2.png' style='width:33px; height:33px;margin-right:2px;'></img>Remove Assessment</a>
                                    <a href='upload/000069.php?k_cd=".$encryption."&nms=".$row["name"]." ".$row["surname"]."'><img src='./img/test2.png' style='width:33px; height:33px;margin-right:2px;'></img>View All Assessments</a>
                                  </div>
                                </div>
                                </div>
                              </div>
                            </div>
                            
                            

                            <div class='col-xl-3 col-md-6 mb-4'>
                            <a href='javascript:myFunctionZee();'>
                              <div class='card border-left-success shadow h-100 py-2' >
                               <div class='dropdown'>
                                <div class='card-body'>
                                  <div class='row no-gutters align-items-center'>
                                    <div class='col mr-2'>
                                      <div class='text-xs font-weight-bold text-muted text-uppercase mb-1'>Notifications</div>
                                      <div class='h5 mb-0 font-weight-bold text-gray-800'>20</div>
                                    </div>
                                    <div class='col-auto'>
                                      <img src='./img/chatta.png' style='width:33px; height:35px;'></img>
                                    </div>
                                  </div>
                                  </a>
                                    <div id='myDropdown3' class='dropdown-content'>
                                    <a href='#home'> <img src='./img/chatta.png' style='width:33px; height:33px;margin-right:2px;'></img>Read Notifications</a>
                                  </div>
                                </div>
                                </div>
                              </div>
                            </div>               

                          <!-- Content Row -->
                          <div class='row'>

                            <!-- Content Column -->
                            <div class='col-lg-12 mb-4'>

                 
                              <div class='row'>


                              </div>
                            </div>
                          </div>
                        </div>
                    
                  </main>

                </div>
                <!-- partial -->
                  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
                <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/popper.min.js'></script>
                <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js'></script>
                <script  src='./scripts/script.js'></script>

                </body>
                </html>";

            } else {
              echo "Error: " . $sqlx . "<br>" . $conn->error;
            }

            $conn->close();

      }
    } else {
      header("Location: /benchmark/00198200/user_0001/message.php/?message=Error!! Your login Credentials might be incorrect, please re-enter correct details!!<br></br><br></br><button onclick='history.back()'>Go Back</button> ");
    }
    $conn->close();
?>