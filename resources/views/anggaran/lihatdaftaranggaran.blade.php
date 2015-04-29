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
				list
			</li>
		</ol>
	</div>
</div>
<!-- /.row -->

<!-- Page Heading -->
<div class="row">
	<div class="col-lg-12">

		<!-- Page Content Here -->
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-bordered table-hover table-striped">
					<thead>
						<tr>
							<th>No.</th>
							<th>Tanggal Kirim (dd-mm-yyyy)</th>
							<th>Divisi Dapur</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td><a href="{{ url('anggaran/detail') }}">12-05-2015</a></td>
							<td>Kitchen</td>
							<td>
								<a href="#">Konfirmasi</a> |
								<a href="#">Cetak</a> 
							</td>
						</tr>
						<tr>
							<td>2</td>
							<td><a href="{{ url('anggaran/detail') }}">13-05-2015</a></td>
							<td>Pantry</td>
							<td>
								<a href="#">Konfirmasi</a> |
								<a href="#">Cetak</a> 
							</td>
						</tr>
						<tr>
							<td>3</td>
							<td><a href="{{ url('anggaran/detail') }}">14-05-2015</a></td>
							<td>Kitchen</td>
							<td>
								<a href="#">Konfirmasi</a> |
								<a href="#">Cetak</a> 
							</td>
						</tr>
						<tr>
							<td>4</td>
							<td><a href="{{ url('anggaran/detail') }}">15-05-2015</a></td>
							<td>Pantry</td>
							<td>
								<a href="#">Konfirmasi</a> |
								<a href="#">Cetak</a> 
							</td>
						</tr>
						<tr>
							<td>5</td>
							<td><a href="{{ url('anggaran/detail') }}">16-05-2015</a></td>
							<td>Kitchen</td>
							<td>
								<a href="#">Konfirmasi</a> |
								<a href="#">Cetak</a> 
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- /.row -->
@endsection