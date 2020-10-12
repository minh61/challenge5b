<!-- Sidebar -->
<nav class="navbar navbar-expand-lg bg-success navbar-light nav-ho ">
	
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('home_page')); ?>">Trang chủ</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('list_of_users')); ?>">Danh sách thành viên</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('message')); ?>">Tin nhắn</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('exercise')); ?>">Bài tập</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('game')); ?>">Thử thách</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo e(url('profile/' . session('id'))); ?>">Hồ sơ cá nhân</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('logout')); ?>">Đăng Xuất</a></li>
        </ul>     
    </nav>
<?php /**PATH C:\xampp\htdocs\challenge5b\resources\views/layout/header.blade.php ENDPATH**/ ?>