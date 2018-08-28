@include('partials.head')

<body>

@include('partials.nav')

<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
		      <h4><span class="glyphicon glyphicon-user"></span>Contact Form</h4>
		        <form role="form" method="POST" action="/contact">
		        	{{ csrf_field() }}
		          <div class="form-group">
		          	<div class="form-group">
		          	  <label for="name"><span class="glyphicon glyphicon-user"></span>&nbsp;Your Name</label>
		          	  <input type="text" class="form-control" id="name" placeholder="Enter Name">
		          	</div>
		          </div>
		          <div class="form-group">
		            <label for="email"><span class="glyphicon glyphicon-envelope"></span>&nbsp;Your Email</label>
		            <input type="text" class="form-control" id="email" placeholder="Enter Email">
		          </div>
		          <div class="form-group">
		            <label for="phone"><span class="glyphicon glyphicon-earphone"></span>&nbsp;Your Phone</label>
		            <input type="text" class="form-control" id="phone" placeholder="Enter phone">
		          </div>
		          <div class="form-group">
		            <label for="body"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Message</label>
		            <textarea rows="3" cols="50" class="form-control" id="body">
		            </textarea>
		          </div>
		          <button type="submit" class="btn btn-block">Send 
		            <span class="glyphicon glyphicon-ok"></span>
		          </button>
		        </form>
		      <p style="color:lightgray">We are the Oak Brook Commons. Often people mistake our name for Oakbrook Apartments or even Oak Brook Apartments. However, you have come to find us we'd like the oppotunity to get know you even better. Drop us an email or call if your interested in learning about our quality community.</p>
			</div>
		</div>
	</div>
</div>

@include('partials.footer')
</body>
</html>





