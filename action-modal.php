<?php
require_once __DIR__ . '/texto.php';
$linha = $_POST['linha'];
$card = $_POST['card'];
$tipo = $_POST['tipo'];
//$linha = 0;
//$card = 1;
//$tipo = 'destaques';
if ($tipo = 'comum') { ?>
    <h4 class="card-title" id="card-title"> 
        <?php echo $arraynews[$linha][$card]['title']; ?>
    </h4>
    <img src="<?php echo $arraynews[$linha][$card]['image']; ?>">
    <p class="card-text" id="card-text"><?php echo $arraynews[$linha][$card]['text']; ?></p>
<?php } else {
    ?>
    <h4 class="card-title" id="card-title"> 
        <?php echo $arrayPosts['destaque'][$linha][$card]['title']; ?>
    </h4>
    <img src="<?php echo $arrayPosts['destaque'][$linha][$card]['image']; ?>">
    <p class="card-text" id="card-text"><?php echo $arrayPosts['destaque'][$linha][$card]['text']; ?></p>
<?php }
