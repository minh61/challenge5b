
<?php $__env->startSection('content'); ?>

<center>
<div class="w3-container" style="width: 60%" >
	<?php if($result == 'correct'): ?>
		<h2 style="color:blue">Chúc mừng, bạn đã trả lời đúng!</h2>
		<h4 style="color:blue"><i>Nội dung : </i></h4>
		<hr>
	<?php

	    $myfile = fopen($path, "r") or die("Không mở được file!");
	    echo fread($myfile,filesize($path));
	    fclose($myfile);
	?>
		<br><hr>
		<a href="<?php echo e(route('game')); ?>" class="btn btn-info">Quay lại</a>
	<?php endif; ?>

	<?php if($result == 'false'): ?>
	<br>
		<div class="alert alert-danger" role="alert">
			Sai đáp án, mời bạn nhập lại!
		</div>
		<a href="<?php echo e(route('game')); ?>" class="btn btn-info">Quay lại</a>
	<?php endif; ?>

</div>
</center>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\challenge5b\resources\views/result.blade.php ENDPATH**/ ?>