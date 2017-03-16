<!doctype html>
<meta charset="utf-8">
<html>
<head>
    <title>Test site</title>
    <?php
    require "php/blocks.php";
    ?>
</head>
<body>
<?php
createNavigation("HOME SERVICES ABOUT CONTACT","HOME","./res/img/logo.jpg");
?>
<div class="page">
    <br/>
    <div class="panel-translucent">
        <br/>
        <h1 align="center">Your business means a lot to us!!!</h1>
        <h3 align="center">EXPERIENCE THE PREMIUM QUALITY OF OUR SERVICES FOR YOURSELF!!!</h3>
        <div align="center"><a href="contact.php"><button>Contact us!!!</button></a></div>
        <br/>
    </div>
    <br/>
</div>
<?php
createFooter();
?>
</body>
</html>