@extends('admin.layouts.app')
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
                  <small class="text-muted mb-1">Total Users</small>
                  <h3 class="card-title mb-0">{{ $total_users }}</h3>
                  <p class="small text-muted mb-0"><span class="fe fe-arrow-down fe-12 text-danger"></span><span>-18.9%
                      Last week</span></p>
                </div>
              </div> <!-- /. row -->
            </div> <!-- /. card-body -->
          </div> <!-- /. card -->
        </div> <!-- /. col -->
        <div class="col-md-3">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col">
                  <small class="text-muted mb-1">Today Registered</small>
                  <h3 class="card-title mb-0">{{ $today_registered }}</h3>
                  <p class="small text-muted mb-0"><span class="fe fe-arrow-up fe-12 text-warning"></span><span>+1.9%
                      Last week</span></p>
                </div>
                <div class="col-4 text-right">
                  <span class="sparkline inlinepie"></span>
                </div>
              </div> <!-- /. row -->
            </div> <!-- /. card-body -->
          </div> <!-- /. card -->
        </div> <!-- /. col -->
        <div class="col-md-3">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col">
                  <small class="text-muted mb-1">Last 7 days </small>
                  <h3 class="card-title mb-0">{{ $last_seven_day_registered }}</h3>
                  <p class="small text-muted mb-0"><span class="fe fe-arrow-up fe-12 text-success"></span><span>37.7%
                      Last week</span></p>
                </div>
                <div class="col-4 text-right">
                  <span class="sparkline inlinebar"></span>
                </div>
              </div> <!-- /. row -->
            </div> <!-- /. card-body -->
          </div> <!-- /. card -->
        </div> <!-- /. col -->
        <div class="col-md-3">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col">
                  <small class="text-muted mb-1">Last 30 days </small>
                  <h3 class="card-title mb-0">{{ $last_30_day_registered }}</h3>
                  <p class="small text-muted mb-0"><span class="fe fe-arrow-up fe-12 text-success"></span><span>37.7%
                      Last week</span></p>
                </div>
                <div class="col-4 text-right">
                  <span class="sparkline inlinebar"></span>
                </div>
              </div> <!-- /. row -->
            </div> <!-- /. card-body -->
          </div> <!-- /. card -->
        </div> <!-- /. col -->
      </div> <!-- end section -->
      <h6>Active task</h6>
      <div class="row my-4">
        <div class="col-md-3">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col">
                  <small class="text-muted mb-1">Web Job</small>
                  <h3 class="card-title mb-0">{{$web_job}}</h3>
                </div>
              </div> <!-- /. row -->
            </div> <!-- /. card-body -->
          </div> <!-- /. card -->
        </div> <!-- /. col -->

        <div class="col-md-3">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col">
                  <small class="text-muted mb-1">Video Job</small>
                  <h3 class="card-title mb-0">{{$video_job}}</h3>
                </div>
                <div class="col-4 text-right">
                  <span class="sparkline inlinepie"></span>
                </div>
              </div> <!-- /. row -->
            </div> <!-- /. card-body -->
          </div> <!-- /. card -->
        </div> <!-- /. col -->

        <div class="col-md-3">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col">
                  <small class="text-muted mb-1">Watch Video</small>
                  <h3 class="card-title mb-0">{{$watch_video_job}}</h3>
                </div>
                <div class="col-4 text-right">
                  <span class="sparkline inlinebar"></span>
                </div>
              </div> <!-- /. row -->
            </div> <!-- /. card-body -->
          </div> <!-- /. card -->
        </div> <!-- /. col -->

        <div class="col-md-3">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col">
                  <small class="text-muted mb-1">Quiz</small>
                  <h3 class="card-title mb-0">{{$quiz}}</h3>
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
                <tbody>
                  @foreach ($top_users as $user)
                  <tr>
                    <th scope="col">{{$user->user_id}}</th>
                    <td>{{$user->mobile}}</td>
                    <td>{{$user->total_count}}</td>
                    <td>{{$user->total_quiz_count}}</td>
                    <td>{{$user->total_taka}}</td>
                    <td><span class="dot dot-lg bg-{{$user->status = 1 ? 'success' : 'warning'}} mr-2"></span>{{$user->status = 1 ? 'Active' : 'Inactive'}}</td>
                    <td>{{date('d-M-Y', strtotime($user->created_at))}}</td>
                    <td>
                      <div class="dropdown">
                        <button class="btn btn-sm dropdown-toggle more-vertical" type="button" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                          <span class="text-muted sr-only">Action</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#">Edit</a>
                          <a class="dropdown-item" href="#">Remove</a>
                          <a class="dropdown-item" href="#">Assign</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                 
                </tbody>
              </table>
            </div> <!-- /. card-body -->
          </div> <!-- /. card -->
        </div> <!-- /. col -->
      </div>
    </div>
  </div> <!-- .row -->
</div> <!-- .container-fluid -->
@endsection