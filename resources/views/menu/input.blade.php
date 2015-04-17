@extends('maeta')

@section('content')
<!-- Page Heading -->
<div class="row">
	<div class="col-lg-12">
	    <h1 class="page-header">
	        Input Menu
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
	    <form role="form" class="input-append" method="POST" action=" {{url('menu/addMenuSuccess') }} ">
	    	<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
	    	<input type="hidden" name="count" value="1">
	    	<div class="form-group">
	    		<label>Nama Menu</label>
	    		<input class="form-control" name="nama">
	    	</div>
	    	<div class="form-group">
	    		<label>Harga</label>
	    		<input class="form-control" name="harga">
	    	</div>
	    	<div class="form-group">
	    		<label>Bahan Baku</label>
	    		<div id="field">
	    			<select id="input1" name="input1">
	    				@foreach ($bahan as $elemen)
	    					<option>{{$elemen->nama}}</option>
	    				@endforeach
	    			</select> 
					<input autocomplete="off" class="input" id="field1" name="filed1" type="text" placeholder="Type something" data-items="8"/>
					<button id="b1" class="btn add-more" type="button">+</button>
				</div>
	    	</div>
	    	<button type="submit" class="btn btn-default" value="submit">Simpan</button>
	    </form>
	</div>
</div>

@endsection

@section('script')
<script type="text/javascript">
$(document).ready(function(){
    var next = 1;
    $(".add-more").click(function(e){
        e.preventDefault();
        var addto = "#field" + next;
        var addRemove = "#field" + (next);
        next = next + 1;
        var newIn = '<select id="input'+ next +'" name="input'+ next +'">@foreach ($bahan as $elemen)<option>{{$elemen->nama}}</option>@endforeach</select><input autocomplete="off" class="input" id="field' + next + '" name="field' + next + '" type="text">';
        var newInput = $(newIn);
        var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >-</button></div><div id="field">';
        var removeButton = $(removeBtn);
        $(addto).after(newInput);
        $(addRemove).after(removeButton);
        $("#field" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);  
        
            $('.remove-me').click(function(e){
                e.preventDefault();
                var fieldNum = this.id.charAt(this.id.length-1);
                var fieldID = "#field" + fieldNum;
                var inputID = "#input" + fieldNum;
                $(this).remove();
                $(fieldID).remove();
                $(inputID).remove();
            });
    });
    

    
});
</script>
@endsection