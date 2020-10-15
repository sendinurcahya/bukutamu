@extends('layouts.master')

@section('content')
<!-- Main content -->
<section class="content">

<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Dashboard</h3>
  </div>
  <div class="card-body">
    Selamat Datang Admin
  </div>
</div>
<!-- /.card -->

</section>
<div class="card bg-gradient-success">
<div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
<h3 class="card-title">
<i class="far fa-calendar-alt"></i>
Kalender
</h3>
<div class="card-tools">
<div class="btn-group">
<button type="button" class="btn btn-success btn-sm dropdown toggle" data-toggle="dropdown" data-offset="-52">
<i class="fas fa-bars"></i>
</button>
<div class="dropdown-menu" role="menu">
<a href="#" class="dropdown-item">Add new event</a>
<a href="#" class="dropdown-item">Clear events</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">View calendar</a>
</div>
</div>
<button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
<i class="fas fa-minus"></i>
</button>
<button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
<i class="fas fa-times"></i>
</button>
</div>
</div>
<div class="card-body pt-0">
<div id="calendar" style="width: 100%">
<div class="bootstrap-datetimepicker-widget usetwentyfour">
<ul class="list-unstyled">
<li class="show">
<div class="datepicker">
<div class="datepicker-days" style>
<table class="table table-sm">
<thead>
<tr>
<th class="prev" data-action="previous">
<span class="fa fa-chevron-left" title="Previous Month"></span>
</th>
<th class="picker-switch text-center" data-action="pickerSwitch" colspan="5" title="Select Month">Oktober 2020</th>
<th class="next" data-action="next">
<span class="fa fa-chevron-right" title="Next Month"></span>
</th>
</tr>
<tr>
<th class="dow">Minggu</th>
<th class="dow">Senin</th>
<th class="dow">Selasa</th>
<th class="dow">Rabu</th>
<th class="dow">Kamis</th>
<th class="dow">Jumat</th>
<th class="dow">Sabtu</th>
</tr>
</thead>
</table>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>

<!-- /.content -->
@endsection