            <!--Widget-->
            <div class="widget">
                <!--Title-->
                <h4 class="widget-title">Shop Categories</h4>
                <!--End Title-->
                <!-- Content -->
                <div class="widget-content widget_nav_menu">
                    <ul class="menu">
                      <?php $__currentLoopData = $data['categories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="menu-item"><a href="#"><?php echo e($category['name']); ?></a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="#">New In</a>
                                    <ul class="sub-menu">
                                      <?php $__currentLoopData = $category['associatedCategories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $associatedCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <li class="menu-item"><a href="/<?php echo strtolower($associatedCategory) ?>"><?php echo e($associatedCategory); ?></a></li>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <!-- End Content -->
            </div>
            <!--End Widget-->
<?php /**PATH C:\xampp\htdocs\www\github\exc_app-develop\resources\views/template/frontend/themes/mazaar/modules/product-category-widget.blade.php ENDPATH**/ ?>