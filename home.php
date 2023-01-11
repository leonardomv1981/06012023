<?php 
include "headerlogado.php";
require 'menulogado.php';
?>
<main>
    <div class="col-12">
        <div class="row">
            <div class="caixa2 col-6">            
                <p>Área Logada</p>
                <p>Bem vindo <strong><?= $_SESSION['nome'] ?></strong></p>
            </div>
            <div class="caixa2 col-6">
                <img src="https://media.istockphoto.com/id/1279981879/vector/restricted-area-authorized-personnel-only-caution-sign.jpg?s=612x612&w=0&k=20&c=IKsWiQZI7T9EtNMvw1sfQUQ3WXrdgg9USfnXtuZWpDU=">
            </div>
        </div>
    </div>
</main>
    <script src="js/custom.js"></script> 
<?php require 'footer.php'; ?> 

