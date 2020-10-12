@extends('layout.master')
@section('content')

<center>
    
    <h2>Danh sách bài tập</h2><br>
        <table  class="table table-hover table-bordered" style="text-align: center; width: 50%;">
            <tr>
                <th>File</th>
                <th>Tùy chọn</th>
            </tr>
            @foreach ($files as $file)
            <tr>
                <td>{{$file->getFileName()}}</td>        
                <td>
                <a class="btn btn-primary" href="{{ url('download2/' . $file->getFileName()) }}">Tải về</a>
                @if ($role == 2)
                    <a class="btn btn-danger" href="{{ url('delete2/' . $file->getFileName()) }}">Xóa</a>
                @else
                <button onclick="document.getElementById('id02').style.display='block'" type="button" class="btn btn-warning">Tải lên</button>
                @endif
                </td>
            </tr>
            @endforeach
        </table> 
        
        @if ($role == 2)
        <table class="table table-hover table-bordered" style="text-align: center; width: 50%;">
            <tr>
                <th>For</th>
                <th>Tùy chọn</th>
            </tr>
            @foreach ($filess as $file)
            <tr>
                <td>{{$file->getFileName()}}</td>
                <td>
                <a class="btn btn-primary" href="{{ url('download22/' . $file->getFileName()) }}">Tải về</a>
                <a class="btn btn-danger" href="{{ url('delete3/' . $file->getFileName()) }}">Xóa</a>
                </td>
            </tr>
            @endforeach
        </table>
        @endif
       
    
@if ($role == 2)
    <div class="w3-container" >
        <button onclick="document.getElementById('id01').style.display='block'" type="button" class="btn btn-info btn-circle ">Thêm bài tập</button>
    </div>
@endif

<!-- Modal-->
<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-top">
        <header class="w3-container  w3-dark-grey w3-display-container"> 
            <span onclick="document.getElementById('id01').style.display='none'" class="w3-button  w3-dark-grey w3-display-topright"><i class="fa fa-remove"></i></span>
            <h4>Bài tập</h4>
        </header>
        <form action="{{ route('uploadHomeWork') }}" style="margin-bottom:5rem;" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <label for="content"><h5>Chọn file:</h5></label>
            <input type="file" name="file" id="fileToUpload">
            <input type="submit" value="Tải lên">
        </form> 
    </div>
</div>

<!-- Modal-->
<div id="id02" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-top">
        <header class="w3-container  w3-dark-grey w3-display-container"> 
            <span onclick="document.getElementById('id02').style.display='none'" class="w3-button  w3-dark-grey w3-display-topright"><i class="fa fa-remove"></i></span>
            <h4>Tải lên</h4>
        </header>
        
        <form action="{{ url('submit/' . $id) }}" style="margin-bottom:1rem;" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
             <label for="content"><h5>Chọn file:</h5></label>
            <input type="file" name="file" id="fileToUpload">
            <input type="submit" value="Tải lên">
        </form> 
        
    </div>
</div>
</center>
@endsection
