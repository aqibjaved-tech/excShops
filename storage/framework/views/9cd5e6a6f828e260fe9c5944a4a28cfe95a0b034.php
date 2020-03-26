<!DOCTYPE html>
<html lang="en">
<?php echo $__env->make('template/frontend/themes/mazaar/includes/head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
      <!-- Site Loader -->
        <div class="site-loader">
            <div class="loader">
                <div class="loader-spinner"></div>
            </div>
        </div>
        <!-- End Site Loader -->
          <?php echo $__env->yieldContent('content'); ?>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\www\github\exc_app-develop\resources\views/template/frontend/themes/mazaar/layouts/default.blade.php ENDPATH**/ ?>