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
		        <table class="table table-bordered table-hover table-striped">
		            <thead>
		                <tr>
		                    <th>Nama</th>
		                    <th>Jumlah Stok Saat Ini</th>
		                    <th>Threshold</th>
		                    <th>Satuan</th>
		                    <th>Harga Satuan (Rupiah)</th>
		                    <th>Aksi</th>
		                </tr>
		            </thead>
		            <tbody>
		        		@foreach ($input as $inputbahan)
			                <tr>
			                    <td>{{ $inputbahan->nama }}</td>
			                    <td>{{ $inputbahan->jumlah_stok }}</td>
			                    <td>{{ $inputbahan->threshold }}</td>
			                    <td>{{ $inputbahan->satuan }}</td>
			                    <td>{{ $inputbahan->harga_per_satuan }}</td>
			                    <td>
			                        <a href="{{ url('bahan/edit/'.$inputbahan->id) }}">Edit</a> |
			                        <a href="{{ url('bahan/delete/'.$inputbahan->id) }}">Delete</a>
			                    </td>
			                    
			                </tr>
		      			@endforeach
		            </tbody>
		        </table>
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