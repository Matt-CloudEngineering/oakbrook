@extends('layouts.oakmain')

@section('content')
<div class="row">
	<div class="col-md-12">
		<h3>Apartment Listing Tool</h3>
	</div>
	<div class="col-md-4">
		<div class="panel-body">
			<!-- Display Validation Errors -->
			@include('common.errors')

			<!-- New Apartment Form -->
			<form action = "{{ url('apartn') }}" method="POST" class="form-horizontal">			
				<fieldset>
					<!-- Apartment Name -->
					<h4>Edit Apartment - {{$apartment->apt_id}}</h4>
					{{csrf_field()}}
					<label for="bldg" class="control-tabs">Building</label>
					<input type="text" name="bldg" value="{{$apartment->bldg}}" id="apartn-bldg" class="form-control">
					
					<label for="unit" class="control-tabs">Unit</label>
					<input type="text" name="unit" value="{{$apartment->unit}}" id="apartn-unit" class="form-control">

					<div class="fselect">
						<br>
						<label for="layout" class="col-sm-3 control-tabs">Layout</label>
						<select name="layout">
							<option value="">Choose...</option>
							<option value="1" selected>1 Bedroom 1 Bath</option>
							<option value="2">2 Beddroom 1 Bath</option>
							<option value="3">2 Bedroom 2 Bath</option>
							<option value="3">2 Bedroom 2 Bath Plus</option>
						</select>
					</div><br>

					<label for="description" class="col-sm-6 control-tabs">Description</label>
					<textarea type="text" name="description" id="apartn-description" class="form-control">{{$apartment->description}}</textarea>						
					<label for="date" class="col-sm-3 control-tabs">Date</label>
					<input type="text" name="date" value="{{$apartment->date_aval}}" id="apartn-date" class="form-control">

					<label for="special" class="col-sm-3 control-tabs">Special</label>
					<input type="text" name="special" value="{{$apartment->special}}"apartn-special" class="form-control">
					<br>
					<!-- Add Apt Button -->
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-6">
							<button class="btn btn-default" type="submit">
								<span class="glyphicon glyphicon-plus-sign"></span> Edit Apartment
							</button>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</div>	
</div>
@endsection


