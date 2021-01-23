<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon" />
   
    <title>phpWebSite</title>

</head>
<body>
    <div id="foolHeigth">
    <?php require "blocks/header.php"?>

    <form id="form" action="check.php" method="post">
        <input type="email" name="email" placeholder="email">
        <textarea name="message" cols="20" rows="20" placeholder="Введіть ваше повідомлення"></textarea>
        <input type="submit" name="submit" value="відправити">
    </form>
   
      

    </div>

    <?php require "blocks/footer.php"?>



