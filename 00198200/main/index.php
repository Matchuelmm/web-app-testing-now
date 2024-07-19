<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main Dashboard</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="dashboard-layout">

  <aside id="sidebar" class="sidebar bg-primary" >
    <h3 class="sidebar-heading">
      <span></span>
    </h3>
    <br></br>

    <ul class="nav flex-column">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active" href="#">
          <i class="fas fa-id-card"></i>
          <span>Resumes/Cv's</span>
        </a>
      </li>

    </ul>
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active" href="#">
          <i class="fas fa-clipboard-list"></i>
          <span>Assessments</span>
        </a>
      </li>

    </ul>
    </ul>

  </aside>

  <main id="main" class="main">
    <nav class="navbar navbar-expand navbar-light bg-light shadow">

      <button id="sidebarToggler" type="button" class="btn btn-outline-dark mr-3 d-md-none">
        <i class="fas fa-bars"></i>
      </button>

      <a class="navbar-brand" href="#">
        <i class="fas fa-laugh-wink"></i>
        <span>My Dashboard</span>
      </a>

      <ul class="navbar-nav ml-auto">    
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
            <span><?php echo "".$_REQUEST['nm'] ?></span>
            <span class="fa-stack">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fas fa-user fa-stack-1x fa-inverse"></i>
            </span>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="/benchmark/">Logout</a>
          </div>
        </li>
      </ul>

    </nav>
    
    
    <div class="container-fluid py-4">
      <br></br>

          <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-muted text-uppercase mb-1">Resumes / CV's</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">84</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-tie fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

 

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-muted text-uppercase mb-1">Assessments</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">100</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-file-invoice fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
                        <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-muted text-uppercase mb-1">Messages</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">140</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

       

     

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-12 mb-4">

 
              <div class="row">
<!--           <div class="col-lg-3 mb-4">
                  <div class="card bg-primary text-white shadow">
                    <div class="card-body">
                      Manage Resume's
                    </div>
                  </div>
                </div> -->
<!--                 <div class="col-lg-6 mb-4">
                  <div class="card bg-primary text-white shadow">
                    <div class="card-body">
                      Manage Assessments
                    </div>
                  </div>
                </div> -->


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
<script  src="./script.js"></script>

</body>
</html>
