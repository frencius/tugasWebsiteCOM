@extends('templates.index')
@section('title', 'Home')

@section('content')

<!-- Jumbotron Company -->
<div class="jumbotron text-right">

  <div class="row">
    <div class="col-sm-6 text-center">
      <br><br><img src="{{ asset('img/webs.png') }}" class="img-circle" width="50%">
    </div>
    <div class="col-sm-6 text-left">
      <br>
      <br>
      <h1>Jasa pembuatan website <br>mulai dari 150 ribu</h1> 
      <a href="{{ url('/paket-website') }}"><button class="btn-cover btn-lg">Pilih Paketnya Sekarang</button></a>
</div>
  </div>

</div>

 

<!-- Pricing -->
<div class="container-fluid">
  @include('isi-paketweb')
</div>


<!-- TEMPLATE -->
<div class="container-fluid text-center">
 <div class="text-center">
    <h2>Template</h2>
  </div><br>
<div class="col-md-12 text-center">
<div class="col-md-10 col-md-offset-1">
<div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="3000" id="myCarousel">
  <div class="carousel-inner">

    <div class="item active">
      <div class="col-md-2 col-sm-6 col-xs-12">
      <div class="panel1 panel-default">
        <div class="panel-body">
        <a href="#"><img src="{{ asset('img/webs.png') }}" class="img-responsive"></a></div>
        <div class="panel-footer">E-COMMERCE</div>
      </div>
      </div>
    </div>

    <div class="item">
      <div class="col-md-2 col-sm-6 col-xs-12">
      <div class="panel1 panel-default">
        <div class="panel-body">
        <a href="#"><img src="{{ asset('img/webs.png') }}" class="img-responsive"></a></div>
        <div class="panel-footer">E-COMMERCE</div>
      </div>
      </div>
    </div>



  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
</div>
</div>
</div>
</div>


<!-- ALUR PEMESANAN -->
<div class="container text-center">
<h2>Alur Pemesanan</h2>
<div class="row">
    <div class="col-sm-2"><span class="glyphicon glyphicon-list-alt icon"></span><br>Pilih Paket Website</div>
    <div class="col-sm-1"><br><span class="glyphicon glyphicon-arrow-right small-icon"></span></div>
    <div class="col-sm-2"><span class="glyphicon glyphicon-picture icon"></span><br>Pilih Template</div>
    <div class="col-sm-1"><br><span class="glyphicon glyphicon-arrow-right small-icon"></span></div>
    <div class="col-sm-2"><span class="glyphicon glyphicon-usd icon"></span><br>Lakukan Pembayaran</div>
    <div class="col-sm-1"><br><span class="glyphicon glyphicon-arrow-right small-icon"></span></div>
    <div class="col-sm-3"><span class="glyphicon glyphicon-cloud icon"></span><br>Website siap online</div>
</div>
</div>


<!-- HELP -->
<div class="container" >
<hr>
<div class="row">
<div class="col-sm-1"><br><span class="glyphicon glyphicon-earphone small-icon"></span></div>
  <div class="col-sm-11"><h1><strong class="help">Butuh bantuan?</strong></h1>
  <h4>Segera hubungi kami di no <strong>08-997-283-263</strong></h4>
  </div>
</div>
<hr>
</div>


@stop

@section ('js')
<script src="{{asset ('js/template-carousel.js')}}"></script>
<script src="{{asset ('js/smoothscroll-tugasWeb.js')}}"></script> 
@stop