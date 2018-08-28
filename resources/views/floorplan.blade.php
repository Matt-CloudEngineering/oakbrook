@include('partials.head')
<style type="text/css">
.carousel {
  margin-top: 65px;
  background-color: white;
}
.carousel-inner > .item > img {
  width:360px;
}
.carousel-indicators li {
  border: 2px solid #000;
  width: 12px;
  height: 12px;
  margin: 0px;
}
.carousel-indicators .active {
  background-color: black;
}

.carousel-control.left. .carousel-control.right {
  background: none;
}
.item {
  height: 650px;
}
.active li {
  background-color: #000;
}
</style>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NJF9N6D"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

@include('partials.nav')

<div id="myCarousel" class="carousel slide fpheight" data-ride="carousel" data-interval="5800">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner fpheight" role="listbox">
    <div class="item active">
      <img src="/img/plan1.png" class="floorplan" alt="Apartment Photos" width="35%">
      <div class="carousel-caption floorcap">
        <h3>One Bedroom and One Bathroom Floorplan</h3>
      </div> 
    </div>

    <div class="item">
      <img src="/img/plan2.png" class="floorplan" alt="Apartment Photos" width="35%">
      <div class="carousel-caption floorcap" style="color:black !important">
			<h3>Two Bedroom and One Bathroom Floorplan</h3>
        <p></p>
      </div> 
    </div>

    <div class="item">
      <img src="/img/plan3.png" class="floorplan" alt="Apartment Photos" width="35%">
      <div class="carousel-caption floorcap">
			<h3>Two Bedroom and Two Bathroom Floorplan</h3>
        <p></p>
      </div> 
    </div>

    <div class="item">
      <img src="/img/deluxe.jpg" class="floorplan" alt="Apartment Photos" width="35%">
      <div class="carousel-caption floorcap">
			<h3>Two Bedroom and Two Bathroom Floorplan with Storage</h3>
        <p></p>
      </div> 
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev" style="background:none; color: brown;">
      <span class="glyphicon glyphicon-chevron-left" style="color: rgb(245,245,245);"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next" style="background:none">
      <span class="glyphicon glyphicon-chevron-right" style="color: rgb(245,245,245);"></span>
      <span class="sr-only">Next</span>
    </a>

</div>

@include('partials.footer')
</body>
</html>





