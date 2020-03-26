<!-- Cart Sidebar Menu -->
<div class="wish-sidebar-menu">
    <div class="cart-sidebar-wrap hheh">
        <!--Cart sidebar Header-->

        <div class="cart-sidebar-header">
            <h4 class="cart-sidebar-title">Shopping Whishlist</h4>
            <span class="close-cart-sidebar"><i class="ti-close"></i></span>
        </div>

        <?php 
        if($wishlist !== false){
            
            if(count($wishlist) > 0) {?>
            <div class="cart-sidebar-content">
                <ul class="cart-widget-product">
                    <!--Item-->
                    <?php
                    foreach ($wishlist as $key=>$final_value)
                    {
                    // echo $final_data['name'][$key].'<br>';
    
                    ?>
                    <li class="cart-product-item">
                        <a class="cart-product-image" href="<?php echo e(url('product/'.$final_value['id'])); ?>">
                            <img src="<?php echo $final_value['thumbnails'][0]; ?>" alt="<?php echo $final_value['name']; ?>" />
                        </a>
                        <div class="cart-product-content">
                            <input type="hidden" value="<?php echo e($final_value['id']); ?>" name="pid">
                            <a class="cart-product-link" href="<?php echo e(url('product/'.$final_value['id'])); ?>"> <?php echo e($final_value['name']); ?></a>
                            <span class="cart-product-quantity"> <span class="cart-product-amount">$<?php echo e($final_value['retailPrice']); ?></span></span>
                        </div>
                    </li>
                <?php
                } ?>
    
                <!-- Item-->
    
                </ul>
            <?php } else{
                echo "<div class='cart-sidebar-content'>Cart is empty</div>";
            }  
        }
        ?>

    </div>
</div>
</div>
<!-- End Cart Sidebar Menu -->

<!-- Shop Overlay -->
<div class="wish-overlay"></div>
<!-- End Shop Overlay -->
<?php /**PATH /home/ahmajucr/public_html/resources/views/template/frontend/themes/mazaar/includes/sidebar-wishlist/sidebar-wishlist.blade.php ENDPATH**/ ?>