@extends('layouts.masterAdmin')
@section('title','DashBoard')
@section('contents')
  <!-- Area Chart Example-->
  <div class="card mb-3">
    <div class="card-header">
      @include('errors.error')
      <i class="fas fa-chart-area"></i>
      Area Chart Example</div>
    <div class="card-body">
      <canvas id="myAreaChart" width="100%" height="30"></canvas>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
  </div>



  <p class="small text-center text-muted my-5">
    <em>More chart examples coming soon...</em>
  </p>

  </div>

@endsection
