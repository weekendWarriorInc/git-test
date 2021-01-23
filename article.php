<?php
$nId=$_GET["id"];
//print_r($nId);



?>
<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon" />
   
    <title>phpWebSite</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

        <script type="text/javascript">
          

        </script> 

</head>
<body>
    <div id="foolHeigth">
            <?php require "blocks/header.php"
   
            
            ?>

    <div class="center">

    <h2>Статті</h2>
        <article>
           <?php require "articles/".$nId.".php"?>
        </article>
        </div>
      

    </div>

    <?php require "blocks/footer.php"?>



