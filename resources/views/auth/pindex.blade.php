@extends('layouts.oakmain')

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
				<ul>
					@foreach($prices as price)
					    <li class="form-group">
						    <label for="layout_vlu">Layout</label>
						    <input value="1" name="layout_vlu" type="text" value="{{ $price->layout_vlu}}" disabled>
						    <label for="prices">Price</label> 
						    <input type="text" name="price" value="{{$price->price}}" disabled>
						    <a href="/prices/{{$price->lo_id}}/edit" class="btn btn-primary">Edit</a>
						    <a href="/prices/{{$price->lo_id}}/edit" class="btn btn-primary">Delete</a>
						    <a href="{{action('PricesControllerr@edit', $price->lo_id)}}" class="btn btn-warning">Edit</a>		
						    <form action="{{action('CRUDController@destroy', $post['id'])}}" method="post">
						        {{csrf_field()}}
						        <input name="_method" type="hidden" value="DELETE">
						        <button class="btn btn-danger" type="submit">Delete</button>
					      </form>
						</li>
					@endforeach
				</ul>
					<div class="form-group">
						<button type="submit" class="btn btn-default">Submit</button>						
					</div>
			</form>			
		</div>
	</div>
@endsection