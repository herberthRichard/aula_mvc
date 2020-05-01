<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="author" content="rodrigo">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo DIRCSS . 'styles.css' ?>">
    <title><?php echo $this->getTitle(); ?></title>

    <?php echo $this->addHead(); ?>
</head>

<body>
    <div class="nav">
        <a href="<?php echo DIRPAGE . 'home' ?>"> Home</a>
        <a href="<?php echo DIRPAGE . 'contato' ?>"> Contato</a>
    </div>
    <div class="Header">
        <img class="teste" src="<?php echo DIRIMG . 'login.jpg' ?>">
        <?php
        $Breadcrumb = new Src\Classes\ClassBreadcrumb;
        $Breadcrumb->addBreadcrumb();
        ?>
        <hr>
        <?php echo $this->addHeader(); ?>
        Tel:(XX) XXXXXXXX<br>
    </div>


    <div class="Main">
        <?php echo $this->addMain(); ?>
    </div>


    <div class="Footer">
        2019-- todos os direitos reservados
        <?php echo $this->addFooter(); ?>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>