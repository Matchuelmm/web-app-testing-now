<!DOCTYPE html>
                <html lang='en' >
                <head>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                  <meta charset='UTF-8'>
                  <title>Benchmark</title>
                  <link rel='stylesheet' href='./styles/style001.css'>
                <link rel='stylesheet' href='./styles/style002.css'>
                <link rel='stylesheet' href='./styles/style.css'>

                                  <!-- Favicons -->
                <link href="/benchmark/assets/img/benchmark.png" rel="icon">
                <link href="/benchmark/assets/img/benchmark.png" rel="apple-touch-icon">

                </head>
                <body>
                <!-- partial:index.partial.html -->
                <div class='dashboard-layout'>

                  <aside id='sidebar' class='sidebar' style='background-color: #18c4ff;' >
                    <h3 class='sidebar-heading'>
                      <span></span>
                    </h3>
                    <br></br>

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

                        $cust_key = $_REQUEST['k_cd'];
                        $current_date = date('Y-m-d H:i:s');


                        $sql = "SELECT id, user_name, access_key FROM user_logger WHERE access_key ='".$cust_key."' AND 
                                login_status='logged_in' AND date_time <'".$current_date."' ";

                         //echo $sql;

                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) 
                        {
                            // output data of each row
                            while($row = $result->fetch_assoc()) 
                            {
                               // echo "id: " . $row["access_key"]."";
                            }
                        } else {
                           header("Location: /benchmark/");
                        }
                        $conn->close();

                    ?>

                    <ul class='nav flex-column'>
                    <ul class='nav flex-column'>
                      <li class='nav-item'>
                        <a class='nav-link active' href='<?php echo "../myprofile/index.php?k_cd=".$_REQUEST['k_cd']."&nms=".$_REQUEST['nms'].""; ?>'>
                          <img src='./img/loggedin.png' style='width:43px; height:43px;'></img>
                          <span style='margin-left:10px;'>My Profile</span>
                        </a>
                      </li>

                    </ul>
                    <ul class='nav flex-column'>
                      <li class='nav-item'>
                        <a class='nav-link active' href='<?php  echo "../candidates/index.php?k_cd=".$_REQUEST['k_cd']."&nms=".$_REQUEST['nms'].""; ?>'>
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
                        <span>Sent Invites </span>
                      </a>

                      <ul class='navbar-nav ml-auto'>    
                        <li class='nav-item dropdown'>
                          <a class='nav-link dropdown-toggle' href='#' data-toggle='dropdown'>
                            <span><?php  echo $_REQUEST['nms']; ?></span>
                            <span class='fa-stack'>
                              <img src='./img/loggedin.png' style='width:33px; height:33px;'></img>
                            </span>
                          </a>
                          <div class='dropdown-menu dropdown-menu-right'>
                            <a class='dropdown-item' href='<?php echo"/benchmark/user/007.php?k_cd=".$_REQUEST['k_cd']."&nms=".$_REQUEST['nms'].""; ?>'>Logout</a>
                          </div>
                        </li>
                      </ul>

                    </nav>
                    
                    <div class='container-fluid py-4'>
          
                          <div class='row'>
                        <input type='button' value='Go Back' onclick='history.back()' style="margin-left: 10px;"> 
                        <div style="width: 95%; height: 100%; overflow-y: scroll; margin-left: 15px;">
                          <table>
                            <thead>
                              <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Surname</th>
                                <th scope="col">Candidate Email</th>
                                <th scope="col">Job Position</th>
                                <th scope="col">Invitation Link</th>
                              </tr>
                            </thead>
                            <tbody>
                             
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

                                    $sql = "SELECT candidate_name,candidate_surname,candidate_email,job_title,assessment_link FROM candidate_assessment WHERE company_related LIKE '".$_REQUEST['k_cd']."%".    "' ";

                                      // echo $sql;

                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                      // output data of each row
                                      while($row = $result->fetch_assoc()) {
                                        echo  "<tr><td data-label='Account'><img src='img/loggedin.png' style='width:20px; height:20px;'></img>".$row['candidate_name']."</td>
                                               <td data-label='Account'>".$row['candidate_surname']."</td>
                                               <td data-label='Account'>".$row['candidate_email']."</td>
                                               <td data-label='Account'>".$row['job_title']."</td>
                                               <td data-label='Account'><input type='text' style='width:85%;' value='".$row['assessment_link']."' readonly> </td>
                                               ";
                                      }
                                    } else {
                                      echo "0 results";
                                    }
                                    $conn->close();
                              ?>                                
                              
                          <tbody>
                          </table>
                          <div id="documentess" style="width:100%; height: 600px;"></div> 

                       </div>  

                  </main>

                </div>
                <!-- partial -->
                  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
                <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/popper.min.js'></script>
                <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js'></script>
                <script  src='./scripts/script.js'></script>

                </body>
                </html>