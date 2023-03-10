<?php 
require 'header.php';
require 'menu.php'; 
require 'texto.php';
?>
    <main>
        <div class="col-12">
            <div class="row" id="posts">
            <div class="col-md-12">
                    <h2>Destaques</h2>
                </div>
                <?php $i = 0;
                foreach($arrayPosts['destaque'] as $key => $value) { ?>
                    <div class="caixa col-4">
                        <img src="<?php echo $value['image']; ?>">
                        <p class="card-text"><?php echo  mb_strimwidth($value['text'], 0, 150, '...'); ?> </p>
                        <!-- Large modal -->
                        <input class="tipo" type="hidden" value="destaques">
                        <input class="linha" type="hidden" value="0">
                        <input class="card" type="hidden" value="<?php echo $i; ?>">
                        <button type="button" id="modal-button" class="modal-button btn btn-light" linha='3' card='2'>Ler mais...</button>
                    </div>
                <?php $i += 1;
                } ?>
                
                <div class="col-md-12">     
                    <h2>Comum</h2>
                </div>  
                <?php 
                $linhaExib = 0;
                require_once __DIR__ . '/posts-comum.php';
                ?>
                 
            </div>
            <div class="text-center">
            <button type="button" class="btn btn-primary" id="feed-button" name="feed-button">carregar mais</button>
            </div>
        </div>
    </main>
<?php require 'footer.php'; ?> 