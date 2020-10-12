
<?php $__env->startSection('content'); ?>

<center>
    
    <h2>Danh sách bài tập</h2><br>
        <table  class="table table-hover table-bordered" style="text-align: center; width: 50%;">
            <tr>
                <th>File</th>
                <th>Tùy chọn</th>
            </tr>
            <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($file->getFileName()); ?></td>        
                <td>
                <a class="btn btn-primary" href="<?php echo e(url('download2/' . $file->getFileName())); ?>">Tải về</a>
                <?php if($role == 2): ?>
                    <a class="btn btn-danger" href="<?php echo e(url('delete2/' . $file->getFileName())); ?>">Xóa</a>
                <?php else: ?>
                <button onclick="document.getElementById('id02').style.display='block'" type="button" class="btn btn-warning">Tải lên</button>
                <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table> 
        
        <?php if($role == 2): ?>
        <table class="table table-hover table-bordered" style="text-align: center; width: 50%;">
            <tr>
                <th>For</th>
                <th>Tùy chọn</th>
            </tr>
            <?php $__currentLoopData = $filess; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($file->getFileName()); ?></td>
                <td>
                <a class="btn btn-primary" href="<?php echo e(url('download22/' . $file->getFileName())); ?>">Tải về</a>
                <a class="btn btn-danger" href="<?php echo e(url('delete3/' . $file->getFileName())); ?>">Xóa</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
        <?php endif; ?>
       
    
<?php if($role == 2): ?>
    <div class="w3-container" >
        <button onclick="document.getElementById('id01').style.display='block'" type="button" class="btn btn-info btn-circle ">Thêm bài tập</button>
    </div>
<?php endif; ?>

<!-- Modal-->
<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-top">
        <header class="w3-container  w3-dark-grey w3-display-container"> 
            <span onclick="document.getElementById('id01').style.display='none'" class="w3-button  w3-dark-grey w3-display-topright"><i class="fa fa-remove"></i></span>
            <h4>Bài tập</h4>
        </header>
        <form action="<?php echo e(route('uploadHomeWork')); ?>" style="margin-bottom:5rem;" method="post" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <label for="content"><h5>Chọn file:</h5></label>
            <input type="file" name="file" id="fileToUpload">
            <input type="submit" value="Tải lên">
        </form> 
    </div>
</div>

<!-- Modal-->
<div id="id02" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-top">
        <header class="w3-container  w3-dark-grey w3-display-container"> 
            <span onclick="document.getElementById('id02').style.display='none'" class="w3-button  w3-dark-grey w3-display-topright"><i class="fa fa-remove"></i></span>
            <h4>Tải lên</h4>
        </header>
        
        <form action="<?php echo e(url('submit/' . $id)); ?>" style="margin-bottom:1rem;" method="post" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

             <label for="content"><h5>Chọn file:</h5></label>
            <input type="file" name="file" id="fileToUpload">
            <input type="submit" value="Tải lên">
        </form> 
        
    </div>
</div>
</center>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\challenge5b\resources\views/exercise.blade.php ENDPATH**/ ?>