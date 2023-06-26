<div id="header">
    <div class="header-top">
        <div class="container">
            <div class="pull-left auto-width-left">
                <ul class="top-menu menu-beta l-inline">
                    <li><a href=""><i class="fa fa-home"></i> 90B Lê Thị Riêng, Lê Hữu Trác, Quận Sơn Trà</a></li>
                    <li><a href=""><i class="fa fa-phone"></i> 0913 136 778</a></li>
                </ul>
            </div>
            <div class="pull-right auto-width-right">
                <ul class="top-details menu-beta l-inline">
                    <?php if(Session::has('user')): ?>
                        <li><a href="logout">
                                <ion-icon name="log-out-outline"></ion-icon><?php echo e(Session('user')->name); ?>

                            </a></li>
                    <?php else: ?>
                        <li><a href="register">Đăng kí</a></li>
                        <li><a href="login">Đăng nhập</a></li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div> <!-- .container -->
    </div> <!-- .header-top -->
    <div class="header-body">
        <div class="container beta-relative">
            <div class="pull-left">
                <a href="index.html" id="logo"><img src="source/assets/dest/images/logo-cake.png"
                        width="200px"alt=""></a>
            </div>
            <div class="pull-right beta-components space-left ov">
                <div class="space10">&nbsp;</div>
                <div class="beta-comp">
                    <form role="search" method="get" id="searchform" action="/">
                        <input type="text" value="" name="s" id="s"
                            placeholder="Nhập từ khóa..." />
                        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
                    </form>
                </div>

                <div class="beta-comp">
                    <?php if(Session::has('cart')): ?>
                        <div class="cart">
                            <div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng (<?php if(Session::has('cart')): ?>
                                    <?php echo e(Session('cart')->totalQty); ?>

                                <?php else: ?>
                                    Trong
                                <?php endif; ?>) <i class="fa fa-chevron-down"></i></div>
                            <div class="beta-dropdown cart-body">

                                <?php $__currentLoopData = $product_cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="cart-item" id="cart-item<?php echo e($products['item']['id']); ?>">
                                        <a class="cart-item-delete" href="del-cart/<?php echo e($products['item']['id']); ?>"
                                            value="<?php echo e($products['item']['id']); ?>" soluong="<?php echo e($products['qty']); ?>"><i
                                                class="fa fa-times"></i></a>
                                        <div class="media">
                                            <a class="pull-left" href="#"><img
                                                    src="source/image/product/<?php echo e($products['item']['image']); ?>"
                                                    alt=""></a>
                                            <div class="media-body">
                                                <span class="cart-item-title"><?php echo e($products['item']['name']); ?></span>
                                                <span
                                                    class="cart-item-amount"><?php echo e($products['item']['qty']); ?>*<span><?php echo e($products['item']['unit_price']); ?></span></span>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <div class="cart-caption">

                                    <div class="cart-total text-right">Tổng tiền: <span
                                            class="cart-total-value"><?php echo e(number_format(Session('cart')->totalPrice)); ?>

                                            đồng</span></div>
                                    <div class="clearfix"></div>

                                    <div class="center">
                                        <div class="space10">&nbsp;</div>
                                        <a href="checkout" class="beta-btn primary text-center">Đặt hàng <i
                                                class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--.cart-->
                    <?php endif; ?>
                </div>
            </div>
            <div class="clearfix"></div>
        </div> <!-- .container -->
    </div> <!-- .header-body -->
    <div class="header-bottom" style="background-color: #0277b8;">
        <div class="container">
            <a class="visible-xs beta-menu-toggle pull-right" href="#"><span
                    class='beta-menu-toggle-text'>Menu</span>
                <i class="fa fa-bars"></i></a>
            <div class="visible-xs clearfix"></div>
            <nav class="main-menu">
                <ul class="l-inline ov">
                    <li><a href="<?php echo e(url('/page')); ?>">Trang chủ</a></li>
                    <li><a href="#">Loại sản phẩm</a>
                        <ul class="sub-menu">
                            <?php $__currentLoopData = $loai_sp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e(url('/loaisanpham', $loai->id)); ?>"><?php echo e($loai->name); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </li>
                    <li><a href="<?php echo e(url('/gioithieu')); ?>">Giới thiệu</a></li>
                    <li><a href="<?php echo e(url('/lienhe')); ?>">Liên hệ</a></li>
                </ul>
                <div class="clearfix"></div>
            </nav>
        </div> <!-- .container -->
    </div> <!-- .header-bottom -->
</div> <!-- #header -->
<?php /**PATH C:\xampp\htdocs\ShoppingCart\WebsiteLaravel\resources\views/header.blade.php ENDPATH**/ ?>