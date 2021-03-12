<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Formatacao/css/bootstrap.min.css" rel="stylesheet">
    <link href="Formatacao/css/style.css" rel="stylesheet">

    <title>Projeto MVC</title>
</head>
<body>
 <!-- Header.php -->   
 <?php require_once "header.php"; ?>

<?php

 // Carregar dinâmicamente as Views
 $this->carregarViewNoTemplate($nomeView,$dadosModel); 
 
?>


<!-- Footer.php -->

<?php require_once "footer.php"; ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script>window.jQuery || document.write('<script src="/docs/4.6/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<script type="text/javascript" src="Formatacao/js/bootstrap.min.js"></script>

</body>
</html>
