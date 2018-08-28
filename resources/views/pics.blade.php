@extends('layouts.oakmain')

@section('content')

	<div class="row">
			<div class="col-md-6">
				<!-- Display Validation Errors -->
				@include('common.errors')

				<!-- New picture Form -->
				<form action = "{{ url('pics') }}" method="POST" class="form-horizontal">
					{{csrf_field()}}
					<fieldset>

						<!-- picture Name -->
						<div class="form-group">
							<h4>Add Pictures</h4>
							<label for="name" class="control-tabs">Picture Name</label>
							<input type="text" name="name" id="pics-name" class="form-control">
						
							<label for="title" class="control-tabs">Title</label>
							<input type="text" name="title" id="pics-name" class="form-control">
							
							<label for="alt" class="control-tabs">Alternate</label>
							<input type="text" name="alt" id="pics-name" class="form-control">
							
							<label for="path" class="control-tabs">Path</label>
							<input type="text" name="home" id="pics-name" class="form-control">

							<legend>Picture Page Placements</legend>
							<!-- Begin Checkboxes -->
							<div class="checkb">
								<label for="main" class="control-tabs">
								<input type="checkbox" name="main" id="pics-name" class="form-control">Home Slider</label>
							</div>

							<div class="checkb">
								<label for="interior" class="control-tabs">
								<input type="checkbox" name="interior" id="pics-name" class="form-control">
								Interiors Slider</label>
							</div>
						
							<div class="checkb">
								<label for="extra" class="control-tabs">
								<input type="checkbox" name="extra" id="pics-name" class="form-control">
								Extra Slider</label>				
							</div>
						</div>
						<!-- Add Picture Button -->
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-6">
								<button class="btn btn-default" type="submit">
									<i class="fa fa-plus"></i> Add picture
								</button>
							</div>
						</div>
					</fieldset>
				</div>
			</form>
		</div>
		<div class="col-md-8">
			<!-- Current pictures -->
		    @if (count($pictures) > 0)
		        <div class="panel panel-default">	        	
		            <div class="panel-heading">
		                <h4>Current pictures</h4>
		            </div>

		            <div class="panel-body">
		                <table class="table table-striped picture-table">

		                    <!-- Table Headings -->
		                    <thead>
		                        <th>name</th>
		                        <th>image</th>
		                        <th>Home Page</th>
		                        <th>Interior Page</th>
		                    </thead>

		                    <!-- Table Body -->
		                    <tbody>
		                        @foreach ($pictures as $picture)
		                            <tr>
	                                    <!-- picture Name -->
	                                    <td class="table-text">
	                                        <div>{{ $picture->name }}</div>
	                                    </td>
	                                    <td>
	                                    	<img src="{{$picture->path}}/{{$picture->name}}" width="150px">
	                                    </td>
	                                    <td>
	                                        @if($picture->main)
	                                        	<input type="checkbox" class="checkb" checked>
	                                        @else
	                                        	<input type="checkbox" class="checkb">
                                        	@endif
	                                    </td>
	                                    <td>
	                                        @if($picture->interior)
	                                        	<input type="checkbox" class="checkb" checked>
	                                        @else
	                                        	<input type="checkbox" class="checkb">
                                        	@endif
	                                    </td>
	                                    <!-- Delete Button -->
	                                    <td>
	                                        <form action="{{ url('apartn/'.$picture->id) }}" method="POST">
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
		        </div>
		    @endif
		</div>

	</div>
	
@endsection