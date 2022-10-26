<?php if(isset($pro)) : ?>
    <h1><?= $pro->nombre ?></h1>
    <div id="detail-product">
        <div class="image">
            <?php if($pro->imagen != null) : ?>
                <img src="<?=base_url?>uploads/images/<?=$pro->imagen?>" >
            <?php else : ?>
                <img src="<?=base_url?>assets/img/camiseta.png" alt="">
            <?php endif ; ?>    
        </div>
                
        <div class="data">
            <p class="price"><?=$pro->precio?>$</p>
            <p class="description"><?=$pro->descripcion?></p>
            <a href="" class="button">Comprar</a>
        </div>
    </div>

<?php else: ?>
    <h1>El producto no existe</h1>
<?php endif; ?>