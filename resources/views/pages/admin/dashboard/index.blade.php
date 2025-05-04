@extends('layouts.layoutMaster')

@section('title', 'Dashboard')

@section('content')
  <!-- Card Border Shadow -->
  <div class="row g-6">
    <div class="col-lg-3 col-sm-6">
      <div class="card card-border-shadow-primary h-100">
        <div class="card-body">
          <div class="d-flex align-items-center mb-2">
            <div class="avatar me-4">
              <span class="avatar-initial rounded bg-label-primary"
                ><i class="icon-base ti tabler-truck icon-28px"></i
              ></span>
            </div>
            <h4 class="mb-0">42</h4>
          </div>
          <p class="mb-1">On route vehicles</p>
          <p class="mb-0">
            <span class="text-heading fw-medium me-2">+18.2%</span>
            <small class="text-body-secondary">than last week</small>
          </p>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6">
      <div class="card card-border-shadow-warning h-100">
        <div class="card-body">
          <div class="d-flex align-items-center mb-2">
            <div class="avatar me-4">
              <span class="avatar-initial rounded bg-label-warning"
                ><i class="icon-base ti tabler-alert-triangle icon-28px"></i
              ></span>
            </div>
            <h4 class="mb-0">8</h4>
          </div>
          <p class="mb-1">Vehicles with errors</p>
          <p class="mb-0">
            <span class="text-heading fw-medium me-2">-8.7%</span>
            <small class="text-body-secondary">than last week</small>
          </p>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6">
      <div class="card card-border-shadow-danger h-100">
        <div class="card-body">
          <div class="d-flex align-items-center mb-2">
            <div class="avatar me-4">
              <span class="avatar-initial rounded bg-label-danger"
                ><i class="icon-base ti tabler-git-fork icon-28px"></i
              ></span>
            </div>
            <h4 class="mb-0">27</h4>
          </div>
          <p class="mb-1">Deviated from route</p>
          <p class="mb-0">
            <span class="text-heading fw-medium me-2">+4.3%</span>
            <small class="text-body-secondary">than last week</small>
          </p>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6">
      <div class="card card-border-shadow-info h-100">
        <div class="card-body">
          <div class="d-flex align-items-center mb-2">
            <div class="avatar me-4">
              <span class="avatar-initial rounded bg-label-info"
                ><i class="icon-base ti tabler-clock icon-28px"></i
              ></span>
            </div>
            <h4 class="mb-0">13</h4>
          </div>
          <p class="mb-1">Late vehicles</p>
          <p class="mb-0">
            <span class="text-heading fw-medium me-2">-2.5%</span>
            <small class="text-body-secondary">than last week</small>
          </p>
        </div>
      </div>
    </div>
  </div>
  <!--/ Card Border Shadow -->
@endsection