@extends('maeta')

@section('content')
<!-- Page Heading -->
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">
			Daftar Anggaran
		</h1>
		<ol class="breadcrumb">
			<li>
				<i class="fa fa-dashboard"></i>  <a href="#">Anggaran</a>
			</li>
			<li class="active">
				detail
			</li>
		</ol>
	</div>
</div>
<!-- /.row -->

<!-- Page Heading -->
<div class="row">
	<div class="col-lg-12">

		<!-- Page Content Here -->
		<small>Tanggal : </small>
		<small>12-04-2015</small>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-bordered table-hover table-striped">
					<thead>
						<tr>
							<th>Nama Bahan</th>
							<th>Jumlah Beli</th>
							<th>Satuan</th>
							<th>Total Harga (Rupiah)</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Wortel</td>
							<td>2</td>
							<td>batang</td>
							<td>2000</td>
						</tr>
						<tr>
							<td>Nasi</td>
							<td>500</td>
							<td>liter</td>
							<td>80000</td>
						</tr>
						<tr>
							<td>Sosis</td>
							<td>1</td>
							<td>bungkus</td>
							<td>50000</td>
						</tr>
						<tr>
							<td>Kol</td>
							<td>2</td>
							<td>buah</td>
							<td>10000</td>
						</tr>
						<tr>
							<td>Cabai</td>
							<td>500</td>
							<td>ons</td>
							<td>10000</td>
						</tr>
						<tr>
							<td colspan="3"><b>TOTAL KESELURUHAN</b></td>
							<td>152000</td>
						</tr>
					</tbody>
				</table>
				<a href="{{ url('anggaran/show') }}">BACK TO PREVIOUS PAGE</a>
			</div>
		</div>
	</div>
</div>
<!-- /.row -->

@endsection