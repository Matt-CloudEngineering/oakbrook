@include('partials.head')

<body>

@include('partials.nav')


<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="./img/slide_building.jpg" alt="Building">
      <div class="carousel-caption">
        <h3>Ready to Call This Home!</h3>
        <p>Our beautiful apartments are complemented by the beautiful grounds</p>
      </div> 
    </div>

    <div class="item">
      <img src="./img/slide_downhill.jpg" alt="Grounds">
      <div class="carousel-caption" style="color:black !important">
        <h3 style="color:black !important">Senic Views Everywhere</h3>
        <p>The beauty of the grounds just amplifies the tranquility</p>
      </div> 
    </div>

    <div class="item">
      <img src="./img/slide_lvgn_balcony.jpg" alt="Living Room & Balcony">
      <div class="carousel-caption">
        <h3>Balconies All Have Views</h3>
        <p>Large Rooms & A balcony with every Unit</p>
      </div> 
    </div>

    <div class="item">
      <img src="./img/slide_bldg_front.jpg" alt="Building Front">
      <div class="carousel-caption">
        <h3>C'mon In!</h3>
        <p>Welcoming environment for all</p>
      </div> 
    </div>

    <div class="item">
      <img src="./img/slide_lush_grounds.jpg" alt="Lush Green Grounds">
      <div class="carousel-caption">
        <h3>Four Seasons</h3>
        <p>With our excellent groundskeeping you get to enjoy the beauty year round</p>
      </div> 
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<div class="container text-center">
  <h3>Oak Brook Commons</h3>
  <p>Upscale Luxury Apartments in Saratoga County</p>
  <p>Beautiful grounds with spacious well appointed apartments makes for a peaceful home</p>

  <br>
  <div class="row">
    
    <div class="col-sm-4">
      <p><strong>Building Entrance</strong></p><br>
      <a href="#demo" data-toggle="collapse">
      	<img src="./img/bldg_entr.jpg" class="img-circle person" alt="Random Name">
      </a>
      <div id="demo" class="collapse">
        <p>Entryway To Your Home</p>
        <p>Doorway Into a Comfortable Home</p>
        <p>Multiple Floorplans Avaialble</p>
      </div>
    </div>

    <div class="col-sm-4">
      <p><strong>Updated Kitchen Appliances</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
      	<img src="./img/stove.jpg" class="img-circle person" alt="Random Name">
      </a>
      <div id="demo2" class="collapse">
        <p>Stainless Steel Appliances</p>
        <p>Higher End Features</p>
        <p>Energy Efficient</p>
      </div>
    </div>

    <div class="col-sm-4">
      <p><strong>Balcony View</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
	      <img src="./img/balcony_view.jpg" class="img-circle person" alt="Random Name">
	  </a>
      <div id="demo3" class="collapse">
        <p>Want This View?</p>
        <p>Peaceful Surroundings</p>
        <p>Lush & Green</p>
      </div>
    </div>

  </div>
</div>


//Available units apts model interaction
<div class="bg-1">
  <div class="container">
    <h3 class="text-center">Available Units</h3>
    <p class="text-center">These are the units that we have available now. Don't see the unit you want contact us and we may have one coming available</p>

    <ul class="list-group" style="list-style-type: none">
      @foreach ($units as $unit)

        <li class="list-group-item"><span style="color: dimgray;font-size: larger;font-weight: bold;">{!! $unit->layout!!}</span style="color: black;font-size: larger;"> <br/> {!!$unit->description!!} </li>

      @endforeach
    </ul>
    <!-- Used to open the Modal -->
    <a class="btn btn-default" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-modal-window"></span>&nbsp;Contact Us Regarding Available Units</a>
  </div>
</div>


<!-- Modal, Contact Form -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-lock"></span>Contact Form</h4>
      </div>
      <div class="modal-body">
        <form role="form">
          <div class="form-group">
          	<div class="form-group">
          	  <label for="name"><span class="glyphicon glyphicon-user"></span>&nbsp;Your Name</label>
          	  <input type="text" class="form-control" id="name" placeholder="Enter Name">
          	</div>
            <label for="psw"><span class="glyphicon glyphicon-home"></span>&nbsp;Which Apartment</label>
            <select class="form-control" id="psw" placeholder="Which One?">              
              <option>1BR 1BA</option>
              <option>2BR 1BA</option>
            	<option>2BR 2BA</option>
            	<option>2BR 2BA w/ storage</option>
            </select>
          </div>
          <div class="form-group">
            <label for="usrname"><span class="glyphicon glyphicon-envelope"></span>&nbsp;Your Email</label>
            <input type="text" class="form-control" id="usrname" placeholder="Enter Email">
          </div>
          <div class="form-group">
            <label for="usrname"><span class="glyphicon glyphicon-earphone"></span>&nbsp;Your Phone</label>
            <input type="text" class="form-control" id="usrname" placeholder="Enter phone">
          </div>
          <button type="submit" class="btn btn-block">Send 
            <span class="glyphicon glyphicon-ok"></span>
          </button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
          <span class="glyphicon glyphicon-remove"></span> Cancel
        </button>
        <p>Need <a href="./about">help?</a></p>
      </div>
    </div>
  </div>
</div>

@include('partials.footer')
</body>
</html>