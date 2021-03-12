<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Formatacao/css/main.css" rel="stylesheet">

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



    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script type="text/javascript" src="Formatacao/js/bootstrap.min.js"></script>
    

</body>
</html>
