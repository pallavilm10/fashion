
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
        <style>
            table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #DDD;
}

tr:hover {background-color: #D6EEEE;}
        </style>
    </head>

    <body>
    <?php
                require 'header.php';
            ?>
<h2>SIZE CHART</h2>

<table>
  <tr>
    <th>SIZE</th>
    <th>BUST(in)</th>
    <th>FRONT-LENGTH(in)</th>
    <th>WAIST(in)</th>
    <th>HIPS(in)</th>
    <th>ACROSS SHOULDERS(in)</th>
  </tr>
  <tr>
    <td>S</td>
    <td>32</td>
    <td>42</td>
    <td>26</td>
    <td>34</td>
    <td>14</td>
  </tr>
  <tr>
    <td>M</td>
    <td>34</td>
    <td>43</td>
    <td>28</td>
    <td>36</td>
    <td>15</td>
  </tr>
  <tr>
  <td>L</td>
    <td>36</td>
    <td>43</td>
    <td>30</td>
    <td>38</td>
    <td>15.5</td>
  </tr>
  <tr>
  <td>XL</td>
    <td>38</td>
    <td>44</td>
    <td>32</td>
    <td>40</td>
    <td>15.5</td>
  </tr>
</table>

</body>



    <br><br><br><br><br><br><br><br><br><br>
            <footer class="footer">
               <div class="container">
               <center>
                <P>LIVE IN FASHION</P>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>