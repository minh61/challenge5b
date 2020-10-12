
<?php $__env->startSection('content'); ?>
	<center>
		<br>
		<h2>
		<?php
			echo "Xin chào ".session('fullname')."!";
		?>
	</h2>

	</center>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\challenge5b\resources\views/home_page.blade.php ENDPATH**/ ?>