
<?php $__env->startSection('content'); ?>
<!-- <!DOCTYPE html>
<html>
<head>
	<title>Trang chủ giáo viên</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
</head>

<body> -->
    
        <center>
            <br><br><br>
        <p style="font-size: 35px;">Chào mừng đến trang chủ giáo viên! </p>
        <?php
            echo session('id');
            echo session('role');
        ?>
        </center><!-- 
</body>
</html> -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\challenge5b\resources\views/teacher_page.blade.php ENDPATH**/ ?>