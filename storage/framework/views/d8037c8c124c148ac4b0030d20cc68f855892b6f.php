
<?php $__env->startSection('content'); ?>
<?php
    $x = 1;
?>

<center>
    <br><h1>Danh sách thành viên</h1>
    <?php if(session('role') == 2): ?>
        <a href="<?php echo e(route('add_user')); ?>" style="color: blue">Thêm thành viên</a> <br><br>   
    <?php endif; ?>
    
    <table class="table table-hover table-warning table-bordered" style="text-align: center; width: 80%;">
        <tr >
            <td><strong>STT</strong></td>
            <td><strong>Họ và tên</strong></td>
            <td><strong>Chức vụ</strong></td>
            <td><strong>Tùy chọn</strong></td>
        </tr>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $x++?></td>
            <td><?php echo e($item->fullname); ?></td>
            <td><?php echo e($item->title); ?></td>
            <td>
                <a href="<?php echo e(url('detail/' . $item->id)); ?>" class="btn btn-xs btn-info">Chi tiết</a>
                <?php if(session('role') == 2): ?>
                    <a href="<?php echo e(url('edit/' . $item->id)); ?>" class="btn btn-xs btn-warning">Sửa</a>
                    <a href="<?php echo e(url('deleteById/' . $item->id)); ?>" class="btn btn-xs btn-danger">Xóa</a>
                <?php endif; ?>
                
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>       
    
</center>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\challenge5b\resources\views/list_of_users.blade.php ENDPATH**/ ?>