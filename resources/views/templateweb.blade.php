@extends('templates.index')
@section('title', 'Template Website')

@section('content')


<!-- Template Website -->
<div class="container text-center">
<hr>
  <h2>Template Website</h2>
  <br>
  <div class="row">
    <div class="col-sm-4">
        <div class="panel panel-default">
          <div class="panel-body">
            <a href="#"><img src="{{ asset('img/webs.png') }}" width="80%"></a></div>
          <div class="panel-footer">E-COMMERCE</div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="panel panel-default">
          <div class="panel-body">
            <a href="#"><img src="{{ asset('img/webs.png') }}" width="80%"></a></div>
          <div class="panel-footer">E-COMMERCE</div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="panel panel-default">
          <div class="panel-body">
            <a href="#"><img src="{{ asset('img/webs.png') }}" width="80%"></a></div>
          <div class="panel-footer">E-COMMERCE</div>
        </div>
    </div>
</div>
  <div class="row">
    <div class="col-sm-4">
        <div class="panel panel-default">
          <div class="panel-body">
            <a href="#"><img src="{{ asset('img/webs.png') }}" width="80%"></a></div>
          <div class="panel-footer">E-COMMERCE</div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="panel panel-default">
          <div class="panel-body">
            <a href="#"><img src="{{ asset('img/webs.png') }}" width="80%"></a></div>
          <div class="panel-footer">E-COMMERCE</div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="panel panel-default">
          <div class="panel-body">
            <a href="#"><img src="{{ asset('img/webs.png') }}" width="80%"></a></div>
          <div class="panel-footer">E-COMMERCE</div>
        </div>
    </div>
</div>
<hr>
<ul class="pagination">
  <li><a href="#">Prev</a></li>
  <li class="active"><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#">Next</a></li>
  <li><a href="#">Last</a></li>
</ul>
</div>


@stop
