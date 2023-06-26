

<?php $__env->startSection('content'); ?>
<div class="inner-header">
  <div class="container">
    <div class="pull-left">
      <h6 class="inner-title">Sản phẩm</h6>
    </div>
    <div class="pull-right">
      <div class="beta-breadcrumb font-large">
        <a href="index.html">Home</a> / <span>Sản phẩm</span>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
<div class="container">
  <div id="content" class="space-top-none">
    <div class="main-content">
      <div class="space60">&nbsp;</div>
      <div class="row">
        <div class="col-sm-3">
          <ul class="aside-menu">
            <?php $__currentLoopData = $type_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><a href="/type/<?php echo e($l->id); ?>"><?php echo e($l->name); ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
        <div class="col-sm-9">
          <div class="beta-products-list">
            <?php $__currentLoopData = $type_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if( $sp_theoloai[0]->id_type == $loai->id ): ?>
            <h4 style="text-align:center;"><?php echo e($loai->name); ?></h4>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <div class="beta-products-details">
              <p class="pull-left"><?php echo e(count($sp_theoloai)); ?> styles found</p>
              <div class="clearfix"></div>
            </div>

            <div class="row">
              <?php $__currentLoopData = $sp_theoloai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-sm-4">
                <div class="single-item">
                  <div class="single-item-header">
                    <a href=""><img width="200" height="200" src="/source/image/product/<?php echo e($sp->image); ?>" alt=""></a>
                  </div>
                  <div class="single-item-body">
                    <p class="single-item-title"><?php echo e($sp->name); ?></p>
                    <p class="single-item-price" style="text-align:left;font-size: 15px;">
                      <?php if($sp->promotion_price==0): ?>
                      <span class="flash-sale"><?php echo e(number_format($sp->unit_price)); ?> Đồng</span>
                      <?php else: ?>
                      <span class="flash-del"><?php echo e(number_format($sp->unit_price)); ?> Đồng</span>
                      <span class="flash-sale"><?php echo e(number_format($sp->promotion_price)); ?> Đồng</span>
                      <?php endif; ?>
                    </p>
                  </div>
                  <div class="single-item-caption">
                    <a class="add-to-cart pull-left" href="#"><i class="fa fa-shopping-cart"></i></a>
                    <a class="add-to-cart pull-left" href="#"><i class="fa fa-heart"></i></a>
                    <a class="beta-btn primary" href="/type/<?php echo e($sp->id); ?>">Details <i class="fa fa-chevron-right"></i></a>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			  </div>
          </div> <!-- .beta-products-list -->

          <div class="space50">&nbsp;</div>

          <div class="beta-products-list">
            <h4>Sản phẩm khác</h4>
            <div class="beta-products-details">
              <p class="pull-left"><?php echo e(count($sp_khac)); ?> found</p>
              <div class="clearfix"></div>
            </div>
            <div class="row">
              <?php $__currentLoopData = $sp_khac; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $khac): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-sm-3">
                <div class="single-item">
                  <div class="single-item-header">
                    <a href=""><img width="200" height="200" src="/source/image/product/<?php echo e($khac->image); ?>" alt=""></a>
                  </div>
                  <?php if($khac->promotion_price != 0): ?>
                  <div class="ribbon-wrapper">
                    <div class="ribbon sale">Sale</div>
                  </div>
                  <?php endif; ?>
                  <div class="single-item-body">
                    <p class="single-item-title"><?php echo e($khac->name); ?></p>
                    <p class="single-item-price" style="text-align:left;font-size: 15px;">
                      <?php if($khac->promotion_price == 0): ?>
                      <span class="flash-sale"><?php echo e(number_format($khac->unit_price)); ?> Đồng</span>
                      <?php else: ?>
                      <span class="flash-del"><?php echo e(number_format($khac->unit_price)); ?> Đồng</span>
                      <span class="flash-sale"><?php echo e(number_format($khac->promotion_price)); ?> Đồng</span>
                      <?php endif; ?>
                    </p>
                  </div>
                  <div class="single-item-caption">
                    <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                    <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="row">
              <?php echo e($sp_khac->links("pagination::bootstrap-4")); ?>

            </div>
            <div class="space40">&nbsp;</div>
          </div> <!-- .beta-products-list -->
        </div>
      </div> <!-- end section with sidebar and main content -->
    </div> <!-- .main-content -->
  </div> <!-- #content -->
</div> <!-- .container -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\WebsiteLaravel\resources\views/page/loai_sanpham.blade.php ENDPATH**/ ?>