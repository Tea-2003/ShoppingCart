
<?php $__env->startSection('content'); ?>
    <div class="rev-slider">
        <div class="fullwidthbanner-container">
            <div class="fullwidthbanner">
                <div class="bannercontainer">
                    <div>
                        <div class="banner">
                            <ul>
                                <?php $__currentLoopData = $slide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li data-transition="boxfade" data-slotamount="20" class="active-revslide"
                                        style="width: 100%; height: 100%; overflow: hidden; z-index: 18;">
                                        <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined"
                                            data-zoomstart="undefined" data-zoomend="undefined"
                                            data-rotationstart="undefined" data-rotationend="undefined"
                                            data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined"
                                            data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined"
                                            data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                                            <img class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
                                                data-bgposition="center center" data-bgrepeat="no-repeat"
                                                data-lazydone="undefined" src="source/image/slide/<?php echo e($sl->image); ?>"
                                                style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; 
								 background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                            </img>
                                        </div>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>

                    <div class="tp-bannertimer"></div>
                </div>
            </div>
        </div>
    </div>
    <!--slider-->
    </div>

    <div class="container">
        <div id="content" class="space-top-none">
            <div class="main-content">
                <div class="space60">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="beta-products-list">
                            <h4>New Products</h4>
                            <div class="beta-products-details">

                                <div class="clearfix"></div>
                            </div>

                            <div class="row">
                                <?php $__currentLoopData = $new_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            <?php if($new->promition_price != 0): ?>
                                                <div class="ribbon-wraper">
                                                    <div class="ribbon sale">I love you</div>
                                                </div>
                                            <?php endif; ?>
                                            <div class="single-item-header">
                                                <a href="detail/<?php echo e($new->id); ?>"><img
                                                        src="source/image/product/<?php echo e($new->image); ?>" alt=""></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title"><?php echo e($new->name); ?></p>
                                                <p class="single-item-price">
                                                    <?php if($new->promotion_price != 0): ?>
                                                        <span class="flash-sale"><?php echo e($new->unit_price); ?> đồng</span>
                                                    <?php else: ?>
                                                        <span class="flash-del"><?php echo e($new->unit_price); ?> đồng</span>
                                                        <span class="flash-sale"><?php echo e($new->promotion_price); ?> đồng</span>
                                                    <?php endif; ?>
                                                </p>
                                            </div>
                                            <div cflass="single-item-caption">
                                                <a class="add-to-cart pull-left"
                                                    href="<?php echo e(route('themgiohang', $new->id)); ?>"><i
                                                        class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="detail/<?php echo e($new->id); ?>">Details <i
                                                        class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div> <!-- .beta-products-list -->

                            <div class="space50">&nbsp;</div>

                            <div class="beta-products-list">
                                <h4>Top Products</h4>
                                <div class="beta-products-details">
                                    <div class="clearfix"></div>
                                </div>
                                <div class="row">
                                    <?php $__currentLoopData = $sanpham_khuyenmai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spkm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-sm-3">
                                            <div class="single-item">
                                                <div class="single-item-header">
                                                    <a href="product.html"><img
                                                            src="source/image/product/<?php echo e($new->image); ?>"
                                                            alt=""></a>
                                                </div>
                                                <div class="single-item-body">
                                                    <p class="single-item-title"><?php echo e($spkm->name); ?></p>
                                                    <p class="single-item-price">
                                                        <span class="flash-sale"><?php echo e($spkm->unit_price); ?> đồng</span>
                                                        <span class="flash-sale"><?php echo e($spkm->promotion_price); ?> đồng</span>
                                                    </p>
                                                </div>
                                                <div cflass="single-item-caption">
                                                    <a class="add-to-cart pull-left" href="shopping_cart.html"><i
                                                            class="fa fa-shopping-cart"></i></a>
                                                    <a class="beta-btn primary" href="detail/<?php echo e($new->id); ?>">Details
                                                        <i class="fa fa-chevron-right"></i></a>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div> <!-- .beta-products-list -->
                        </div>
                    </div> <!-- end section with sidebar and main content -->


                </div> <!-- .main-content -->
            </div> <!-- #content -->
        </div> <!-- .container -->
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ShoppingCart\WebsiteLaravel\resources\views/page/trangchu.blade.php ENDPATH**/ ?>