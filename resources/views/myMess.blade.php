@extends('layout.master')
@section('content')
<center>
    <h3>Đã nhận : </h3>
    <table class="table table-bordered" style="text-align: center; width: 50%;">
        <tr>
            <th>Tin nhắn</th>
            <th>Tùy chọn</th>
        </tr>
        @foreach ($data as $mes)
        <tr>
            <td>{{$mes->message}}</td>
            <td>
                <a class="btn btn-danger" href="{{ url('deleteMess/' . $mes->id) }}">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
    <br>
    <h3>Đã gửi :</h3>
    <table class="table table-bordered" style="text-align: center; width: 50%;">
        <tr>
            <th>Tin nhắn</th>
            <th>Tùy chọn</th>
        </tr>
        @foreach ($dataSend as $mes)
        <tr>
            <td>{{$mes->message}}</td>
            <td>
                <a class="btn btn-danger" href="{{ url('deleteMess/' . $mes->id) }}">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</center>
@endsection
