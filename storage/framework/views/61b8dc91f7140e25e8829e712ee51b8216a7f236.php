<?php if(count($errors)>0): ?>
    <div class="alert alert-danger"></div>
    <ul>
        <?php $__currentLoopData = $errors ->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo $error; ?></li>
            
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\LearnLaravel\WebsiteLaravel\resources\views/error.blade.php ENDPATH**/ ?>