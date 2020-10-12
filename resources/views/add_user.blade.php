@extends('layout.master')
@section('content')

<center>
	<h1>Thêm thành viên </h1>
        <a href="{{route('list_of_users')}}" style="color: blue">Trở về</a> <br/> <br/>
	<form action="{{route('post-user')}}" method="post">
	<table width="50%" border="1" cellspacing="0" cellpadding="10">
			@csrf
			<tr>
                <td>Tên đăng nhập</td>
                <td>
                    <input type="text" name="account" value=""/>
        			@if ($errors->has('account'))
                  		<span class="error">{{ $errors->first('account') }}</span>
                	@endif	                
                </td>
            </tr>
			<tr>
                <td>Mật khẩu</td>
                <td>
                    <input type="password" name="password" value=""/> 
                    @if ($errors->has('password'))
                  		<span class="error">{{ $errors->first('password') }}</span>
                	@endif
                </td>
            </tr>
            <tr>
                <td>Họ và tên</td>
                <td>
                    <input type="text" name="fullname" value=""/>
                    @if ($errors->has('fullname'))
                  		<span class="error">{{ $errors->first('fullname') }}</span>
                	@endif                
                </td>
            </tr>
            <tr>
                <td>Chức vụ</td>
                <td>
                    <select type="text" name="title">
					  	<option value="Giáo viên">Giáo viên</option>
					  	<option value="Sinh viên">Sinh viên</option>
				
					</select>
                    @if ($errors->has('title'))
                  		<span class="error">{{ $errors->first('title') }}</span>
                	@endif
            	</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="text" name="email" value=""/>    
                	@if ($errors->has('email'))
                  		<span class="error">{{ $errors->first('email') }}</span>
                	@endif
                </td>
            </tr>
            <tr>
                    <td>Số điện thoại</td>
                    <td>
                        <input type="text" name="phone_number" value=""/>
                        @if ($errors->has('phone_number'))
                  			<span class="error">{{ $errors->first('phone_number') }}</span>
                		@endif
                </td>
            </tr>      
			
		
	</table><br>
	<input type="submit" name="Thêm" value="Thêm">
	</form>
</center>
@endsection
