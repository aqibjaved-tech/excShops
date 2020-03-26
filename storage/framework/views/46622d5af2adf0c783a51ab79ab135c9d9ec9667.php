            <!--Products Slider-->
            <section class="sec-padding">
                <div class="container">
                    <div class="page-head">
                        <span class="page-sub-title">Trending Items</span>
                        <h2 class="page-title">Featured Product</h2>
                    </div>
                </div>
                <div class="container">
                    <div class="product-item-4 owl-carousel owl-theme product-slider">
                      <?php
                      //echo count($products);

                        ////print_r($products); ?>
                        <!--Item-->
                          <?php if(isset($products)): ?>
                              <?php $__currentLoopData = $products['products']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <div class="item">
                                      <div class="product-item">
                                          <!--Product Img-->
                                          <div class="product-item-img">
                                              <!--Image-->
                                              <a class="product-item-img-link">
                                                  
                                              </a>
                                              <!--Add to Link-->
                                              <div class="add-to-link">
                                                  <a class="btn btn--primary btn--sm">Select Option</a>
                                              </div>
                                              <!--Hover Icons-->
                                              <div class="hover-product-icon">
                                                  <div class="product-icon-btn-wrap">
                                                      <a href="#" data-toggle="tooltip" data-placement="left" title="Quick View"><i class="ti-search"></i></a>
                                                      <a href="#" data-toggle="tooltip" data-placement="left" title="Add to Whishlist"><i class="ti-heart"></i></a>
                                                      <a href="#" data-toggle="tooltip" data-placement="left" title="Add to Compare"><i class="ti-reload"></i></a>
                                                  </div>
                                              </div>
                                          </div>
                                          <!--Product Content-->
                                          <div class="product-item-content">
                                              <div class="tag"><a href="#">Minimal</a></div>
                                              <a href="product_detail.html" class="product-item-title"><span><?php echo e($product['name']); ?></span></a>
                                              <p class="product-item-price">
                                        <span class="product-price-amount">
                                            <!-- <del>
                                                <span class="product-price-currency-symbol">$</span>59.99
                                            </del> -->
                                            <ins>
                                                <span class="product-price-currency-symbol">$</span><?php echo e((isset($product['retailPrice']) ? $product['retailPrice'] : '')); ?>

                                            </ins>
                                        </span>
                                              </p>
                                              <div class="product-rating">
                                                  <div class="star-rating" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                      <span style="width: 60%"></span>
                                                  </div>
                                                  <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                              </div>
                                              <p class="product-description">
                                                  When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic remaining essentially unchanged.
                                              </p>
                                          </div>
                                      </div>
                                  </div>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <!--Item-->
                          <?php endif; ?>

                    </div>
                </div>
            </section>
            <!--Products Slider-->
<?php /**PATH /home/ahmajucr/public_html/resources/views/template/frontend/themes/mazaar/modules/products-with-slider.blade.php ENDPATH**/ ?>