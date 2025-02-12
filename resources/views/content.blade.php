@extends('layout')
@section('content')
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sensor</li>
            </ol>
        </div>

        <div class="row mb-3">
            {{-- Card 1 --}}
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Sensor Ultrasonic</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">89 </div>
                                <div class="mt-2 mb-0 text-muted text-xs">
                                    <span>Status :</span>
                                    <span class="text-success mr-2">Online <i class="fa fa-arrow-up"></i></span>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-blog fa-2x text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Card 2 --}}
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Sensor IR</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">650</div>
                                <div class="mt-2 mb-0 text-muted text-xs">
                                    <span>Status :</span>
                                    <span class="text-success mr-2">Online <i class="fa fa-arrow-up"></i></span>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-wifi fa-2x text-success"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Card 3 --}}
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Sensor Hujan</div>
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">366</div>
                                <div class="mt-2 mb-0 text-muted text-xs">
                                    <span>Status :</span>
                                    <span class="text-success mr-2">Online <i class="fa fa-arrow-up"></i></span>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-cloud-rain fa-2x text-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Card 4 --}}
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Sensor Api</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                <div class="mt-2 mb-0 text-muted text-xs">
                                    <span>Status :</span>
                                    <span class="text-danger mr-2">Offline <i class="fa fa-arrow-down"></i></span>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-fire fa-2x text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
