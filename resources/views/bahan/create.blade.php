@extends('maeta')

@section('content')
<!-- Page Heading -->
<div class="row">
	<div class="col-lg-12">
	    <h1 class="page-header">
	        Input Bahan Baku
	    </h1>
	    <ol class="breadcrumb">
	        <li>
	            <i class="fa fa-dashboard"></i>  <a href="../">Home</a>
	        </li>
	        <li>
	            <i class="fa fa-file"></i> <a href="#">Bahan Baku</a>
	        </li>
	        <li class="active">
	            <i class="fa fa-file"></i> Input Bahan Baku
	        </li>
	    </ol>
	</div>
</div>
<!-- /.row -->

<div class="row">
	<div class="col-lg-6">
	    <form role="form">
	    	<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
	    	<div class="form-group">
	    		<label>Nama</label>
	    		<input class="form-control" name="nama">
	    	</div>
	    	<div class="form-group">
	    		<label>Jumlah Stock</label>
	    		<input class="form-control" name="jumlah_stok">
	    	</div>
	    	<div class="form-group">
	    		<label>Threshold</label>
	    		<input class="form-control" name="threshold">
	    	</div>
	    	<div class="form-group">
	    		<label>Satuan</label>
	    		<input class="form-control" name="satuan">
	    	</div>
	    	<div class="form-group">
	    		<label>Harga Satuan</label>
	    		<input class="form-control" name="harga_per_satuan">
	    	</div>
	    	<button type="submit" class="btn btn-default" value="submit">Simpan</button>
	    </form>
	</div>
</div>
@endsection