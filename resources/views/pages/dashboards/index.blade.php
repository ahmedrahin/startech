<x-default-layout>

    @section('title')
        Dashboard
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('dashboard') }}
    @endsection

    @push('styles')
        <style>
           .card .card-header{
                min-height: 58px;
           }
           .bg-gradient-blue {
                background: linear-gradient(45deg, #6a11cb , #2575fc)!important;
                opacity: .8;
           }
           .bt-gradient-green {
                background: linear-gradient(45deg, #00b09b, #96c93d)!important;
                opacity: .8;
           }
           .bt-gradient-red {
                background: #F1416C;
                opacity: .8;
           }
           .bt-gradient-black {
                background: linear-gradient(to right, #0f2027, #203a43, #2c5364)!important;
                opacity: .8;
           }
           .text-custom {
            color: #ffffffc4 !important;
           }


           .apexcharts-canvas, .apexcharts-canvas svg {
                width: 100% !important;
           }
        </style>
    @endpush

    {{-- today report --}}
    <div class="card mb-14">
        <!-- Card Header -->
        <div class="card-header border-0 pt-6 text-white" style="background: #3c3c3c0f;">
            <h4 class="mb-0 text-center" style="font-weight: 700;">Today's Report</h4>
        </div>
    
        <!-- Card Body -->
        <div class="card-body">
            <div class="row">
                <!-- Sales Card -->
                <div class="col-md-3">
                    <div class="card bg-gradient-blue">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="mb-4 text-white">Today's Sales</h6>
                                    <h2 class="mb-0 text-white">{{ $todaySales }} TK</h2>
                                </div>
                                <i class="bi bi-currency-dollar text-white" style="font-size: 30px;"></i>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Orders Card -->
                <div class="col-md-3">
                    <div class="card bt-gradient-green">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="mb-4 text-white">Today's Orders</h6>
                                    <h2 class="mb-0 text-white">{{ $todayOrders }}</h2>
                                </div>
                                <i class="bi bi-cart-plus text-white" style="font-size: 30px;"></i>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-3">
                    <div class="card bt-gradient-red">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="mb-4 text-white">Ordered Product Quantity</h6>
                                    <h2 class="mb-0 text-white">{{ $orderedProductQuantity }}</h2>
                                </div>
                                <i class="bi bi-person-standing-dress text-white" style="font-size: 30px;"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card bt-gradient-black">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="mb-4 text-white">Total Visitors</h6>
                                    <h2 class="mb-0 text-white">{{ $totalVisitors }}</h2>
                                </div>
                                <i class="bi bi-person-check text-white" style="font-size: 30px;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    {{-- over all report --}}
    <div class="card mb-14">
        <!-- Card Header -->
        <div class="card-header border-0 pt-6 text-white" style="background: #3c3c3c0f;">
            <h4 class="mb-0 text-center" style="font-weight: 700;">Over All</h4>
        </div>
    
        <!-- Card Body -->
        <div class="card-body">
            <div class="row g-5 g-xl-8">
                <div class="col-xl-3">
                    <!--begin::Statistics Widget 4-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body p-0">
                            <div class="d-flex flex-stack card-p flex-grow-1">
                                <span class="symbol symbol-50px me-2">
                                    <span class="symbol-label bg-light-info">
                                        <i class="ki-duotone ki-profile-user fs-2x text-info">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                        </i>
                                    </span>
                                </span>
                                <div class="d-flex flex-column text-end">
                                    <span class="text-dark fw-bold fs-2">+{{ $user }}</span>
                                    <span class="text-muted fw-semibold mt-1">Total Users</span>
                                </div>
                            </div>
                            <div class="statistics-widget-4-chart card-rounded-bottom" data-kt-chart-color="info" style="height: 150px"></div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Statistics Widget 4-->
                </div>
                <div class="col-xl-3">
                    <!--begin::Statistics Widget 4-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body p-0">
                            <div class="d-flex flex-stack card-p flex-grow-1">
                                <span class="symbol symbol-50px me-2">
                                    <span class="symbol-label bg-light-success">
                                        <i class="ki-duotone ki-basket fs-2x text-success">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                        </i>
                                    </span>
                                </span>
                                <div class="d-flex flex-column text-end">
                                    <span class="text-dark fw-bold fs-2">+{{ $order }}</span>
                                    <span class="text-muted fw-semibold mt-1">Total Orders</span>
                                </div>
                            </div>
                            <div class="statistics-widget-4-chart card-rounded-bottom" data-kt-chart-color="success" style="height: 150px"></div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Statistics Widget 4-->
                </div>
                <div class="col-xl-3">
                    <!--begin::Statistics Widget 4-->
                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body p-0">
                            <div class="d-flex flex-stack card-p flex-grow-1">
                                <span class="symbol symbol-50px me-2">
                                    <span class="symbol-label bg-light-primary">
                                        <i class="ki-duotone ki-dollar fs-2x text-primary">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                </span>
                                <div class="d-flex flex-column text-end">
                                    <span class="text-dark fw-bold fs-2">+{{ $totalSales }} TK</span>
                                    <span class="text-muted fw-semibold mt-1">Total Sales</span>
                                </div>
                            </div>
                            <div class="statistics-widget-4-chart card-rounded-bottom" data-kt-chart-color="primary" style="height: 150px"></div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Statistics Widget 4-->
                </div>

                <div class="col-xl-3">
                    <!--begin::Statistics Widget 4-->
                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body p-0">
                            <div class="d-flex flex-stack card-p flex-grow-1">
                                <span class="symbol symbol-50px me-2">
                                    <span class="symbol-label bg-light-warning">
                                        <i class="ki-duotone ki-people fs-2x text-warning">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                        </i>
                                    </span>
                                </span>
                                <div class="d-flex flex-column text-end">
                                    <span class="text-dark fw-bold fs-2">+{{ $visitor }}</span>
                                    <span class="text-muted fw-semibold mt-1">Total Visitors</span>
                                </div>
                            </div>
                            <div class="statistics-widget-4-chart card-rounded-bottom" data-kt-chart-color="warning" style="height: 150px"></div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Statistics Widget 4-->
                </div>
            </div>
        </div>
    </div>

    @push('scripts')

        @if (session('success'))
            <script>
                toastr.success("{{ session('success') }}");
            </script>
        @endif
        <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    @endpush

</x-default-layout>