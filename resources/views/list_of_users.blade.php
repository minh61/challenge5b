@extends('layout.master')
@section('content')
<?php
    $x = 1;
?>

<center>
    <br><h1>Danh sách thành viên</h1>
    @if(session('role') == 2)
        <a href="{{route('add_user')}}" style="color: blue">Thêm thành viên</a> <br><br>   
    @endif
    
    <table class="table table-hover table-warning table-bordered" style="text-align: center; width: 80%;">
        <tr >
            <td><strong>STT</strong></td>
            <td><strong>Họ và tên</strong></td>
            <td><strong>Chức vụ</strong></td>
            <td><strong>Tùy chọn</strong></td>
        </tr>
        @foreach($users as $item)
        <tr>
            <td><?php echo $x++?></td>
            <td>{{$item->fullname}}</td>
            <td>{{$item->title}}</td>
            <td>
                <a href="{{ url('detail/' . $item->id) }}" class="btn btn-xs btn-info">Chi tiết</a>
                @if(session('role') == 2)
                    <a href="{{ url('edit/' . $item->id) }}" class="btn btn-xs btn-warning">Sửa</a>
                    <a href="{{ url('deleteById/' . $item->id) }}" class="btn btn-xs btn-danger">Xóa</a>
                @endif
                
            </td>
        </tr>
        @endforeach       
    
</center>
@endsection
