
<?php $__env->startSection('content'); ?>

<center>
	<h1>Thêm thành viên </h1>
        <a href="<?php echo e(route('list_of_users')); ?>" style="color: blue">Trở về</a> <br/> <br/>
	<form action="<?php echo e(route('post-user')); ?>" method="post">
	<table width="50%" border="1" cellspacing="0" cellpadding="10">
			<?php echo csrf_field(); ?>
			<tr>
                <td>Tên đăng nhập</td>
                <td>
                    <input type="text" name="account" value=""/>
        			<?php if($errors->has('account')): ?>
                  		<span class="error"><?php echo e($errors->first('account')); ?></span>
                	<?php endif; ?>	                
                </td>
            </tr>
			<tr>
                <td>Mật khẩu</td>
                <td>
                    <input type="password" name="password" value=""/> 
                    <?php if($errors->has('password')): ?>
                  		<span class="error"><?php echo e($errors->first('password')); ?></span>
                	<?php endif; ?>
                </td>
            </tr>
            <tr>
                <td>Họ và tên</td>
                <td>
                    <input type="text" name="fullname" value=""/>
                    <?php if($errors->has('fullname')): ?>
                  		<span class="error"><?php echo e($errors->first('fullname')); ?></span>
                	<?php endif; ?>                
                </td>
            </tr>
            <tr>
                <td>Chức vụ</td>
                <td>
                    <select type="text" name="title">
					  	<option value="Giáo viên">Giáo viên</option>
					  	<option value="Sinh viên">Sinh viên</option>
				
					</select>
                    <?php if($errors->has('title')): ?>
                  		<span class="error"><?php echo e($errors->first('title')); ?></span>
                	<?php endif; ?>
            	</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="text" name="email" value=""/>    
                	<?php if($errors->has('email')): ?>
                  		<span class="error"><?php echo e($errors->first('email')); ?></span>
                	<?php endif; ?>
                </td>
            </tr>
            <tr>
                    <td>Số điện thoại</td>
                    <td>
                        <input type="text" name="phone_number" value=""/>
                        <?php if($errors->has('phone_number')): ?>
                  			<span class="error"><?php echo e($errors->first('phone_number')); ?></span>
                		<?php endif; ?>
                </td>
            </tr>      
			
		
	</table><br>
	<input type="submit" name="Thêm" value="Thêm">
	</form>
</center>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\challenge5b\resources\views/add_user.blade.php ENDPATH**/ ?>