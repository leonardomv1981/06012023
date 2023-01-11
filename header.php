<?php session_start(); 
    if (isset($_SESSION['logado']) &&  $_SESSION['logado'] == 'SIM') { 
	    header("Location: home.php");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css?<?php echo time() ?>">    
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" ></script>
    <meta charset="UTF-8">
    <title>Título </title>
</head>
    <body>        
        <div class="container">