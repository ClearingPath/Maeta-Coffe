@extends('maeta')

@section('content')
<!-- Page Heading -->
<div class="row">
	<div class="col-lg-12">
	    <h1 class="page-header">
	        Daftar Bahan Baku 
	    </h1>


	    <form role="form" method="post" action="{{ url('bahan/editBahanSuccess') }}">
   
            <div class="form-group">
                <label>Nama</label>
                <input class="form-control" placeholder='{{$input->nama}}' name='nama'>
            </div>

            <div class="form-group">
                <label>Jumlah Stok</label>
                <input class="form-control" placeholder='{{$input->jumlah_stok}}' name='jumlah'>
            </div>

            <div class="form-group">
                <label>Threshold</label>
                <input class="form-control" placeholder='{{$input->threshold}}' name='threshold'>
            </div>

            <div class="form-group">
                <label>Satuan</label>
                <input class="form-control" placeholder='{{$input->satuan}}' name='satuan'>
            </div>

            <div class="form-group">
                <label>Harga Satuan</label>
                <input class="form-control" placeholder='{{$input->harga_per_satuan}}' name='harga'>
            </div>


            <div class="form-group">
                <input class="form-control" type="hidden" name = 'id' value = '{{$input->id}}'>
            </div>

            <button type="submit" class="btn btn-default">SIMPAN</button>

        </form>
                        

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