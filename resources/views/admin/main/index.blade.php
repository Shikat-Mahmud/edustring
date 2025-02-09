@extends('admin.layouts.master')
@section('title', 'Admin Panel')
@section('content')
    <div class="pc-container">
        <div class="pc-content">

            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card bg-grd-primary order-card">
                        <div class="card-body">
                            <h5 class="text-white">Total Application</h5>
                            <h2 class="text-end text-white"><i
                                    class="ph ph-file float-start"></i><span>{{ $totalApplication }}</span>
                            </h2>
                            {{-- <p class="m-b-0">Completed Orders<span class="float-end">351</span></p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card bg-grd-success order-card">
                        <div class="card-body">
                            <h5 class="text-white">Total Admission</h5>
                            <h2 class="text-end text-white"><i
                                    class="ph ph-users float-start"></i><span>{{ $totalAdmission }}</span>
                            </h2>
                            {{-- <p class="m-b-0">This Month<span class="float-end">213</span></p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card bg-grd-warning order-card">
                        <div class="card-body">
                            <h5 class="text-white">Total Income</h5>
                            <h2 class="text-end text-white"><i
                                    class="ph ph-money float-start"></i><span>£{{ $totalIncome }}</span></h2>
                            {{-- <p class="m-b-0">This Month<span class="float-end">£5,032</span></p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card bg-grd-danger order-card">
                        <div class="card-body">
                            <h5 class="text-white">Total Invest</h5>
                            <h2 class="text-end text-white"><i
                                    class="ph ph-coin float-start"></i><span>£{{ $totalInvest }}</span></h2>
                            {{-- <p class="m-b-0">This Month<span class="float-end">£542</span></p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-7">
                    <div class="card">
                        <div class="card-header">
                            <h5>Working For Countries</h5>
                        </div>
                        <div class="card-body">
                            <div id="world-map-markers" class="set-map" style="height:365px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-5">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between py-3">
                            <h5>Student Admissions of Last 12 Months</h5>
                        </div>
                        <div class="card-body">
                            <div class="media align-items-center">
                                <div class="avtar avtar-s bg-light-primary flex-shrink-0">
                                    <i class="ph ph-users f-20"></i>
                                </div>
                                <div class="media-body ms-3">
                                    <p class="mb-0 text-muted">Total Admissions</p>
                                    <h5 class="mb-0">{{ $totalAdmissionsLast12Months }}</h5>
                                </div>
                            </div>
                            <div id="earnings-users-chart"></div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="media align-items-center">
                                        <div class="avtar avtar-s bg-grd-success flex-shrink-0">
                                            <i class="ph ph-money f-20 text-white"></i>
                                        </div>
                                        <div class="media-body ms-2">
                                            <p class="mb-0 text-muted">Last Month Profit</p>
                                            <h6 class="mb-0">£{{$totalLastMonthIncome}}</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="media align-items-center">
                                        <div class="avtar avtar-s bg-grd-danger flex-shrink-0">
                                            <i class="ph ph-coin text-white f-20"></i>
                                        </div>
                                        <div class="media-body ms-2">
                                            <p class="mb-0 text-muted">Last Month Invest</p>
                                            <h6 class="mb-0">£{{$totalLastMonthInvest}}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-4 col-sm-6">
                    <div class="card statistics-card-1">
                        <div class="card-body">
                            <img src="{{ asset('/images/widget/img-status-4.svg') }}" alt="img"
                                class="img-fluid img-bg">
                            <div class="d-flex align-items-center justify-content-between mb-3 drp-div">
                                <h6 class="mb-0">Daily Sales</h6>
                                <div class="dropdown">
                                    <a class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none" href="#"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                            class="material-icons-two-tone f-18">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">View</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-3">
                                <h3 class="f-w-300 d-flex align-items-center m-b-0">$249.95</h3>
                                <span class="badge bg-light-success ms-2">36%</span>
                            </div>
                            <p class="text-muted mb-2 text-sm mt-3">You made an extra 35,000 this daily</p>
                            <div class="progress" style="height: 7px">
                                <div class="progress-bar bg-brand-color-1" role="progressbar" style="width: 75%"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card statistics-card-1">
                        <div class="card-body">
                            <img src="{{ asset('/images/widget/img-status-5.svg') }}" alt="img"
                                class="img-fluid img-bg">
                            <div class="d-flex align-items-center justify-content-between mb-3 drp-div">
                                <h6 class="mb-0">Monthly Sales</h6>
                                <div class="dropdown">
                                    <a class="avtar avtar-xs btn-link-secondary dropdown-toggle arrow-none" href="#"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                            class="material-icons-two-tone f-18">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">View</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-3">
                                <h3 class="f-w-300 d-flex align-items-center m-b-0">$249.95</h3>
                                <span class="badge bg-light-primary ms-2">20%</span>
                            </div>
                            <p class="text-muted mb-2 text-sm mt-3">You made an extra 35,000 this Monthly</p>
                            <div class="progress" style="height: 7px">
                                <div class="progress-bar bg-brand-color-3" role="progressbar" style="width: 75%"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="card statistics-card-1 bg-brand-color-1">
                        <div class="card-body">
                            <img src="{{ asset('/images/widget/img-status-6.svg') }}" alt="img"
                                class="img-fluid img-bg">
                            <div class="d-flex align-items-center justify-content-between mb-3 drp-div">
                                <h6 class="mb-0 text-white">Yearly Sales</h6>
                                <div class="dropdown">
                                    <a class="avtar avtar-xs btn-link-secondary bg-transparent text-white dropdown-toggle arrow-none"
                                        href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"><i
                                            class="material-icons-two-tone bg-white f-18">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">View</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-3">
                                <h3 class="text-white f-w-300 d-flex align-items-center m-b-0">$249.95</h3>
                            </div>
                            <p class="text-white text-opacity-75 mb-2 text-sm mt-3">You made an extra 35,000 this Daily</p>
                            <div class="progress" style="height: 7px">
                                <div class="progress-bar bg-brand-color-3" role="progressbar" style="width: 75%"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="col-sm-12">
                    <div class="card table-card">
                        <div class="card-header d-flex align-items-center justify-content-between py-3">
                            <h5>Recent Students Application</h5>
                            <a href="{{ route('applications.index')}}" class="btn btn-sm btn-primary">Application List</i> </a>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Status</th>
                                    </tr>
                                    @if (isset($latestStudents) && count($latestStudents) > 0)
                                        @foreach ($latestStudents as $item)
                                            <tr>
                                                <td>{{ $item->first_name . ' ' . $item->last_name }}</td>
                                                <td>{{ $item->email ?? '--' }}</td>
                                                <td>{{ $item->phone }}</td>
                                                <td>{{ $item->address ?? '--' }}</td>
                                                <td>
                                                    @if ($item->status == 'Initiated')
                                                        <p class="ml-3 badge bg-primary">{{ $item->status }}</p>
                                                    @endif
                                                    @if ($item->status == 'Pending')
                                                        <p class="ml-3 badge bg-warning">{{ $item->status }}</p>
                                                    @endif
                                                    @if ($item->status == 'Success')
                                                        <p class="ml-3 badge bg-success">{{ $item->status }}</p>
                                                    @endif
                                                    @if ($item->status == 'Failed')
                                                        <p class="ml-3 badge bg-danger">{{ $item->status }}</p>
                                                    @endif
                                                    @if ($item->status == 'Canceled')
                                                        <p class="ml-3 badge bg-secondary">{{ $item->status }}</p>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5" class="text-center text-secondary">
                                                <h6>No Application Yet!</h6>
                                            </td>
                                        </tr>
                                    @endif
                                </table>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
