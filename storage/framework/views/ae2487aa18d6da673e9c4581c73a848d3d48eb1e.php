
	<?php $__env->startSection('content'); ?>
	<div class="container">
	 <div id="content">
	  <form method="post" class="beta-form-checkout">
	   <?php echo csrf_field(); ?>
	   <div class="row">
	    <div class="col-sm-6">
	     <div class="your-order">
	      <div class="your-order-head">
	       <h5>Đơn hàng của bạn</h5>
	      </div>
	      <div class="your-order-body">
	       <div class="your-order-item">
	        <div>
	         <?php if(Session::has('cart')): ?>
	         <?php $__currentLoopData = $product_cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	         <div class="media">
	          <img width="35%" src="source/image/product/<?php echo e($product['item']['image']); ?>" alt="" class="pull-left">
	          <div class="media-body">
	           <p class="font-large"><?php echo e($product['item']['name']); ?></p>
	           <span class="color-gray your-order-info">Số lượng: <?php echo e($product['qty']); ?></span>
	          </div>
	         </div>
	         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	         <?php endif; ?>
	         <!-- end one item -->
	        </div>
	        <div class="clearfix"></div>
	       </div>
	       <div class="your-order-item">
	        <div class="pull-left">
	         <p class="your-order-f18">Tổng:</p>
	        </div>
	        <div class="pull-right">
	         <h5 class="color-black"><?php if(Session::has('cart')): ?><?php echo e(number_format($totalPrice)); ?><?php else: ?> 0 <?php endif; ?> đồng
	         </h5>
	        </div>
	        <div class="clearfix"></div>
	       </div>
	      </div>
	      <div class="text-center">
	       <button type="submit" class="beta-btn primary">Đặt hàng <i class="fa fa-chevron-right"></i></button>
	      </div>
	     </div> <!-- .your-order -->
	    </div>
	   </div>
	  </form>
	 </div> <!-- #content -->
	</div> <!-- .container -->
	<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ShoppingCart\WebsiteLaravel\resources\views/page/checkout.blade.php ENDPATH**/ ?>