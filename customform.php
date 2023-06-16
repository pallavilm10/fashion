<?php
                require 'header.php';
            ?>
<!DOCTYPE html>
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
  
  <title>FORM</title>
  <style>
    /* Style the form container */
    .form-container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    
    /* Style form labels */
    label {
      display: inline-block;
      width: 100px;
      text-align: right;
      margin-right: 10px;
    }
    
    /* Style form inputs */
    input[type="text"],
    input[type="email"],
    input[type="password"],
    textarea {
      width: 200px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-bottom: 10px;
    }
    
    /* Style the submit button */
    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    
    /* Style the submit button on hover */
    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>PLEASE FILL OUT THE FORM TO CUSTOMIZE YOUR DRESS</h2>
  
    <form method="post">
      <label for="SIZE">SIZE:<input type="number" id="SIZE" name="SIZE" required></label>
      <br>
      <label for="BUST">BUST SIZE:<input type="number" id="BUST" name="BUST" required></label>
      <br>
      <label for="LOWER WAIST SIZE">LOWER WAIST SIZE<input type="number" id="LOWER WAIST SIZE" name="LOWER WAIST SIZE" required></label>
      <br>
      <label for="UPPER WAIST SIZE">UPPER WAIST SIZE:<input type="number" id="UPPER WAIST SIZE" name="UPPER WAIST SIZE" required></input>
      </label><br>
      <label for="FRONT_LENGTH">FRONT LENGTH:<input type="number" id="FRONT LENGTH" name="FRONT LENGTH" required></input>
      </label><br>
      <label for="HIPS SIZE">HIPS SIZE:<input type="number" id="HIPS" name="HIPS" required></input>
      </label><br>
      <label for="SLEEVE LENGTH">SLEEVE LENGTH:<input type="number" id="SLEEVE LENGTH" name="SLEEVE LENGTH" required></input>
      </label><br>
      <input type="submit" value="Submit">
    </form>
  </div>
</body>

</html>