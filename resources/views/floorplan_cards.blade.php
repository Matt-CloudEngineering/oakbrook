@include('partials.head')
<style type="text/css">
.carousel {
  margin-top: 6%
}
.carousel-inner > .item > img {
  width:360px;
}
</style>
<body>

@include('partials.nav')

<div class="container">
  <div class="row">
    <div class="col-md-8">
      <div class="card text-center" style="width:50rem;">
        <h3 class="card-header">One Bedroom Floorplan</h3>
        <img class="card-img-top" src="/img/plan1.png" class="floorplan" alt="Apartment Photos" style="height: 50rem;">
        <div class="card-block">
          <p class="card-text">Spacious floorplan with a porch or balcony and plenty of windows for natural light in every room.</p>
          <a href="/contact" class="btn btn-primary">Find One</a>
        </div>
      </div>     
    </div>
  </div>
</div>


@include('partials.footer')
</body>
</html>





