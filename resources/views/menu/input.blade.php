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
	    <form role="form" class="input-append">
	    	<input type="hidden" name="count" value="1">
	    	<div class="form-group">
	    		<div id="field"><input autocomplete="off" class="input" id="field1" name="prof1" type="text" placeholder="Type something" data-items="8"/><button id="b1" class="btn add-more" type="button">+</button></div>
	    	</div>
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
        var newIn = '<input autocomplete="off" class="input" id="field' + next + '" name="field' + next + '" type="text">';
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
                $(this).remove();
                $(fieldID).remove();
            });
    });
    

    
});
</script>
@endsection