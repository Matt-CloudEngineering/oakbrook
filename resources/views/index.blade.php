@include('partials.head')

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NJF9N6D"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

@include('partials.nav')


<div id="myCarousel" class="carousel slide" data-ride="carousel"  style="margin-top: 50px;">
  <!-- Indicators -->
<!--   <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
    <li data-target="#myCarousel" data-slide-to="6"></li>
    <li data-target="#myCarousel" data-slide-to="7"></li>
  </ol> -->

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item">
      <img src="./img/DSC_0060.jpg" alt="Living Room & Balcony">
      <div class="carousel-caption">
        <!-- <h3>Balconies All Have Views</h3> -->
        <!-- <p>Large Rooms & A balcony with every Unit</p> -->
      </div> 
    </div>

     <div class="item active">
      <img src="./img/DSC_0021.jpg" alt="Building">
      <div class="carousel-caption">
        <!-- <h3>Ready to Call This Home!</h3> -->
<!--         <p>Our modern apartments are complemented by the beautiful grounds</p> -->
      </div> 
    </div>

    <div class="item">
      <img src="./img/DSC_0024.jpg" alt="Grounds">
      <div class="carousel-caption" style="color:black !important">
        <!-- <h3 style="color:black !important">Senic Views Everywhere</h3> -->
        <!-- <p>The beauty of the grounds just amplifies the tranquility</p> -->
      </div> 
    </div>

    <div class="item">
      <img src="./img/DSC_0072.jpg" alt="Building Front">
      <div class="carousel-caption">
        <!-- <h3>C'mon In!</h3> -->
        <!-- <p>Welcoming environment for all</p> -->
      </div> 
    </div>

    <div class="item">
      <img src="./img/DSC_0078.jpg" alt="Lush Green Grounds">
      <div class="carousel-caption">
        <!-- <h3>Four Seasons</h3> -->
        <!-- <p>With our excellent groundskeeping you get to enjoy the beauty year round</p> -->
      </div> 
    </div>

    <div class="item">
      <img src="./img/DSC_0079.jpg" alt="Lush Green Grounds">
      <div class="carousel-caption">
        <!-- <h3>Four Seasons</h3> -->
        <!-- <p>With our excellent groundskeeping you get to enjoy the beauty year round</p> -->
      </div> 
    </div>

    <div class="item">
      <img src="./img/DSC_0081.jpg" alt="Lush Green Grounds">
      <div class="carousel-caption">
        <!-- <h3>Four Seasons</h3> -->
        <!-- <p>With our excellent groundskeeping you get to enjoy the beauty year round</p> -->
      </div> 
    </div>

    <div class="item">
      <img src="./img/IMG_0298.JPG" alt="Lush Green Grounds">
      <div class="carousel-caption">
        <!-- <h3>Four Seasons</h3> -->
        <!-- <p>With our excellent groundskeeping you get to enjoy the beauty year round</p> -->
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


<div class="row text-center">
  <div class="col-md-8 col-md-offset-2">
    <h3>Oak Brook Commons</h3>
    <p>Our luxury residences provide gracious living and offer the maximum use of living space. We take great pride in our apartment community. Conveniently located on Route 9 in Clifton Park. We are situated only minutes away from the Northway, which means easy access to Albany, Saratoga, Troy, Schenectady & Malta. Oak Brook Commons is an ideal place to live in Saratoga County.</p>
    <br>
  </div
    <div class="row">
      
      <div class="col-sm-4">
        <p><strong>Private Views</strong></p>
      	<img src="./img/old-carryovers/anybalcony.jpg" class="img-circle person" alt="Rental Office Oval Photo" style="height: 248px">
        <div style="width:70%;margin-left:15%">
          <p>In every apartment, you will enjoy the views from your private patio or balcony!</p>
        </div>
      </div>

      <div class="col-sm-4">
        <p><strong>Lovely Gardens</strong></p>
      	<img src="./img/rec_pics/best32.jpg" class="img-circle person" alt="Large Dining Table Oval Photo" style="height: 248px">
        <div style="width:70%;margin-left:15%">
          <p>If you like to garden then Oak Brook Commons is the place for you.</p>
        </div>
      </div>

      <div class="col-sm-4">
        <p><strong>Lush Grounds</strong></p>
	      <img src="./img/balcony_view.jpg" class="img-circle person" alt="Random Name" style="height: 248px">
        <div style="width:70%;margin-left:15%">
          <p>50 acres of beautiful private property where mature trees adorn the rolling landscape.</p>
        </div>
      </div>
</div>


<!-- Available apt unit interaction -->
<div class="bg-1" id="availability">  
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h3 class="text-center">Available Units</h3>
      <p class="text-center" style="margin-bottom: 0;">Below Please find our current availability.</p>
      <p class="text-center" style="margin-bottom: 0;">To apply at Oak Brook Commons, there aren't any fees associated with your application</p>
      <p class="text-center" style="margin-bottom: 0;">A security deposit equal to <em>one months rent</em> is required with application.</p>  
      <br/>    
    </div>
    <div class="col-md-8 col-md-offset-2">
      <div id="available">
      <ul class="list-group" style="list-style-type: none">
        @foreach ($units as $unit)
          <li class="list-group-item available-unit">            
            <div class="list-group-item-heading" style="color:black;font-weight: bold;">
              {!! $unit->layout!!}</br>
              Available:  {{ Carbon\Carbon::parse($unit->date_avail)->format('F d, Y') }}
            </div>
            <div class="list-group-item-heading" id="unithd"  style="color:black;font-weight: bold;"> Apartment: {!! $unit->unit !!} Building: {!! $unit->bldg !!}</div>
            <div style="color: black;">{!!$unit->description!!} </div>
            <div class="uspecial">{!! $unit->special !!}</div>
            <div class="badge" style="float:left; padding-top: 0.5rem;">
            @php 
              $lo = substr_count( $unit->layout , 1) + 2*substr_count( $unit->layout , 2)+ substr_count( $unit->layout, 'Deluxe')-1;  
              echo ( '<a data-toggle="modal" style="color:white;" data-target="#floorplan'.$lo.'">Floorplan</a>' ); 
            @endphp
            </div>
            <br/>
            <div class="cntunit" style="margin: 5px 0">
            Select to contact us about this unit: <input type="checkbox" id="store-{!! $unit->apt_id !!}" name="email-{!! $unit->apt_id !!}" onclick="selectUnit(this)" data-toggle="modal" data-target="#myModal">
            <input id="email-{!! $unit->apt_id !!}" type="hidden" value="{!! $unit->bldg !!}+{!! $unit->unit !!}" />
            </div>  
          </li>
        @endforeach
      </ul> 
      </div> 
    </div>
  </div>
  <div class="row mcontact">   
    <div class="col-md-6 col-md-offset-3 text-center">
      <!-- Used to open the Modal -->
      <div class="form-group">
        @if(session('message'))
          <div class='alert alert-success'>
            {{ session('message') }}
          </div>
        @endif

        @if(session('errors'))
          <div class='alert alert-danger'>
            @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </div>
        @endif
        
      </div>

      <a class="btn btn-default" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-modal-window"></span>&nbsp;Contact Us Regarding Available Units</a>

      <h3 style="font-size: large;">We are currently adding contact information to our <strong>Wait List</strong> for future availability</h3>
      <p class="text-center">If you are not interested in what is currently available above, please check the box on the contact form to be added to the Wait List with no obligation. We'll contact you when the apartment style becomes available. Be sure to select what apartment floorplan you are interested in and what your move-in timeframe is.</p>
    </div> 
  </div>
</div>


<!-- Modal, Contact Form -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding: 10px 12px">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-send"></span>&nbsp;Contact Form</h4>
      </div>
      <div class="modal-body">
        <form role="form" id="mform" method="POST" >
          {{ csrf_field() }}
        @if(session('errors'))
          <div class='alert alert-danger'>
            @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </div>
        @endif
          	<div class="form-group">
          	  <label for="name"><span class="glyphicon glyphicon-user"></span>&nbsp;Your Name</label>
          	  <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
          	</div>
            <div class="form-group">
              <label for="email"><span class="glyphicon glyphicon-envelope"></span>&nbsp;Your Email</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email">
            </div>
            <div class="form-group">
              <label for="phone"><span class="glyphicon glyphicon-earphone"></span>&nbsp;Your Phone</label>
              <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone">
            </div>
            <div class="form-group">
              <label for="movein"><span class="glyphicon glyphicon-calendar"></span>&nbsp;Move-In Timeframe</label>
              <input type="text" class="form-control" id="movein" name="movein" placeholder="Enter Date mm-dd">
            </div>
            <div class="form-group" id="aptselect">
              <label for="layout"><span class="glyphicon glyphicon-home"></span>&nbsp;Which Apartment</label>
              <select class="form-control" id="layout" name="layout" placeholder="Which One?">              
                <option selected>choose layout...</option>
                <option>1 Bedroom</option>
                <option>2 Bedrooom 1 Bath</option>
              	<option>2 Bedrooom 2 Bath</option>
              	<option>2 Bedrooom 2 Bath w/ storage</option>
              </select>
            </div>
            <div class="form-group" id="waitlist">
              <label for="waitlist"><input type="checkbox" id="waitlist" name="waitlist">&nbsp;Check this box if you wanted to be added to the waitlist for the next available unit with this layout</label>           
            </div>
            <div class="form-group">
              <label for="note">&nbsp;Additional Information About Your Apartment Search</label>
              <textarea class="form-control" id="note" name="note" rows="1" cols="25"></textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-default">Send 
                <span class="glyphicon glyphicon-ok"></span>
              </button>  
              <button type="submit" class="btn btn-danger btn-default pull-right" data-dismiss="modal">
                <span class="glyphicon glyphicon-remove"></span> Cancel
              </button>
            </div>          
          </form>
        </div>
      <div class="modal-footer">

        <!-- <p>Need <a href="./about">help?</a></p> -->
      </div>
    </div>
  </div>
</div>

<!-- Modal, Contact Form -->

<!-- Modal, Floorplan1 -->
  <div id="floorplan1" class="modal fade" role="dialog" aria-labeledby="floorplan1" aria-hidden="true">
    <div class="model-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3>1 Bedroom</h3>
        </div>
        <div class="modal-body">
          <img src="img/plan1.png" class="center-block img-responsive">
        </div>
        <div class="modal-footer">        
        </div>        
      </div>      
    </div>
  </div>
<!-- Modal floorplan1 end -->

<!-- Modal, Floorplan2 -->
  <div id="floorplan2" class="modal fade" role="dialog" aria-labeledby="floorplan2" aria-hidden="true">
    <div class="model-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3>2 Bedroom 1 Bath</h3>
        </div>
        <div class="modal-body">
          <img src="img/plan2.png" class="center-block img-responsive">
        </div>
        <div class="modal-footer">        
        </div>        
      </div>      
    </div>
  </div>
<!-- Modal floorplan2 end -->

<!-- Modal, Floorplan3 -->
  <div id="floorplan3" class="modal fade" role="dialog" aria-labeledby="floorplan3" aria-hidden="true">
    <div class="model-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3>2 Bedroom 2 Bath</h3>
        </div>
        <div class="modal-body">
          <img src="img/plan3.png" class="center-block img-responsive">
        </div>
        <div class="modal-footer">        
        </div>        
      </div>      
    </div>
  </div>
<!-- Modal floorplan3 end -->

<!-- Modal, Floorplan4 -->
  <div id="floorplan4" class="modal fade" role="dialog" aria-labeledby="floorplan4" aria-hidden="true">
    <div class="model-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3>2 Bedroom 2 Bath</h3>
        </div>
        <div class="modal-body">
          <img src="img/deluxe.jpg" class="center-block img-responsive">
        </div>
        <div class="modal-footer">        
        </div>        
      </div>      
    </div>
  </div>
<!-- Modal floorplan4 end -->

<div class="row overlay">
  <div class="col-sm-1">
    &nbsp;
  </div>
  <div class="col-sm-4">
      <p>Our luxury apartments provide 
       both gracious living and offer the maximum use of functional 
       living space. Enjoy approximately 1,150 square feet in our one 
       bedroom apartment or indulge yourself in either of our two bedroom 
       apartments, which are approximately 1,350 square feet.</p>
      <p>Come and experience the beautiful natural woodland setting right 
      from your own private patio. We invite you to make Oak Brook Commons 
      your new home. Sorry, no pets are permitted.</p>
      <p>To view floor plans of our apartments, click on the individual floor plans on the sidebar menu.</p>
      <p>Our Rental Application can be dowloaded by clicking the button on the left. If you would like 
      to contact us for additional information regarding our apartments, amenities or availability please
      either call us or email us from the contact options to your left.</p>
      <p>We Offer Senior Citizens 65 and Older a Monthly Discount</p>
  </div>
</div>

@include('partials.footer')
</body>
</html>

<script>

function selectUnit(elemn) {  
  $(elemn).parents('tr').css( "background-color", "bisque" );
  var sData = $(elemn).attr('id');
  var nData = sData.split('-');
  var sId = "#email-"+nData[1];
  var sValue = $(sId).attr('value')
  var sSplitValue = sValue.split('+');
  console.log (nData.length + " :" + nData[1] + "|" + sId );
  console.log ("Element ID:" + $(sId).attr('value'));
  $('#aptselect').html( '<label for="bldg">Bldg:<input class="text-center" type="text" name="bldg" value="' +sSplitValue[1]+'" size="4"></label><label for="unit">Unit:<input class="text-center" type="text" name="unit" value="'+sSplitValue[0]+'" size="4"></label>');
  $('#waitlist').toggle();

  function resetSelect() {
    var units = document.getElementsByClassName('units');
    alert (units.length);
  }
}

$('#myModal').on('hidden.bs.modal', function () {
      $('input:checkbox').prop('checked',false);
})
</script>
