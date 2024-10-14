@extends('layouts.backend.base')
@section('content')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <!-- Posts Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">
                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Post Filters</h6>
                                        </li>
                                        <li><a class="dropdown-item" href="{{ route('dashboard.posts', 'total') }}">Total</a></li>
                                        <li><a class="dropdown-item" href="{{ route('dashboard.posts', 'today') }}">Today</a></li>
                                        <li><a class="dropdown-item" href="{{ route('dashboard.posts', 'month') }}">This Month</a></li>
                                        <li><a class="dropdown-item" href="{{ route('dashboard.posts', 'year') }}">This Year</a></li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Posts <span>| {{ $timePeriod }}</span></h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-file-earmark-text"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $postCount }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Posts Card -->

                        <!-- Category Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Categories <span>| Total</span></h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-collection"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $categoryCount }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Category Card -->

                        <!-- Recent Activity -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card-body">
                                <div class="activity">
                                    <div class="activity-item d-flex">
                                        <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                        <div class="activity-content">
                                            <a href="{{ route('users.index') }}" class="fw-bold text-dark">Users</a>
                                        </div>
                                    </div><!-- End activity item-->

                                    <div class="activity-item d-flex">
                                        <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                                        <div class="activity-content">
                                            <a href="{{ route('role.index') }}" class="fw-bold text-dark">Roles</a>
                                        </div>
                                    </div>

                                    <div class="activity-item d-flex">
                                        <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                                        <div class="activity-content">
                                            <a href="{{ route('user_permissions.index') }}" class="fw-bold text-dark">User Permissions</a>
                                        </div>
                                    </div>

                                    <div class="activity-item d-flex">
                                        <i class='bi bi-circle-fill activity-badge text-dark align-self-start'></i>
                                        <div class="activity-content">
                                            <a href="{{ route('category.index') }}" class="fw-bold text-dark">Categories</a>
                                        </div>
                                    </div>

                                    <div class="activity-item d-flex">
                                        <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                                        <div class="activity-content">
                                            <a href="{{ route('post.index') }}" class="fw-bold text-dark">Posts</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div><!-- End Recent Activity -->
                    </div><!-- End Row for Left Side Columns -->
                </div><!-- End Left side columns -->

            </div><!-- End Row -->

            <div class="row">
                <!-- Subscribers Card -->
                <div class="col-lg-12">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Subscribers <span>| Engagements</span></h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-envelope-open"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>Total Subscribers: {{ $subscriberCount }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Subscribers Card -->

                {{-- <div class="col-lg-12">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Subscribers <span>| Engagements</span></h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-envelope-open"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>Total openCounts: {{ $openCounts }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Subscribers Card -->
            </div><!-- End Row for Subscribers Card --> --}}

        </section><!-- End Section Dashboard -->

    </main><!-- End #main -->

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Total Po</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Sales <span>| Today</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

      </div>
    </section>

  </main><!-- End #main -->
@endsection
