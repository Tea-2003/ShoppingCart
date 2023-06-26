
	<?php $__env->startSection('content'); ?>
	<div class="inner-header">
	 <div class="container">
	  <div class="pull-left">
	   <h6 class="inner-title">Đăng kí</h6>
	  </div>
	  <div class="pull-right">
	   <div class="beta-breadcrumb">
	    <a href="index.html">Home</a> / <span>Đăng kí</span>
	   </div>
	  </div>
	  <div class="clearfix"></div>
	 </div>
	</div>
	<div class="container">
	 <div id="content">
	  <?php echo $__env->make('error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	  <form action="register" method="POST" class="beta-form-checkout">
	   <?php echo csrf_field(); ?>
	   <div class="row">
	    <div class="col-sm-3"></div>
	    <div class="col-sm-6">
	     <h4>Đăng kí</h4>
	     <div class="space20">&nbsp;</div>
	
	     <div class="form-block">
	      <label for="email">Email address*</label>
	      <input type="email" id="email" name="email" required>
	     </div>
	
	     <div class="form-block">
	      <label for="name">Fullname*</label>
	      <input type="text" id="name" name="name" required>
	     </div>
	
	     <div class="form-block">
	      <label for="password">Password*</label>
	      <input type="password" id="password" name="password" required>
	     </div>
	
	     <div class="form-block">
	      <label for="c_password">Re password*</label>
	      <input type="password" id="c_password" name="c_password" required>
	     </div>
	
	     <div class="form-block">
	      <button type="submit" class="btn btn-primary">Register</button>
	     </div>
	
	    </div>
	    <div class="col-sm-3"></div>
	   </div>
	  </form>
	  <p class="text-center">Nếu chưa có tài khoản vui lòng <a href="/register">Đăng ký</a>!</p>
	 </div> <!-- #content -->
	</div>
	<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LearnLaravel\WebsiteLaravel\resources\views/users/register.blade.php ENDPATH**/ ?>