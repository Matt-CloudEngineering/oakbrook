@extends('layouts.oakmain')

@section('content')
<div class="row">
	<div class="col-md-12">
		<h3>Apartment Listing Tool</h3>
	</div>
	<div class="col-md-12">
		<!-- Display Validation Errors -->
			@if (count($errors) > 0)
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif

			<!-- Display Validation Messages -->
			@if ($message)
			    <div class="alert alert-success" role="alert">
			    	<h4>Action Processed</h4>
			      	<div class="center-block">{{ $message}}</div>
			    </div>
			@endif
		</div>	
	</div>
	<div class="col-md-4">
		<div class="panel-body">
		
			<!-- Apartment Name -->
			@if (!$unit) 

				<!-- New Apartment Form -->
				<form action = "/apartn" method="POST" class="form-horizontal" id="aptpatch">			
					<fieldset>

					<h4>Add Apartment</h4>
					{{csrf_field()}}
					<label for="bldg" class="control-tabs">Building</label>
					<input type="text" name="bldg" value="" id="apartn-bldg" class="form-control">
					
					<label for="unit" class="control-tabs">Unit</label>
					<input type="text" name="unit" value="" id="apartn-unit" class="form-control">

					<div class="fselect">
						<br>
						<label for="layout" class="col-sm-3 control-tabs">Layout</label>
						<select name="layout">
							<option value="" selected>Choose...</option>
							<option value="1">1 Bedroom 1 Bath</option>
							<option value="2">2 Bedroom 1 Bath</option>
							<option value="3">2 Bedroom 2 Bath</option>
							<option value="4">2 Bedroom 2 Bath Deluxe</option>
							<option value="5">2 Bedroom 2 Bath Premier</option>
						</select>
					</div><br>

					<label for="description" class="col-sm-6 control-tabs">Description</label>
					<textarea type="text"  rows=4 cols=25 name="description" id="apartn-description" class="form-control"></textarea>						
					<label for="date" class="col-sm-3 control-tabs">Date</label>
					<input type="text" name="date" value="" id="apartn-date" class="form-control">

					<label for="special" class="col-sm-3 control-tabs">Special</label>
					<input type="text" name="special" id="apartn-special" value="" class="form-control">
					<br>
					<!-- Add Apt Button -->
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-6">
							<button class="btn btn-default" type="submit">
								<i class="fa fa-plus"></i> Create Apartment
							</button>
						</div>
					</div>

				@else 

					<!-- Edit Apartment Form -->
					<form action="/apartn/{{$unit->apt_id}}" method="POST" class="form-horizontal" id="aptpatch">			
						<fieldset>

						<h4>Add/Edit Apartment {{$unit->apt_id}}</h4>
						{{ method_field("PUT") }}
						{{csrf_field()}}
						<label for="bldg" class="control-tabs">Building</label>
						<input type="text" name="bldg" value="{{$unit->bldg}}" id="apartn-bldg" class="form-control">
						
						<label for="unit" class="control-tabs">Unit</label>
						<input type="text" name="unit" value="{{$unit->unit}}" id="apartn-unit" class="form-control">

						<div class="fselect">
							<br>
							<label for="layout" class="col-sm-3 control-tabs">Layout</label>
							<select name="layout">
								<option value="" @if($unit->layout == "" ) selected @endif>Choose...</option>
								<option value="1" @if($unit->layout == "1 Bedroom 1 Bath" ) selected @endif >1 Bedroom 1 Bath</option>
								<option value="2" @if($unit->layout == "2 Bedroom 1 Bath" ) selected @endif>2 Bedroom 1 Bath</option>
								<option value="3" @if($unit->layout == "2 Bedroom 2 Bath" ) selected @endif>2 Bedroom 2 Bath</option>
								<option value="4" @if($unit->layout == "2 Bedroom 2 Bath Deluxe" ) selected @endif>2 Bedroom 2 Bath Deluxe</option>
								<option value="5" @if($unit->layout == "2 Bedroom 2 Bath Premier" ) selected @endif>2 Bedroom 2 Bath Premier</option>
							</select>
						</div><br>

						<label for="description" class="col-sm-6 control-tabs">Description</label>
						<textarea type="text" rows=4 cols=25 name="description" id="apartn-description" class="form-control">{{$unit->description}}</textarea>						
						<label for="date" class="col-sm-3 control-tabs">Date</label>
						<input type="text" name="date" value="{{$unit->date_avail}}" id="apartn-date" class="form-control">

						<label for="special" class="col-sm-3 control-tabs">Special</label>
						<input type="text" name="special" id="apartn-special" value="{{$unit->special}}" class="form-control">
						<br>
						<!-- Add Apt Button -->
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-6">
								<button class="btn btn-default" type="submit">
									<i class="fa fa-plus"></i> Edit Apartment
								</button>
							</div>
							<div class="col-sm-offset-3 col-sm-6">
								<a class="btn btn-default center" href="/apartn" style="margin-top: 1rem;">
									<i class="fa fa-eraser"></i> Clear Form
								</a>
							</div>
						</div>

						@endif

							</fieldset>
						</form>
		</div>
	</div>
	<div class="col-md-8">
		<!-- Current apartments -->
	    @if (count($apartments) > 0)
            <div class="panel-body">
            	<h4>Apartments</h4>
                <table class="table table-striped apartment-table" >
                    <!-- Table Headings -->
                    <thead>
                        <th width="115px">ID:Bldg - Unit</th>
                        <th width="150px">Layout</th>
	                    <th>Description</th>
		                <th width="110px">Date Available</th>
			            <th>Special</th>
				        <th>&nbsp;</th>
                    </thead>
                    <!-- Table Body -->
                    <tbody>
                        @foreach ($apartments as $apartment)
                            <tr>
                                <!-- Apartment Name -->
                                <td>
                                	<a href="/apartn/{{$apartment->apt_id}}">{!! $apartment->apt_id!!}:{!! $apartment->bldg!!} - {!! $apartment->unit!!}</a>
                                </td>
                                <td class="table-text">
                                    {!! $apartment->layout!!}
                                </td>
                                <td class="adescription">
                                	{!! substr($apartment->description,0,75)!!}

                                </td>
                                <td>
                                    {!! $apartment->date_avail!!}
                                </td>
                                <td>
                                    <span class="adescription">{!! $apartment->special!!}</span>
                                </td>

                                <!-- Delete Button -->
                                <td>
                                    <form action="/apartn/{{$apartment->apt_id}}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
	    @endif
    </div>
</div>
@endsection


