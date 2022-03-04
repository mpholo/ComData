<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo "ComData - $title";?></title>
        <link type="text/css" rel="stylesheet" href="style.css" />
        <script type="text/javascript" src="scripts/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="scripts/extras.js"></script>
         <script type="text/javascript" src="scripts/validation.js"></script>
    </head>
    <body>
       <?php
        include_once 'header.php';
        include_once 'menu.php';
        include_once "$page_content";
        include_once 'footer.php';
        ?>
       <input type="hidden" id="idmenu" value="<?php echo $_SERVER["SCRIPT_NAME"]; ?>"  />
    </body>
</html>
