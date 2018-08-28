@include('partials.head')

<body>

@include('partials.nav')

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
<!--   <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol> -->

  <!-- Wrapper for slides -->  
  <div class="carousel-inner" role="listbox">
  <!--   @foreach ($pictures as $picture)
      @if($picture->interior)
        <div class="item">
          <img src="{{$picture->path}}/{{$picture->name}}" alt="Apartment Photos" title="{{$picture->title}}" width="800px">
          <div class="carousel-caption">
            <h3></h3>
            <p></p>
          </div> 
        </div>
      @endif
    @endforeach   -->
    <div class="item active">
      <img src="./img/rec_pics/best7.jpg" alt="Apartment Photos" width="65%">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div> 
    </div>

<!--     <div class="item">
      <img src="./img/rec_pics/best1.jpg" alt="Apartment Photos" width="65%">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div> 
    </div> -->

    <div class="item">
      <img src="./img/rec_pics/best17.jpg" alt="Apartment Photos" width="65%">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div> 
    </div>

    <div class="item">
      <img src="./img/rec_pics/best36.jpg" alt="Apartment Photos" width="65%">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div> 
    </div>

    <div class="item">
      <img src="./img/rec_pics/best29.jpg" alt="Apartment Photos" width="65%">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div> 
    </div>

    <div class="item">
      <img src="./img/anyexceptdeluxewithfire.jpg" alt="Apartment Photos" width="65%">
      <div class="carousel-caption" style="color:black !important">
        <h3 style="color:black !important"></h3>
        <p></p>
      </div> 
    </div>

    <div class="item">
      <img src="./img/rec_pics/best38.jpg" alt="Apartment Photos" width="65%">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div> 
    </div>
    <div class="item">
      <img src="./img/any1bedor2bed1bath.jpg" alt="Apartment Photos" width="65%">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div> 
    </div>

    <div class="item">
      <img src="./img/rec_pics/best35.jpg" alt="Apartment Photos" width="65%">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div> 
    </div>

    <div class="item">
      <img src="./img/rec_pics/best13.jpg" alt="Apartment Photos" width="65%">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div> 
    </div>

    <div class="item">
      <img src="./img/joe_kitchen.jpg" alt="Apartment Photos" width="65%">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div> 
    </div>

  <div class="item">
      <img src="./img/old-carryovers/any-dining-area.jpg" alt="Apartment Photos">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
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
    <div class="col-lg-1">
    </div>
	</div>
</div>

@include('partials.footer')
</body>
</html>

