																
<?php $__env->startSection('content'); ?>																
<div class="inner-header">																
		  <div class="container">																
		    <div class="pull-left">																
		      <h6 class="inner-title">San Pham <?php echo e($sanpham->name); ?></h6>																
		    </div>																
		    <div class="pull-right">																
		      <div class="beta-breadcrumb font-large">																
		        <a href="/trangchu">Home</a> / <span>Details</span>																
		      </div>																
		    </div>																
		    <div class="clearfix"></div>																
		  </div>																
		</div>																
		<div class="container">																
		  <div id="content">																
		    <div class="row">																
		      <div class="col-sm-9">																
				<div class="row">																
		          <div class="col-sm-4">																
		            <img src="/source/image/product/<?php echo e($sanpham->image); ?>" alt="">																
		          </div>																
		          <div class="col-sm-8">																
		            <div class="single-item-body">																
		              <p class="single-item-title">																
		              <h2><?php echo e($sanpham->name); ?></h2>																
		              </p>																
		              <p class="single-item-price" style="text-align:left;font-size: 15px;">																
		                <span> <?php if($sanpham->promotion_price==0): ?>																
		                  <span class="flash-sale"><?php echo e(number_format($sanpham->unit_price)); ?> Đồng</span>																
		                  <?php else: ?>																
		                  <span class="flash-del"><?php echo e(number_format($sanpham->unit_price)); ?> Đồng </span>																
		                  <span class="flash-sale"><?php echo e(number_format($sanpham->promotion_price)); ?> Đồng</span>																
		                  <?php endif; ?></span>																
		              </p>																
		            </div>																
																		
		            <div class="clearfix"></div>																
		            <div class="space20">&nbsp;</div>																
																		
		            <div class="single-item-desc">																
		              <p><?php echo e($sanpham->description); ?></p>																
		            </div>																
		            <div class="space20">&nbsp;</div>																
																		
		            <p>So luong:</p>																
		            <div class="single-item-options">																
																		
		              <select class="wc-select" name="color">																
		                <option>So luong</option>																
		                <option value="1">1</option>																
		                <option value="2">2</option>																
		                <option value="3">3</option>																
		                <option value="4">4</option>																
		                <option value="5">5</option>																
		              </select>																
		              <a class="add-to-cart" href="#"><i																
		                  class="fa fa-shopping-cart"></i></a>																
		              <div class="clearfix"></div>																
		            </div>																
		          </div>																
		        </div>																
																		
		        <div class="space40">&nbsp;</div>																
		        <div class="woocommerce-tabs">																
		          <ul class="tabs">																
		            <li><a href="#tab-description">Description</a></li>																
		            <li><a href="#tab-comment">Comments</a></li>																
		          </ul>																
																		
		          <div class="panel" id="tab-description">
				<center>
				<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni																
		           dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor																
		           sit amet.Consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam																
		           aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit																
		           laboriosam, nisi ut aliquid ex ea commodi consequaturuis autem vel eum iure reprehenderit qui in ea																
		           voluptate velit es quam nihil molestiae consequr, vel illum qui dolorem eum fugiat quo voluptas nulla																
		           pariatur? </p>
				</center>																
		            																
		          </div>																
		          <div class="panel" id="tab-comment">																
																		
		            <div class="container">																
		              <div class="row">																
		                <div class="col-md-12">																
		                  <div class="card-body">																
		                    <form method="post" action="/comment/<?php echo e($sanpham->id); ?>">																
		                      <?php echo csrf_field(); ?>																
		                      <div class="form-group">																
		                        <textarea class="form-control" name="comment" required></textarea>																
		                      </div>																
		                      <button type="submit" class="beta-btn primary">Bình luận</button>																
		                    </form>																
		                  </div>																
		                </div>																
		              </div>																
		            </div>																
																		
		            <?php if(isset($comments)): ?>																
		            <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>																
		            <p class="border-bottom">																
		            <p><b class="pull-left"><?php echo e($comment->username); ?></b></p><br />																
		            <p><?php echo e($comment->comment); ?></p>																
		            </p>																
		            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>																
		            <?php else: ?>																
		            <p>Chưa có bình luận nào cả!</p>																
		            <?php endif; ?>																
		          </div>																
																		
		        </div>																
		        <div class="space50">&nbsp;</div>																
		        <div class="beta-products-list">																
		          <h4>Related Products</h4>																
																		
		          <div class="row">																
		            <?php $__currentLoopData = $splienquan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>																
		            <div class="col-sm-4">																
		              <div class="single-item">																
		                <div class="single-item-header">																
		                  <a href="detail/<?php echo e($sp->id); ?>"><img src="/source/image/product/<?php echo e($sp->image); ?>" alt=""></a>																
		                </div>																
		                <?php if($sp->promotion_price==!0): ?>																
		                <div class="ribbon-wrapper">																
		                  <div class="ribbon sale">Sale</div>																
		                </div>																
		                <?php endif; ?>																
		                <div class="single-item-body">																
		                  <p class="single-item-title"><?php echo e($sp->name); ?></p>																
		                  <p class="single-item-price" style="text-align:left;font-size: 15px;">																
		                    <?php if($sp->promotion_price==0): ?>																
		                    <span class="flash-sale"><?php echo e(number_format($sp->unit_price)); ?> Đồng</span>																
		                    <?php else: ?>																
		                    <span class="flash-sale"><?php echo e(number_format($sp->promotion_price)); ?> Đồng</span>																
		                    <span class="flash-del"><?php echo e(number_format($sp->unit_price)); ?> Đồng </span>																
		                    <?php endif; ?>																
		                  </p>																
		                </div>																
		                <div class="single-item-caption">																
		                  <a class="add-to-cart pull-left" href="#"><i																
		                      class="fa fa-shopping-cart"></i></a>																
		                  <a class="beta-btn primary" href="detail/<?php echo e($sp->id); ?>">Details <i class="fa fa-chevron-right"></i></a>																
		                  <div class="clearfix"></div>																
		                </div>																
		              </div>																
		            </div>																
		            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>																
		          </div>																
		        </div> <!-- .beta-products-list -->																
		      </div>																
		      <div class="col-sm-3 aside">																
		        <div class="widget">																
		          <h3 class="widget-title">Best Sellers</h3>																
		          <div class="widget-body">															
		            <div class="beta-sales beta-lists">																
		              <div class="media beta-sales-item">																
		                <a class="pull-left" href="product.html"><img src="/source/image/product/<?php echo e($sp->image); ?>"																
		                    alt=""></a>																
		                <div class="media-body">																
		                  Sample Woman Top																
		                  <span class="beta-sales-price">$34.55</span>																
		                </div>																
		              </div>																
		              <div class="media beta-sales-item">																
		                <a class="pull-left" href="product.html"><img src="/source/image/product/<?php echo e($sp->image); ?>"																
		                    alt=""></a>																
		                <div class="media-body">																
		                  Sample Woman Top																
		                  <span class="beta-sales-price">$34.55</span>																
		                </div>																
		              </div>																
		              <div class="media beta-sales-item">																
		                <a class="pull-left" href="product.html"><img src="/source/image/product/<?php echo e($sp->image); ?>"																
		                    alt=""></a>																
		                <div class="media-body">																
		                  Sample Woman Top																
		                  <span class="beta-sales-price">$34.55</span>																
		                </div>																
		              </div>																
		              <div class="media beta-sales-item">																
		                <a class="pull-left" href="product.html"><img src="/source/image/product/<?php echo e($sp->image); ?>"																
		                    alt=""></a>																
		                <div class="media-body">																
		                  Sample Woman Top																
		                  <span class="beta-sales-price">$34.55</span>																
		                </div>																
		              </div>																
		            </div>																
		          </div>																
		        </div> <!-- best sellers widget -->																
		        <div class="widget">																
		          <h3 class="widget-title">New Products</h3>																
		          <div class="widget-body">																
		            <div class="beta-sales beta-lists">																
		              <div class="media beta-sales-item">																
		                <a class="pull-left" href="product.html"><img src="/source/image/product/<?php echo e($sp->image); ?>"																
		                    alt=""></a>																
		                <div class="media-body">																
		                  Sample Woman Top																
		                  <span class="beta-sales-price">$34.55</span>																
		                </div>																
		              </div>																
		              <div class="media beta-sales-item">																
		                <a class="pull-left" href="product.html"><img src="/source/image/product/<?php echo e($sp->image); ?>"																
		                    alt=""></a>																
		                <div class="media-body">																
		                  Sample Woman Top																
		                  <span class="beta-sales-price">$34.55</span>																
		                </div>																
		              </div>																
		              <div class="media beta-sales-item">																
		                <a class="pull-left" href="product.html"><img src="/source/image/product/<?php echo e($sp->image); ?>"																
		                    alt=""></a>																
		                <div class="media-body">																
		                  Sample Woman Top																
		                  <span class="beta-sales-price">$34.55</span>																
		                </div>																
		              </div>																
		              <div class="media beta-sales-item">																
		                <a class="pull-left" href="product.html"><img src="source/assets/dest/images/products/sales/4.png"																
		                    alt=""></a>																
		                <div class="media-body">																
		                  Sample Woman Top																
		                  <span class="beta-sales-price">$34.55</span>																
		                </div>																
		              </div>																
		            </div>																
		          </div>																
		        </div> <!-- best sellers widget -->																
		      </div>																
		    </div>																
		  </div> <!-- #content -->																
		</div> <!-- .container -->																
																		
		<?php $__env->stopSection(); ?>																
																		
																		
																		

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\WebsiteLaravel\resources\views/page/chitiet_sanpham.blade.php ENDPATH**/ ?>