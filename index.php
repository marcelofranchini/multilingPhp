<?php
    include "config.php";

?>
<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Site Teste  </title>
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">

    <style type="text/css">
        .footer{
            left: 0;
            position: fixed;
            bottom: 0;
            text-align: center;
            color: white;
            width: 100%;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="#"><?php echo $lang['Inicio']?></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><?php echo $lang['Preço']?></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><?php echo $lang['Contato']?></a>
        </li>

        </ul>
    </nav>
    <div class="container" style="margin-top: 100px">
        <div class="row justify-content-center">
            <div class="col-md-6 col-md-offset-3 text-center">
                <h1><?php echo $lang['title']?></h1>
                <p>
                    <?php echo $lang['description']?>
                </p>
            </div>
        </div>
    </div>

    <div class="footer bg-dark">
        <a href="index.php?lang=pt" ><?php echo $lang['lang_pt']?>
        |<a href="index.php?lang=en" ><?php echo $lang['lang_en']?>
        |<a href="index.php?lang=es" ><?php echo $lang['lang_es']?>
    </div>
</body>
</html>