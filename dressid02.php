<?php
    session_start();
    require 'check_if_added.php';
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
 th, td {
  padding-top: 10px;
  padding-bottom:13px;
  padding-left:15px;
  padding-right:15px;
font-size: 20px;

}
body
{
    background-image:url("data:image/jpeg;base64,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");

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
    
                <table>
                    <tr>
                        <td>
                            <div>

                            
                           
                        <img src="img/dress02.jpg" alt="dress02" width="400" height="600">
                       
                        </div>
                        </td>
                   <td>
              
                        
                
                        
            
                <div class="container">
                
                        <div>
                           
                                <div class="caption">
                                    <h3></h3>
                                    <p style=" font-size:20px;font-weight: bold" >Price: Rs. 4000.00</p>
                                </div>
                                <div class="caption">
                                    <p>discripyion to be filled</p>
                                    <br>
                                    <p><a href="siz1e.php">size chart</p>
                                    <script>
                                        function customizeForm(){
                                            window.location.href="customform.php";
                                        }
                                    </script>
                                    <div class="sizes mt-5">
                                       <h6 class="text-uppercase"> Select Size</h6> <label class="radio"> <input type="radio" name="size" id="s" value="S" checked> <span>S</span> </label> <label class="radio"> <input type="radio" name="size" id="m" value="M"> <span>M</span> </label> <label class="radio"> <input type="radio" name="size" id="l" value="L"> <span>L</span> </label> <label class="radio"> <input type="radio" name="size" id="xl" value="XL"> <span>XL</span> </label> <label class="radio"> <input type="radio" name="customize" id="customize" value="customize" onclick="customizeForm()"> <span>CUSTOMIZE</span> </label>
                                    </div>
                                    
                                    
                                </div>


                                <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                       else{
                                                ?>
                                                <a href="cart_add.php?id=2" class="btn  btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        
                                        ?>
                                    
                                          
                                    
                                </div>
                            
                        </div>
                
                    </div>

                   
    <br><br><br><br><br><br><br><br>
    </td>
    </table>
    <footer class="footer">
               <div class="container">
               <center>
               <p>contact us: +91 99099 88088</p>   
                 <p> email:fashionfever@gmail.com</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
