
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
            $(document).ready(function(){
               
            $("input[type='button']").bind("click", function () {
                
              var nnn= $(this).attr("id");
              var nnn2=nnn.substring(3, 4);
             // var link="article.php?id=" + nnn2;
               location.href ="article.php?id=" + nnn2;
              // consol.log(nnn);
            });

        });

        </script> 

</head>
<body>
    <div id="foolHeigth">
            <?php require "blocks/header.php"?>

    <div class="center">

    <h2>Статті</h2>
            <?php for($i=0; $i<5; $i++):
            ?>
            <div class="articles">
               <div id="img"> <img src="img/<?php echo ($i+1); ?>.jpg" alt=""> </div>
                    <article>
                        <?php 
                            $ihrefs="articles/".($i+1).".php";
                            $fopen= fopen($ihrefs, "r+");
                            $content=fgets($fopen, 600);
                            fclose($fopen);
                            echo $content."...";                                                   
                        ?>
                    </article>

                <input type="button"  name="sub" id="but<?=($i+1)?>" value="Читати далі" />
            </div>
            <?php endfor; ?>

        </div>
      

    </div>

    <?php require "blocks/footer.php"?>



