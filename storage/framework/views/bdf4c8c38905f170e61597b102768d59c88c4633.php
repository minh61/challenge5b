
<?php $__env->startSection('content'); ?>

<center>
    <h2>Sửa thông tin</h2>
    <a href="<?php echo e(route('list_of_users')); ?>" style="color: blue">Trở về</a> <br>
    <form action="<?php echo e(url('update/' . $id)); ?>" method="post" class="col-md-4" >
    <table class="table table-hover table-warning table-bordered" style="text-align: center; width: 80%;">
            <?php echo e(csrf_field()); ?>


            <?php if(session('role') == 2): ?>
                <a>Tài khoản</a>
                <input type="text" name="account" class="form-control" value=<?php echo e($account); ?> >
                <?php if($errors->has('account')): ?>
                    <span class="error"><?php echo e($errors->first('account')); ?></span>
                <?php endif; ?>
                
                <a>Họ và tên</a>
                <input type="text" name="fullname" class="form-control" value=<?php echo e($fullname); ?> >        
                <?php if($errors->has('fullname')): ?>
                    <span class="error"><?php echo e($errors->first('fullname')); ?></span>
                <?php endif; ?>  
            <?php else: ?>
                <a>Tài khoản</a>
                <input type="text" name="account" class="form-control" value=<?php echo e($account); ?> disabled>
                <?php if($errors->has('account')): ?>
                    <span class="error"><?php echo e($errors->first('account')); ?></span>
                <?php endif; ?>
                
                <a>Họ và tên</a>
                <input type="text" name="fullname" class="form-control" value=<?php echo e($fullname); ?> disabled>        
                <?php if($errors->has('fullname')): ?>
                    <span class="error"><?php echo e($errors->first('fullname')); ?></span>
                <?php endif; ?>
            <?php endif; ?>

                <a>Mật khẩu</a>
                <input type="password" name="password" class="form-control"value=<?php echo e($password); ?>>
                <?php if($errors->has('password')): ?>
                    <span class="error"><?php echo e($errors->first('password')); ?></span>
                <?php endif; ?>  
                
                <a>Số điện thoại</a>
                <input type="text" name="phone_number" class="form-control" value=<?php echo e($phone_number); ?>>
                    
                <?php if($errors->has('phone_number')): ?>
                    <span class="error"><?php echo e($errors->first('phone_number')); ?></span>
                <?php endif; ?>
                
                <a>Email</a>
                <input type="email" name="email" class="form-control" value=<?php echo e($email); ?> >
                <?php if($errors->has('email')): ?>
                    <span class="error"><?php echo e($errors->first('email')); ?></span>
                <?php endif; ?>    
                <br>
            <button class="btn btn-md btn-info text-uppercase font-weight-bold" type="submit">Sửa</button>
    </table>
    </form>
</center>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\challenge5b\resources\views/edit.blade.php ENDPATH**/ ?>