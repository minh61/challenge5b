
<?php $__env->startSection('content'); ?>

<center>
    

    <br><h2>Thông tin chi tiết</h2>
    <a href="<?php echo e(route('list_of_users')); ?>" style="color: blue">Trở về</a> <br>
    <table class="table table-warning table-bordered" style="text-align: center; width: 60%;">
        
            <tr>
                <th scope="col"> Tên đăng nhập </th>
                <th scope="col"> Họ và tên </th>
                <th scope="col"> Chức vụ</th>
                <th scope="col"> Email </th>
                <th scope="col"> Số điện thoại</th>
            </tr>
        
            <tr>
                <td> <?php echo e($user->account); ?> </td>
                <td> <?php echo e($user->fullname); ?> </td>
                <td> <?php echo e($user->title); ?></td>
                <td> <?php echo e($user->email); ?> </td>
                <td> <?php echo e($user->phone_number); ?> </td>
            </tr>
    </table>
    <h3>Tin nhắn</h3>
    <form method="post" , action="<?php echo e(url('send/' . $idSend . '/' . $idReceive)); ?>">
        <?php echo e(csrf_field()); ?>

        <textarea name="content" type="email" id="exampleFormControlTextarea1"  placeholder="Nhập tin nhắn" rows="5" cols="50"></textarea><br>
        <button type="submit" class="btn btn-primary">Gửi</button>
    </form>
    </table>
</center>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\challenge5b\resources\views/detail.blade.php ENDPATH**/ ?>