<?php
  include_once 'validate_login.php';

  if(!isset($_SESSION)) {
    session_start();
  }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Heartnet's Bridal Boutique</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
	<style>
        body {
            width: 100%;
            height: 100%;
            min-height: 100%;
            font-family: Arial, Helvetica, sans-serif;
        }
        body::after {
            content: "";
            background: url(bg.jpg) center no-repeat;
            opacity: 0.4;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            position: absolute;
            z-index: -1; 
            background-size: cover;  
        }
        form {
            align-content: center;
            margin-top: 125px;
            background-color: transparent;
        }

        input[type=email], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin-bottom: 30px;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 25px;
        }

        input:focus {
            border: 1px solid rgba(0, 0, 255, 0.3);
            box-shadow: 0 0 10px #9ecaed;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            border-radius: 25px;
        }

        button:hover {
            opacity: 0.8;
        }

        img {
            width: 15%;
            height: auto;
        }

        .loginbtn {
            width: auto;
            padding: 10px 18px;
        }

        .imgcontainer {
            text-align: center;
        }

        .container {
          padding: 16px;
        }

        span.pass {
          float: right;
          padding-top: 16px;
        }

        @media screen and (max-width: 300px) {
          span.pass {
             display: block;
             float: none;
          }
          .loginbtn {
             width: 100%;
          }
        }
        h1 {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
<body>
    <?php include_once 'nav_bar.php'; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <h1>Please login to proceed</h1>
    <form action="#" method="POST">
        <div class="container">
            <label for="uname"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" name="email" required>
            <label for="pass"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="pass" required>
        </div>
        <div class="container">
            <button type="submit" class="loginbtn">Login</button>
        </div>
    </form>
</body>
</html>