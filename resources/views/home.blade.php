@extends('layouts.app')
@section('content')
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-12">
      <div class="row align-items-center mb-2">
        <div class="col">
          <h2 class="h5 page-title">Welcome! {{ auth()->user()->name }}</h2>
        </div>
        <div class="col-auto">
          <form class="form-inline">
            <div class="form-group d-none d-lg-inline">
              <label for="reportrange" class="sr-only">Date Ranges</label>
              <div id="reportrange" class="px-2 py-2 text-muted">
                <span class="small"></span>
              </div>
            </div>
            <div class="form-group">
              <button type="button" class="btn btn-sm"><span class="fe fe-refresh-ccw fe-16 text-muted"></span></button>
              <button type="button" class="btn btn-sm mr-2"><span class="fe fe-filter fe-16 text-muted"></span></button>
            </div>
          </form>
        </div>
      </div>
      <!-- widgets -->
      <div class="row my-4">

        <div class="col-md-3">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col">
                  <small class="text-muted mb-1">Quiz</small>
                  <h3 class="card-title mb-0">QUIZ</h3>
                </div>
                <div class="col-4 text-right">
                  <span class="sparkline inlinebar"></span>
                </div>
              </div> <!-- /. row -->
            </div> <!-- /. card-body -->
          </div> <!-- /. card -->
        </div> <!-- /. col -->
      </div> <!-- end section -->
      <h6>Top Users</h6>
      <div class="row">
        <div class="col-md-12">
          <div class="card shadow mb-4">
            <div class="card-body">
              <table class="table table-borderless table-striped">
                <thead>
                  <tr role="row">
                    <th>ID</th>
                    <th>Mobile</th>
                    <th>Total Task</th>
                    <th>Total Quiz</th>
                    <th>Total Earn(TK)</th>
                    <th>Status</th>
                    <th>Join</th>
                    <th>Action</th>
                  </tr>
                </thead>

              </table>
            </div> <!-- /. card-body -->
          </div> <!-- /. card -->
        </div> <!-- /. col -->
      </div>
    </div>
  </div> <!-- .row -->
</div> <!-- .container-fluid -->
@endsection
