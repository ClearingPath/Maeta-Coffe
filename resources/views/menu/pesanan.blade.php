@extends('maeta')

@section('content')
<!-- Page Heading -->
<div class="row">
	<div class="col-lg-12">
	    <h1 class="page-header">
	        Input Pesanan
	    </h1>
	    <ol class="breadcrumb">
	        <li>
	            <i class="fa fa-dashboard"></i>  <a href="../">Home</a>
	        </li>
	        <li>
	            <i class="fa fa-file"></i> <a href="#">Menu</a>
	        </li>
	        <li class="active">
	            <i class="fa fa-file"></i> Input Menu
	        </li>
	    </ol>
	</div>
</div>
<!-- /.row -->

<div class="row">
	<div class="col-lg-12">
	    <form role="form" class="input-append" method="POST" action=" {{url('menu/addPesananSuccess') }} ">
	    	<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
	    	<input type="hidden" name="count" id="count" value="0">
	    	<div class="form-group">
	    		<label>Menu</label>
	    		<div id="field_box">
	    			
				</div>
				<button id="addButton" class="btn add-more" type="button">+</button>
				<button id="removeButton" class="btn btn-danger remove-me" type="button" >-</button>
	    	</div>
	    	<button type="submit" class="btn btn-default" value="submit">Simpan</button>
	    </form>
</div>
@endsection

@section('script')
<script type="text/javascript">
 
$(document).ready(function(){
    var counter = 0;
    $("#addButton").click(function () {
 
		var newField = $(document.createElement('div'))
			 .attr("id", 'field_box' + counter);

		newField.after().html('<select id="input[]" name="input'+ counter +'">@foreach ($menu as $elemen)<option>{{$elemen->nama}}</option>@endforeach</select><input autocomplete="off" class="input" id="field' + counter + '" name="field' + counter + '" type="text">');

		newField.appendTo("#field_box");

		counter++;
		$("#count").val(counter); 
	});
 
	$("#removeButton").click(function () {
		counter--;
		$("#field_box" + counter).remove();
		$("#count").val(counter); 
	});
});
</script>
@endsection