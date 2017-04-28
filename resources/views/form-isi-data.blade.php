@extends('templates.index')
@section('title', 'Isi Data Pemesanan')

@section('content')

<div class="container">
<hr>
  <h2 class="text-center">Isi Data Pemesanan</h2>
  <br>
<!-- Form Isi Data -->

<form>
  <div class="form-group">
    <label for="name">Nama:</label>
    <input type="text" class="form-control" id="name">
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="no-hp">No HP:</label>
    <input type="text" class="form-control" id="no-hp">
  </div>
  <div class="form-group">
    <label for="paket-selected">Paket yang dipilih:</label>
    <input type="text" class="form-control" value="Paket A" id="paket-selected">
  </div>
  <div class="form-group">
    <label for="nama-domain">Nama Domain:</label>
    <input type="text" class="form-control" id="nama-domain" placeholder="contoh: jualanseblak.com">
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>
<hr>
</div>

@stop