
<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title></title>
</head>
<style>
    html,body{
        scroll-behavior: smooth;
        /* overflow-x: hidden; */
        margin-top: 1px;
        
    }
</style>

<body>
   <?php
    // HEADER    
    require_once "header.php";

    // NAVIGATION BAR
    require_once "navigation.php";

    // TEMPORARY NAVIGATION
    require_once "temp-file-navigation.php";
   ?>

    <!--most popular section-->
    <div class="w3-container w3-center">
    
    <h3>Most Popular</h3>

    <div style="overflow-y: scroll; height:400px;">
    
    </div>

    </div>
    <br>
    <br>
    <br>
    <br>



    <!-- featured items section -->
    <div class="w3-container w3-center">
    
    <h3>Featured Items</h3>

    <div style="overflow-y: scroll; height:400px;">
    
    </div>

    </div>









    <?php 
    // FOOTER
     require_once "footer.php"
    ?>
</body>
</html>