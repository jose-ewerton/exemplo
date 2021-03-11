<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Formatacao/css/bootstrap.min.css" rel="stylesheet">
    <link href="../Formatacao/css/style.css" rel="stylesheet">

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
<script type="text/javascript" src="../Formatacao/js/bootstrap.min.js"></script>

</body>
</html>
