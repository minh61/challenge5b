@extends('layout.master')
@section('content')

<center>
<div class="w3-container" style="width: 60%" >
	@if($result == 'correct')
		<h2 style="color:blue">Chúc mừng, bạn đã trả lời đúng!</h2>
		<h4 style="color:blue"><i>Nội dung : </i></h4>
		<hr>
	<?php

	    $myfile = fopen($path, "r") or die("Không mở được file!");
	    echo fread($myfile,filesize($path));
	    fclose($myfile);
	?>
		<br><hr>
		<a href="{{ route('game') }}" class="btn btn-info">Quay lại</a>
	@endif

	@if($result == 'false')
	<br>
		<div class="alert alert-danger" role="alert">
			Sai đáp án, mời bạn nhập lại!
		</div>
		<a href="{{ route('game') }}" class="btn btn-info">Quay lại</a>
	@endif

</div>
</center>
@endsection
