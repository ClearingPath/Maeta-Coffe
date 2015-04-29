@extends('maeta')

@section('content')
<!-- Page Heading -->
<div class="row">
	<div class="col-lg-12">
	    <h1 class="page-header">
	        Daftar Bahan Baku 
	    </h1>

	    <div class="panel-body">
		    <div class="table-responsive">
		    	@if ($pesananBulanIni != "[]")
			        <table class="table table-bordered table-hover table-striped">
			            <thead>
			                <tr>
			                    <th>Waktu Pemesanan</th>
			                    <th>Daftar Menu yang Dipesan</th>
			                </tr>
			            </thead>
			            <tbody>
			        		@foreach ($pesananBulanIni as $pesanan)
				                <tr>
				                    <td>{{ $pesanan->tanggal }}</td>
				                    <td>
				                    	{{ $pesanan->nama }}, harga : {{ $pesanan->harga }} <BR>
					                </td>
				                </tr>
			      			@endforeach
			            </tbody>
			        </table>
		        @else
		        	<h3>Pesanan Kosong. Silakan isi pesanan menu yang masuk.</h3>
		        @endif
		    </div>
		</div>

	    <ol class="breadcrumb">
	        <li>
	            <i class="fa fa-dashboard"></i>  <a href="../">Home</a>
	        </li>
	        <li>
	            <i class="fa fa-file"></i> <a href="#">Bahan Baku</a>
	        </li>
	        <li class="active">
	            <i class="fa fa-file"></i> Daftar Bahan Baku
	        </li>
	    </ol>
	</div>
</div>
<!-- /.row -->
@endsection