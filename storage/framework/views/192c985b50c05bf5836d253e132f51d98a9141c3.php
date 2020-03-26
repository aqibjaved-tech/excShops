<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('template/frontend/themes/mazaar/includes/newsletter-popup/newsletter-popup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('template/frontend/themes/mazaar/includes/sidebar-cart/sidebar-cart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('template/frontend/themes/mazaar/includes/sidebar-wishlist/sidebar-wishlist', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="site-wraper">
    <?php echo $__env->make('template/frontend/themes/mazaar/includes/topbar/topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('template/frontend/themes/mazaar/includes/header/header', ['data' => $data], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="page-contaiter">
          <?php echo $__env->make('template/frontend/themes/mazaar/modules/hero-slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <?php echo $__env->make('template/frontend/themes/mazaar/modules/category', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <?php echo $__env->make('template/frontend/themes/mazaar/modules/products-with-slider',['products'=>$products], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <?php echo $__env->make('template/frontend/themes/mazaar/modules/deal-counter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <?php echo $__env->make('template/frontend/themes/mazaar/modules/products', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <?php echo $__env->make('template/frontend/themes/mazaar/modules/testimonials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <?php echo $__env->make('template/frontend/themes/mazaar/modules/blog-slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <?php echo $__env->make('template/frontend/themes/mazaar/modules/brand-logo-slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <?php echo $__env->make('template/frontend/themes/mazaar/includes/footer/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template/frontend/themes/mazaar/layouts/default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\exc\resources\views//template/frontend/themes/mazaar/pages/index.blade.php ENDPATH**/ ?>