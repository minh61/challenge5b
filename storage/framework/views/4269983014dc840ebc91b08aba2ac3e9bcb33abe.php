<!-- FROM STUDENT SIDE -->

<!DOCTYPE html>
<html>
<head>
	<title>Trang chủ sinh viên</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-success navbar-light ">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a class="nav-link" href="student_page"><strong>Trang chủ sinh viên</strong></a></li>
            <li class="nav-item"><a class="nav-link" href="student_list_of_members">Danh sách thành viên</a></li>
            <li class="nav-item"><a class="nav-link" href="student_exercise">Bài tập</a></li>
            <li class="nav-item"><a class="nav-link" href="student_game">Trò chơi</a></li>
            <li class="nav-item"><a class="nav-link" href="student_profile">Hồ sơ cá nhân</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('logout')); ?>">Đăng Xuất</a></li>
        </ul>     
    </nav>
        <center>
            <br><br><br>
        <p style="font-size: 35px;">Chào mừng đến trang chủ sinh viên! </p>
        </center>
</body>
</html><?php /**PATH C:\xampp\htdocs\challenge5b\resources\views/student_page.blade.php ENDPATH**/ ?>