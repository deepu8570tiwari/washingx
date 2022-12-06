@extends('layouts.front')
@section('title')
        Our Services
    @endsection
@section('content')
<div class="py-3   border-top">
    <div class="container">
        <div class="mb-0">
            <a href="{{url('/')}}">
                Home
            </a>/
            <a href="{{url('/services')}}">
               Services
            </a>
        </div>
    </div>
</div>
<section class="services" id="services">
  <div class="container">
    <header class="section-header">
      <h3>Services</h3>

      <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
    </header>

    <div class="row">
      <div class="col-md-6 col-lg-4">
        <div class="box">
          <div class="icon" style="background: #000;">
            <i class="fa fa-briefcase service-icon" style="color: #c59c35;"></i>
          </div>

          <h4 class="title"><a href="">Service 1</a></h4>

          <p class="description">Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="box">
          <div class="icon" style="background: #000;">
            <i class="fa fa-clipboard service-icon" style="color: #c59c35;"></i>
          </div>

          <h4 class="title"><a href="">Service 2</a></h4>

          <p class="description">Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="box">
          <div class="icon" style="background: #000;">
            <i class="fa fa-chart-bar service-icon" style="color: #c59c35;"></i>
          </div>

          <h4 class="title"><a href="">Service 3</a></h4>

          <p class="description">Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="box">
          <div class="icon" style="background: #000;">
            <i class="fa fa-binoculars service-icon" style="color: #c59c35;"></i>
          </div>

          <h4 class="title"><a href="">Service 4</a></h4>

          <p class="description">Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="box">
          <div class="icon" style="background: #000;">
            <i class="fa fa-cog service-icon" style="color:#c59c35;"></i>
          </div>

          <h4 class="title"><a href="">Service 5</a></h4>

          <p class="description">Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="box">
          <div class="icon" style="background: #000;">
            <i class="fa fa-calendar-alt service-icon" style="color: #c59c35;"></i>
          </div>

          <h4 class="title"><a href="">Service 6</a></h4>

          <p class="description">Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
        </div>
      </div>


    </div>
  </div>
</section>

@include('layouts.front-footer')
@endsection