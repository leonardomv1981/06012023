<?php 
$linhaExib = ceil($linhaExib);
if (!empty($arraynews[($linhaExib)])) {
    foreach($arraynews[$linhaExib] as $key => $value) {
        ?>
        <div class="caixa col-4">
            <h4 class="card-title"><?php echo $value["title"]; ?></h4>
            <p class="card-text"><?php echo  mb_strimwidth($value['text'], 0, 170, '...'); ?> </p>
            <!-- Large modal -->
            
            <button type="button" id="modal-button">Ler mais...</button>

        </div>
    <?php }
};