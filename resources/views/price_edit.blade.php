@extends('layouts.oakmain')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<form class="form-inline" method="POST" action="/prices">
				{{ csrf_field() }}
			  <div class="form-group">
			    <label for="layout_vlu">Layout</label>
			    <select class="form-control" name="layout_vlu">
			      <option value="1">1 Bedroom and 1 Bathroom</option>
			      <option value="2">2 Bedrrom and 1 Bathroom</option>
			      <option value="3">2 Bedrrom and 2 Bathroom</option>
			      <option value="4">2 Bedrrom and 2 Bathroom w/ Storage</option>
			    </select>
			    <label for="prices">Price</label>
			    <input type="text" class="form-control" name="price" id="exampleInputName2">
			  </div>
			  <div class="form-group">
				  <button type="submit" class="btn btn-default">Submit</button>			  	
			  </div>
			</form>			
		</div>
	</div>
</div>
@endsection