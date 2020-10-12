@extends('layout.master')
@section('content')

<center>
    <h2>Sửa thông tin</h2>
    <a href="{{route('list_of_users')}}" style="color: blue">Trở về</a> <br>
    <form action="{{ url('update/' . $id) }}" method="post" class="col-md-4" >
    <table class="table table-hover table-warning table-bordered" style="text-align: center; width: 80%;">
            {{ csrf_field() }}

            @if (session('role') == 2)
                <a>Tài khoản</a>
                <input type="text" name="account" class="form-control" value={{$account}} >
                @if ($errors->has('account'))
                    <span class="error">{{ $errors->first('account') }}</span>
                @endif
                
                <a>Họ và tên</a>
                <input type="text" name="fullname" class="form-control" value={{$fullname}} >        
                @if ($errors->has('fullname'))
                    <span class="error">{{ $errors->first('fullname') }}</span>
                @endif  
            @else
                <a>Tài khoản</a>
                <input type="text" name="account" class="form-control" value={{$account}} disabled>
                @if ($errors->has('account'))
                    <span class="error">{{ $errors->first('account') }}</span>
                @endif
                
                <a>Họ và tên</a>
                <input type="text" name="fullname" class="form-control" value={{$fullname}} disabled>        
                @if ($errors->has('fullname'))
                    <span class="error">{{ $errors->first('fullname') }}</span>
                @endif
            @endif

                <a>Mật khẩu</a>
                <input type="password" name="password" class="form-control"value={{$password}}>
                @if ($errors->has('password'))
                    <span class="error">{{ $errors->first('password') }}</span>
                @endif  
                
                <a>Số điện thoại</a>
                <input type="text" name="phone_number" class="form-control" value={{$phone_number}}>
                    
                @if ($errors->has('phone_number'))
                    <span class="error">{{ $errors->first('phone_number') }}</span>
                @endif
                
                <a>Email</a>
                <input type="email" name="email" class="form-control" value={{$email}} >
                @if ($errors->has('email'))
                    <span class="error">{{ $errors->first('email') }}</span>
                @endif    
                <br>
            <button class="btn btn-md btn-info text-uppercase font-weight-bold" type="submit">Sửa</button>
    </table>
    </form>
</center>
@endsection
