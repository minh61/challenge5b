@extends('layout.master')
@section('content')
	<center>
		<br>
		<h2>
		<?php
			echo "Xin chào ".session('fullname')."!";
		?>
	</h2>

	</center>
@endsection
