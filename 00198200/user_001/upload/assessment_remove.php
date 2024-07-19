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

    $candidate_email = $_POST['email'];
    $company_related = $_POST['k_cd'];
    $username = $_POST['nms'];

 
    // sql to delete a record
    $sql = "DELETE FROM candidate_assessment WHERE candidate_email='".$candidate_email."' AND company_related='".$company_related."'";

    // echo $sql;

    if ($conn->query($sql) === TRUE)
     {
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
                        <a class='nav-link active' href='myprofile/index.php?k_cd=".$company_related."&nms=".$username." '>
                          <img src='./img/loggedin.png' style='width:43px; height:43px;'></img>
                          <span style='margin-left:10px;'>My Profile</span>
                        </a>
                      </li>

                    </ul>
                    <ul class='nav flex-column'>
                      <li class='nav-item'>
                        <a class='nav-link active' href='candidates/index.php?k_cd=".$company_related."&nms=".$username." '>
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
                            <span>".$username."</span>
                            <span class='fa-stack'>
                              <img src='./img/loggedin.png' style='width:33px; height:33px;'></img>
                            </span>
                          </a>
                          <div class='dropdown-menu dropdown-menu-right'>
                            <a class='dropdown-item' href='/benchmark/user/007.php?k_cd=".$company_related."&nms=".$username."' '>Logout</a>
                          </div>
                        </li>
                      </ul>
                    </nav>

                    <div class='container-fluid py-4'>
                      <br></br>
                
                            <!-- Content Column -->                        
                              <br></br>
                  <div class='row'>
                    <div class='modalbox success col-sm-8 col-md-6 col-lg-5 center animate'>
                      <div class='icon' style='background-color:#18c4ff;'>
                  <span class='glyphicon glyphicon-ok' ><img src='img/confirm.png' style='width: 60%; height: 60px;'></span>
                      </div>
                      <h1>Success!</h1>
                      <p>The Assessment Invitation has Been Removed Successfully!</p>
                    </div>

                  </div>
                </div>
                <br></br>

                             <center> <a href='/benchmark/00198200/main/dashboard.php?k_cd=".$company_related."&nms=".$username."'   style='margin-left:10px; width: 60%; background-color: #18c4ff; color: white; padding: 5px 10px; margin: 8px 0; border: none; border-radius: 50px; cursor: pointer;'>GO BACK</a></center>
                             <br></br>
                      
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
        echo "0 results";
    }

$conn->close();
?>
