<?php 
$linhaExib = ceil($linhaExib);
if (!empty($arraynews[($linhaExib)])) {
    $i = 0;
    foreach($arraynews[$linhaExib] as $key => $value) {
        ?>
        <div class="caixa col-4">
            <h4 class="card-title"><?php echo $value["title"]; ?></h4>
            <p class="card-text"><?php echo  mb_strimwidth($value['text'], 0, 170, '...'); ?> </p>
            <!-- Large modal -->
            <input class="tipo" type="hidden" value="comum">
            <input class="linha" type="hidden" value="<?php echo $linhaExib; ?>">
            <input class="card" type="hidden" value="<?php echo $i; ?>">
            <button type="button" id="modal-button" class="modal-button btn btn-light">Ler mais...</button>

        </div>
    <?php $i += 1;
    }
    
};