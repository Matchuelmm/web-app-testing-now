<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Message Info</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <style>
    body 
    {
      font-family: 'Source Sans Pro', 'Helvetica Neue', Arial, sans-serif;
      color: #34495e;
      -webkit-font-smoothing: antialiased;
      line-height: 1.6em;
    }

    p {
      margin: 0;
    }

    .notice {
      position: relative;
      margin: 1em;
      background: #F9F9F9;
      padding: 1em 1em 1em 2em;
      border-left: 4px solid #DDD;
      box-shadow: 0 1px 1px rgba(0, 0, 0, 0.125);
    }

    .notice:before {
      position: absolute;
      top: 50%;
      margin-top: -17px;
      left: -17px;
      background-color: #DDD;
      color: #FFF;
      width: 30px;
      height: 30px;
      border-radius: 100%;
      text-align: center;
      line-height: 30px;
      font-weight: bold;
      font-family: Georgia;
      text-shadow: 1px 1px rgba(0, 0, 0, 0.5);
    }

    .info {
      border-color: #0074D9;
    }

    .info:before {
      content: "i";
      background-color: #0074D9;
    }

    .success {
      border-color: #2ECC40;
    }

    .success:before {
      content: "√";
      background-color: #2ECC40;
    }

    .warning {
      border-color: #FFDC00;
    }

    .warning:before {
      content: "!";
      background-color: #FFDC00;
    }

    .error {
      border-color: #FF4136;
      margin-left: 200px;
      margin-top: 120px;
    }

    .error:before {
      content: "X";
      background-color: #FF4136;
    }
</style>

</head>
<body>
<!-- partial:index.partial.html -->


<div class="notice error"><p><?php echo "".$_REQUEST['message']; ?></p></div>
<!-- partial -->
  
</body>
</html>
