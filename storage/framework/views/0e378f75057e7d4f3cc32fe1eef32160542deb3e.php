
<?php $__env->startSection('content'); ?>

<center>
    <h2>Hồ sơ cá nhân</h2>
    <div class="col-sm-5"><br>
    <!-- <table class="table table-hover table-warning table-bordered" style="text-align: center; width: 80%;"> -->
            <?php echo e(csrf_field()); ?>

            
            <h5>Tài khoản</h5>
            <input type="text" name="account" class="form-control" value=<?php echo e($account); ?> disabled>
            <?php if($errors->has('account')): ?>
                <span class="error"><?php echo e($errors->first('account')); ?></span>
            <?php endif; ?>
            
            
            <h5>Họ và tên</h5>
            <input type="text" name="fullname" class="form-control" value=<?php echo e($fullname); ?> disabled> 
            <?php if($errors->has('fullname')): ?>
                <span class="error"><?php echo e($errors->first('fullname')); ?></span>
            <?php endif; ?>
            

            <h5>Mật khẩu</h5>
            <input type="password" name="password"  class="form-control"value=<?php echo e($password); ?> disabled>
            <?php if($errors->has('password')): ?>
                <span class="error"><?php echo e($errors->first('password')); ?></span>
            <?php endif; ?>  
            

            <h5>Số điện thoại</h5>
            <input type="text" name="phone_number" class="form-control" value=<?php echo e($phone_number); ?> disabled>
                
            <?php if($errors->has('phone_number')): ?>
                <span class="error"><?php echo e($errors->first('phone_number')); ?></span>
            <?php endif; ?>
            

            <h5>Email</h5>
            <input type="email" name="email" class="form-control" value=<?php echo e($email); ?> disabled>
            <?php if($errors->has('email')): ?>
                <span class="error"><?php echo e($errors->first('email')); ?></span>
            <?php endif; ?>    
    
            <br>    
            <a href="<?php echo e(url('edit/' . $id)); ?>" class="btn btn-xs btn-warning">Sửa</a>
    <!-- </table> -->
    </div>

</center>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\challenge5b\resources\views/profile.blade.php ENDPATH**/ ?>