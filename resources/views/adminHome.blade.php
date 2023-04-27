@extends('layouts.adminLayout')
@section('title','Admin')   

@section('contentdata')   
<div class="container-fluid p-3 p-md-4">

            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
              <div class="fs-4 text-secondary fw-bolder">Dashboard</div>
              <div class="text-secondary lead fw-normal" id="curr_date_time"></div>
            </div>
            <hr>
            <div class="row g-4">

              

              <div class="col-lg-4 col-md-6">
                <a href="#" class="text-decoration-none">
                  <div class="card shadow-sm custom-card" style="background-color:#54ba9e;">
                    <div class="card-body p-3 pb-2 px-3 d-flex flex-row justify-content-between align-items-center">
                      <div>
                        <h1><i class="fas fa-book fa-2x text-white-50"></i></h1>
                      </div>
                      <div class="text-center">
                        <h2 class="display-4 fw-bold text-white">{{$auditors_count}}</h2>
                        <h4 class="text-white-50">Auditors</h4>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-lg-4 col-md-6">
                <a href="#" class="text-decoration-none">
                  <div class="card shadow-sm custom-card" style="background-color:#54ba9e;">
                    <div class="card-body p-3 pb-2 px-3 d-flex flex-row justify-content-between align-items-center">
                      <div>
                        <h1><i class="fas fa-users fa-2x text-white-50"></i></h1>
                      </div>
                      <div class="text-center">
                        <h2 class="display-4 fw-bold text-white">{{$customers_count}}</h2>
                        <h4 class="text-white-50">Customers</h4>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-lg-4 col-md-6">
                <a href="#" class="text-decoration-none"  >
                  <div class="card shadow-sm custom-card" style="background-color:#54ba9e;">
                    <div class="card-body p-3 pb-2 px-3 d-flex flex-row justify-content-between align-items-center">
                      <div>
                        <h1><i class="fa fa-download fa-2x text-white-50"></i></h1>
                      </div>
                      <div class="text-center">
                        <h2 class="display-4 fw-bold text-white">8</h2>
                        <h4 class="text-white-50">Downloads</h4>
                      </div>
                    </div>
                  </div>
                </a>
              </div>


              <div class="col-lg-12">
                <div class="card shadow">
                  <div class="card-header">
                    <h4 class="text-secondary fw-bold">Charts</h4>
                  </div>
                  <div class="card-body">
                    <div class="row g-4">
                      <div class="col-lg-6">
                        <div class="card shadow-sm">
                          <div class="card-body">
                            <canvas id="myChart"></canvas>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="card shadow-sm">
                          <div class="card-body">
                            <canvas id="lineChart"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
@endsection