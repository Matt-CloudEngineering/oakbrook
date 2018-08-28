@extends('layouts.oakmain')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			  <h5 class="text-center"><a href="tel:518-371-0216"><span class="glyphicon glyphicon-earphone"></span>&nbsp;518-371-0216</a></h5>
		      <h4><span class="glyphicon glyphicon-user"></span>Contact Form</h4>

		      <div class="form-group">
		      	@if(session('message'))
		      	<div class='alert alert-success'>
		      		{{ session('message') }}
		      	</div>
		      	@endif

		      	@if (count($errors) > 0)
		      	    <div class="alert alert-danger">
		      	        <ul>
		      	            @foreach ($errors->all() as $error)
		      	                <li>{{ $error }}</li>
		      	            @endforeach
		      	        </ul>
		      	    </div>
		      	@endif		      	
		      </div>

		        <form role="form" method="POST" action="/contact">
		        	{{ csrf_field() }}
		          <div class="form-group">
		          	<div class="form-group">
		          	  <label for="name"><span class="glyphicon glyphicon-user"></span>&nbsp;Your Name</label>
		          	  <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
		          	</div>
		          </div>
		          <div class="form-group">
		            <label for="email"><span class="glyphicon glyphicon-envelope"></span>&nbsp;Your Email</label>
		            <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email" name="email">
		          </div>
		          <div class="form-group">
		            <label for="phone"><span class="glyphicon glyphicon-earphone"></span>&nbsp;Your Phone</label>
		            <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter phone">
		          </div>
		          <div class="form-group">
		            <label for="body"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Message</label>
		            <textarea rows="3" cols="50" class="form-control" name="message" id="message">
		            </textarea>
		          </div>
		          <button type="submit" class="btn btn-default">Send 
		            <span class="glyphicon glyphicon-ok"></span>
		          </button>
		        </form>
			</div>
		</div>
	</div>

@endsection




