<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>FashionFever</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <style>
        body
        {
             background-image:url("img/intr");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
        }
    </style>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div class="container">
                   <center>
                   <div id="bannerContent">
                       <p style="color:#ff4874;font-family:'Brush Script MT';font-size:100px">FashionFever</>
                       <p style="font-family:'Lucida Console';font-size:30px;color:pink">live with fashion</p>
                       <a href="products.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>

               <footer class="footer"> 
               <div class="container">
               <center>
                <h2>Bring more fashion to your style with FashionFever</h2>
                   
               </div>
           </footer>