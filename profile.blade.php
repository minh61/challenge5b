@extends('layout.master')
@section('content')

<center>
    <h2>Hồ sơ cá nhân</h2>
    <div class="col-sm-5"><br>
    <!-- <table class="table table-hover table-warning table-bordered" style="text-align: center; width: 80%;"> -->
            {{ csrf_field() }}
            
            <h5>Tài khoản</h5>
            <input type="text" name="account" class="form-control" value={{$account}} disabled>
            @if ($errors->has('account'))
                <span class="error">{{ $errors->first('account') }}</span>
            @endif
            
            
            <h5>Họ và tên</h5>
            <input type="text" name="fullname" class="form-control" value={{$fullname}} disabled> 
            @if ($errors->has('fullname'))
                <span class="error">{{ $errors->first('fullname') }}</span>
            @endif
            

            <h5>Mật khẩu</h5>
            <input type="password" name="password"  class="form-control"value={{$password}} disabled>
            @if ($errors->has('password'))
                <span class="error">{{ $errors->first('password') }}</span>
            @endif  
            

            <h5>Số điện thoại</h5>
            <input type="text" name="phone_number" class="form-control" value={{$phone_number}} disabled>
                
            @if ($errors->has('phone_number'))
                <span class="error">{{ $errors->first('phone_number') }}</span>
            @endif
            

            <h5>Email</h5>
            <input type="email" name="email" class="form-control" value={{$email}} disabled>
            @if ($errors->has('email'))
                <span class="error">{{ $errors->first('email') }}</span>
            @endif    
    
            <br>    
            <a href="{{ url('edit/' . $id) }}" class="btn btn-xs btn-warning">Sửa</a>
    <!-- </table> -->
    </div>

</center>
@endsection