
<!DOCTYPE html>
<head>
    <title>Đăng nhập</title>
  	<!-- <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="background.css">   --> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
</head>

<body>
	<center>
        <br><br>
        <h1>Trang quản lý đào tạo</h1>
            <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                    <form action="{{ route('getLogin') }}" class="form-signin" method="POST">
                        @csrf
                        <div class="form-label-group">
                            <center><label for="account"><h5>Tên đăng nhập</h5></label></center>
                            <input type="text" name="account" class="form-control" placeholder="Tên đăng nhập" required>
                        </div>
                        <br>
                        <div class="form-label-group">
                            <center><label for="pwd"><h5>Mật khẩu</h5></label></center>
                            <input type="password" name="password" class="form-control" placeholder="Mật khẩu" required>
                        </div>
                         <hr class="my-4">
                        <button class="btn btn-lg btn-success text-uppercase" name="login" type="submit">Đăng nhập</button><br><br>
                        @if($errors->any())
                            <h4>{{$errors->first()}}</h4>
                        @endif
                    </form>
                    </div>
                </div>
                </div>
            </div>
            </div>
    </center>
</body>
</html>
