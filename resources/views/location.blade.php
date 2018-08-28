@extends('layouts.oakmap')

@section('title','Oak Brook Commons Apartments Address')
@section('description', "This is a our address and a map of our location")

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h4>Oak Brook Commons Location</h4>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6" style="margin-left: 3rem;">
      <img class="img-rounded office" src="/img/rental_office.jpg" alt="Rental Office Image">
      <h3>Oak Brook Commons LLC</h3>
      <p>Route 9, P.O. Box 781</br>
      Clifton Park, NY 12065</p>
      <p>P <a href="tel:518-371-0216">518-371-0216</a></br>
      F 518-371-8357</p>
      <div class="ohours">
        <p><span class="subhead">Office Hours:</span><br />
        Monday through Friday: 9 AM to 5 PM</br>
        Saturday: 11 AM to 4 PM</p>
        <p>Evening Hours by Appointment</p>
      </div>
      <a href="/contact">Contact Us</a>
    </div>
    <div class="col-sm-5">
      <div id="map_canvas" class="img-responsive"></div>
    </div>
  </div>

@endsection
