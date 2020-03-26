            <div class="widget">
                <h4 class="widget-title">Filter by Color</h4>
                <div class="widget-content">
                    <ul>
                      <?php $__currentLoopData = $products['filters']['colors']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <li><a href="<?php echo e(url('product-filter?type=color&filter='.$color)); ?>"><?php echo e($color); ?></a></li>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </ul>
                </div>
            </div>
<?php /**PATH /home/ahmajucr/public_html/resources/views/template/frontend/themes/mazaar/modules/product-filter-color-widget.blade.php ENDPATH**/ ?>