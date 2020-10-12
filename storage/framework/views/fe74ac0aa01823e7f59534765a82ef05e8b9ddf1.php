
<?php $__env->startSection('content'); ?>
<center>
    <h3>Đã nhận : </h3>
    <table class="table table-bordered" style="text-align: center; width: 50%;">
        <tr>
            <th>Tin nhắn</th>
            <th>Tùy chọn</th>
        </tr>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($mes->message); ?></td>
            <td>
                <a class="btn btn-danger" href="<?php echo e(url('deleteMess/' . $mes->id)); ?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <br>
    <h3>Đã gửi :</h3>
    <table class="table table-bordered" style="text-align: center; width: 50%;">
        <tr>
            <th>Tin nhắn</th>
            <th>Tùy chọn</th>
        </tr>
        <?php $__currentLoopData = $dataSend; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($mes->message); ?></td>
            <td>
                <a class="btn btn-danger" href="<?php echo e(url('deleteMess/' . $mes->id)); ?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</center>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\challenge5b\resources\views/myMess.blade.php ENDPATH**/ ?>