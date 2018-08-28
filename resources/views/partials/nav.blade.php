<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="/">Oak Brook Commons</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
  		<ul class="nav navbar-nav navbar-left">
  			<li class="active"><a href="index.php">Home</a></li>
        <li><a href="/#availability">Availability</a></li>
  			<li class="dropdown">
  				<a class="dropdown-toggle" data-toggle="dropdown" href="/apartments">Apartments<span class="caret"></span></a>
  				<ul class="dropdown-menu">
            <li><a href="/apartments">Images</a></li>
  					<li><a href="/floorplan">Floorplans</a></li>
  					<li><a href="/aptinfo">Amenities</a></li>
  				</ul>
  			</li>
  			<li><a href="/reviews">Reviews</a></li>
        <li><a href="/location">Location</a></li>
  			<li class="dropdown">
  				<a class="dropdown-toggle" data-toggle="dropdown" href="/about">About Us<span class="caret"></span></a>
  				<ul class="dropdown-menu">
  					<li><a href="/contact">Contact</a></li>
            <li><a href="/referrals">Resident Testimonials</a></li>
  					<li><a href="/rental">Application</a></li>
  				</ul>
  			</li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if (Auth::check())
            <!-- <li><a href="{{ url('/admin') }}">Admin</a></li> -->
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="/admin">Admin<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/apartn">Units</a></li>
                <!-- <li><a href="/prices">Prices</a></li> -->
                <li><a href="/referrals">Referrals</a></li>
              </ul>
            </li>
            <li><a href="{{ url('/logout') }}"><span class="glyphicon glyphicon-off"></span></a></li>                
        @else
            <li><a href="tel:518-371-0216"><span class="glyphicon glyphicon-earphone"></span>518-371-0216</a></li>  
            <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in"></span></a></li>         
        @endif        
      </ul> 
    </div><!-- /.NavBar Collapse -->
  </div> <!-- /.container-fluid -->
</nav>