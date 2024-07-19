<!DOCTYPE html>
<html lang="en" >
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <title>Benchmark Portal</title>
  <link rel="stylesheet" href="./css/style.css">

    <!-- Favicons -->
  <link href="../assets/img/benchmark.png" rel="icon">
  <link href="../assets/img/benchmark.png" rel="apple-touch-icon">

</head>



  <!-- Favicons -->
  <link href="assets/img/benchmark.png" rel="icon">
  <link href="assets/img/benchmark.png" rel="apple-touch-icon">
<body>
<!-- partial:index.partial.html -->
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login page</title>
  <link rel="stylesheet" href="./css/style.css" />
  <script src="https://kit.fontawesome.com/7b39153ed3.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container" id="container">

    <!-- sign Up form section start-->
    <div class="form sign_up">
            <form action="user_0001/" method="post">
                <h1>Create Account</h1>
                <span>Enter your deatils below to register account</span>
                <input type="text" placeholder="Name" name="name">
                <input type="text" placeholder="Surname" name="surname">
                <input type="text" placeholder="Mobile Number" name="mobile">
                <input type="email" placeholder="Email" name="email">
                <input type="password" placeholder="Password" name="password">
                <input type="password" placeholder="Re Enter Password" name="password2">
                <input type="text" placeholder="Company Name" name="company">
                <button>Sign Up</button>
            </form>
    </div>
    <!-- sign Up form section end-->

    <!-- sign in form section start-->
    <div class="form sign_in">
            <form action="user_001/" method="post">
                <h1>Sign In</h1>
                <div class="social-icons">
<!--                <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>  -->
                </div>
                <span>Enter your email and password</span>
                <input type="email" placeholder="Email" name="email">
                <input type="password" placeholder="Password" name="password">
                <a href="#">→ Forget Your Password? ←</a>
                <button>Sign In</button>
            </form>
    </div>
    <!-- sign in form section end-->

    <!-- overlay section start-->
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-pannel overlay-left">
          <h1>Hello, Recruiter/Candidate!</h1>
          <p>Register with your personal details to create your recruiter profile</p>
          <button id="signIn" class="overBtn">SignIn</button>
        </div>
        <div class="overlay-pannel overlay-right">
          <h1>Welcome Back!</h1>
          <p>Enter your personal details to Login to the site</p>
          <button id="signUp" class="overBtn">Sign Up</button>
        </div>
      </div>
    </div>
    <!-- overlay section start-->
  </div>

</body>

</html>
<!-- partial -->
  <script  src="./js/script.js"></script>

</body>
</html>
