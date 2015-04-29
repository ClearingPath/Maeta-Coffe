@extends('maeta')

@section('content')
<!-- Page Heading -->
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">
			BAHAN BAKU & MENU
		</h1>
		<ol class="breadcrumb">
			<li>
				<i class="fa fa-dashboard"></i>  <a href="#">Bahan Baku</a>
			</li>
			<li class="active">
				menu
			</li>
		</ol>
	</div>
</div>
<!-- /.row -->

<h2>List Menu</h2>
<div class="col-lg-8 table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th style="width:10px">No</th>
				<th>Nama</th>
				<th>Harga</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $i=1;?>
			<?php foreach ($lists as $par): ?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $par->nama ?></td>
				<td><?php echo $par->harga ?></td>
				<td><a href="{{ url('/menu/detail/') }}/<?php echo $par->id; ?>">Detail</a> | <a href="#">Edit</a> | <a href="#">Delete</a></td>
				<?php $i = $i+1;?>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<!--
	<ul class="pagination">
	  <li><a href="#">&laquo;</a></li>
	  <li><a href="#">1</a></li>
	  <li><a href="#">2</a></li>
	  <li><a href="#">3</a></li>
	  <li><a href="#">4</a></li>
	  <li><a href="#">5</a></li>
	  <li><a href="#">&raquo;</a></li>
	</ul>
	-->
</div>

@endsection