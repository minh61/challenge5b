
<?php $__env->startSection('content'); ?>

    <center>
        <br><h1>Danh sách thành viên</h1>
        <?php
            if(session('role') == 2) {
                echo "Giao vien";
                echo '<a> 1222222222</a>';
            }
            else {
                echo "sinh vien";
            }
        ?>
        
        <table class="table table-hover table-warning table-bordered" style="text-align: center; width: 80%;">
            <tr >
                <td>STT</td>
                <td>Họ và tên</td>
                <td>Chức vụ</td>
                <td>Email</td>
                <td>Tùy chọn</td>
            </tr>
            
        </table>
    </center>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\challenge5b\resources\views/list_of_members.blade.php ENDPATH**/ ?>