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
<?php foreach($menu as $men):?>
<h2><?php echo $men->nama ?></h2>
<?php endforeach ?>


<div class="col-lg-6 table-responsive">
	<div class="panel panel-primary">
		<table class="table table-hover">
		<thead>
			<tr>
				<th style="width:10px">No</th>
				<th>Bahan</th>
			</tr>
		</thead>
		<tbody>
			<?php $i=1;?>
			<?php foreach($resep as $res):?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $res->nama; ?></td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
	</div>
</div>

@endsection