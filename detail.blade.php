@extends('layout.master')
@section('content')

<center>
    

    <br><h2>Thông tin chi tiết</h2>
    <a href="{{route('list_of_users')}}" style="color: blue">Trở về</a> <br>
    <table class="table table-warning table-bordered" style="text-align: center; width: 60%;">
        
            <tr>
                <th scope="col"> Tên đăng nhập </th>
                <th scope="col"> Họ và tên </th>
                <th scope="col"> Chức vụ</th>
                <th scope="col"> Email </th>
                <th scope="col"> Số điện thoại</th>
            </tr>
        
            <tr>
                <td> {{$user->account}} </td>
                <td> {{$user->fullname}} </td>
                <td> {{$user->title}}</td>
                <td> {{$user->email}} </td>
                <td> {{$user->phone_number}} </td>
            </tr>
    </table>
    <h3>Tin nhắn</h3>
    <form method="post" , action="{{ url('send/' . $idSend . '/' . $idReceive) }}">
        {{ csrf_field() }}
        <textarea name="content" type="email" id="exampleFormControlTextarea1"  placeholder="Nhập tin nhắn" rows="5" cols="50"></textarea><br>
        <button type="submit" class="btn btn-primary">Gửi</button>
    </form>
    </table>
</center>

@endsection