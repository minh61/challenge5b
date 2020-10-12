
<?php $__env->startSection('content'); ?>

<center>
    <h2>Danh sách thử thách</h2><br>
    <table class="table table-bordered" style="text-align: center; width: 50%;">
        <tr>
            <th>Thử thách</th>
            <th>Lựa chọn</th>
        </tr>
        <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td>Thử thách <?php echo e($loop->index +1); ?></td>
            <td>
            <?php if($role == 2): ?>
                <a class="btn btn-danger" href="<?php echo e(url('deleteChallenge/' . $item->id)); ?>">Delete</a>
            <?php else: ?>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-todo='{"id":<?php echo e($item->id); ?>}' data-whatever="<?php echo e($item->description); ?>">Nộp</button>
            <?php endif; ?>
            </td>
        </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
    </table>
<?php if($role == 2): ?>
<div class="w3-container" style="position:relative">
  	<button onclick="document.getElementById('id01').style.display='block'" type="button" class="btn btn-info btn-circle ">Thêm</button>
</div>
<?php endif; ?>

<script>
var minh
$(function(){
    $('#exampleModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var recipient = button.data('whatever')
      var modal = $(this)
      var todoId = button.data('todo').id;
      minh = todoId
      modal.find('.modal-title').text('Nhập câu trả lời')
      // modal.find('.modal-contents').text( 'Content: ' + recipient)
      modal.find('.modal-contents').text( 'Gợi ý: ' + recipient)
    })
})

function validateForm() {
    document.getElementById('formSubmit').setAttribute("action", "submitChallenge/" + minh) 
}
</script>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.js"></script>

<!-- Modal add challenge-->
<div id="id01" class="w3-modal">
    <div class="w3-container">
    <header class="w3-container  w3-dark-grey w3-display-container"> 
      	<span onclick="document.getElementById('id01').style.display='none'" class="w3-button  w3-dark-grey w3-display-topright"><i class="fa fa-remove"></i></span>
      	<h4>Thử thách</h4>
    </header>
    <div class="w3-container">
    <form action="<?php echo e(route('create')); ?>" method="post" enctype="multipart/form-data">
      	<?php echo e(csrf_field()); ?>

      	<label for="content"><h5>Gợi ý</h5></label>
      	<textarea type="text" class="form-control mess" name="content" id="exampleFormControlTextarea1" rows="5" cols="10" placeholder="Nhập gợi ý"></textarea>
      	<input type="file" name="file" id="fileToUpload">
      	<input type="submit" value="Tải lên">
    </form> 
    </div>
    </div>
</div>

<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <!-- <div class="modal-dialog" role="document"> -->
    <div class="modal-content">
        <h4 class="modal-title" id="exampleModalLabel">Thử thách </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">X</span>
        </button>
        <form method="post" action="" id="formSubmit" onSubmit="validateForm()">
            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <h5 class="modal-contents" id="exampleModalLabel">Gợi ý</h5>
            </div>
            <div class="form-group">
                <label for="message-text" class="col-form-label">Câu trả lời </label>
                <textarea class="form-control" id="message-text" name="result"></textarea>
            </div>
            <input type="submit" class="btn btn-warning" value="Submit">
        </form>
    </div>
</div>
</center>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\challenge5b\resources\views/challenge.blade.php ENDPATH**/ ?>