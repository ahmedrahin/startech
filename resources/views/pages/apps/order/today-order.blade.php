<x-default-layout>

    @section('custom-css')
        <link rel="stylesheet" href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}">
        <style>
            .table:not(.table-bordered) tr, .table:not(.table-bordered) th, .table:not(.table-bordered) td{font-size: 13px !important;}
            .page-title.d-flex{
                width: 100%;
            }
        </style>
    @endsection

    @section('title') Today Order List @endsection

    {{-- orders seen --}}
    {{-- <livewire:order.seen-order /> --}}
    

    @section('breadcrumbs')
        <div class="w-100 d-flex justify-content-between">
            {{ Breadcrumbs::render('todayorder') }}

            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <div id="active-filters">
                    
                </div>
                
                <button  class="btn btn-sm btn-danger reset-filter-btn me-1" id="resetFilter" onclick="triggerReset()" style="display: none;">
                    Reset Filters
                </button>
            
                <div class="m-0">
                    <!--begin::Menu toggle-->
                    <a href="#" class="btn btn-sm btn-flex btn-secondary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <i class="ki-duotone ki-filter fs-6 text-muted me-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>Filter</a>
                    
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-500px" data-kt-menu="true" id="kt_menu_64b776123225e">
                        <div class="px-7 py-5">
                            <div class="fs-5 text-dark fw-bold">Filter Orders</div>
                        </div>
                        <div class="separator border-gray-200"></div>

                        <div class="px-7 py-5">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-5">
                                        <label class="form-label fw-semibold">Order Date:</label>
                                        <div class="mb-0" style="position: relative;">
                                            <input class="form-control form-control-solid" placeholder="Pick date rage" id="kt_daterangepicker_4" data-dropdown-parent="#kt_menu_64b776123225e" autocomplete="off"/>
                                            <span class="ki-duotone ki-cross fs-1" style="position: absolute;top: 9px;right: 2px;cursor: pointer;" onclick="dateRemove()"><span class="path1"></span><span class="path2"></span></span>
                                        </div>
                                    </div>

                                    <div class="mb-5">
                                        <label class="form-label fw-semibold">User Type:</label>
                                        <div class="mb-0">
                                            <div class="d-flex mt-3">
                                                <div class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="radio" name="type-status" value="author" id="author">
                                                    <label class="form-check-label" for="author">Author</label>
                                                </div>
                                                <div class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" name="type-status" value="customer" id="customer">
                                                    <label class="form-check-label" for="customer">Customer</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- <div class="mb-5">
                                        <label class="form-label fw-semibold">:</label>
                                        <div>
                                            <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select category" data-dropdown-parent="#kt_menu_64b776123225e" data-allow-clear="true" id="category-select">
                                                <option></option>
                                                
                                            </select>
                                        </div>
                                    </div> --}}
        
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-5">
                                        <label class="form-label fw-semibold">Viewed Order:</label>
                                        <div class="mb-0">
                                            <div class="d-flex mt-3">
                                                <div class="form-check form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="radio" name="viewed-status" value="1" id="seen">
                                                    <label class="form-check-label" for="seen">Seen</label>
                                                </div>
                                                <div class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" name="viewed-status" value="0" id="unseen">
                                                    <label class="form-check-label" for="unseen">Unseen</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true" id="apply">Apply</button>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
    </div>
    @endsection
    
    <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    {!! getIcon('magnifier', 'fs-3 position-absolute ms-5') !!}
                    <input type="text" 
                        class="form-control form-control-solid w-250px ps-13" placeholder="Search order"
                        id="mySearchInput" />
                </div>
                <!--end::Search-->
            </div>
            <!--begin::Card title-->

            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                @include('pages.apps.order.buttons')
                <!--end::Toolbar-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
       

        <!--begin::Card body-->
        <div class="card-body py-4">
            <!--begin::Table-->
            <div class="table-responsive">
                {{ $dataTable->table() }}
            </div>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>

    <div class="row" style="margin-top: 30px;">
        <div class="col-md-4">
            <a href="#" class="card bg-body hoverable card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="card-body">
                    <i class="ki-duotone ki-chart-simple text-primary fs-2x ms-n1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                    </i>
                    <div class="text-gray-900 fw-bold fs-2 mb-2 mt-5">{{ number_format($order->sum('grand_total'), 2) }}৳</div>
                    <div class="fw-semibold text-gray-400">Total amount of today orders</div>
                </div>
                <!--end::Body-->
            </a>
        </div>
    </div>

    @push('scripts')
        {{ $dataTable->scripts() }}
        <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
        <script>
             $(document).ready(function() {
                $('#statusFilter').select2({
                    minimumResultsForSearch: -1 
                });

                $('#statusFilter').on('change', function () {
                    var selectedStatus = $(this).val();
                    window.LaravelDataTables['order-table']
                        .column(4) 
                        .search(selectedStatus)
                        .draw();
                });
        
                var table = $('#order-table').DataTable();
                
                // Event listener for the search input field
                document.getElementById('mySearchInput').addEventListener('keyup', function() {
                    window.LaravelDataTables['order-table'].search(this.value).draw();
                });

   
                // Livewire success event handler
                document.addEventListener('livewire:load', function() {
                    Livewire.on('success', function() {
                        window.LaravelDataTables['order-table'].ajax.reload();
                    });
                });
        
                // Event listener for export buttons
                $('[data-kt-export]').on('click', function(e) {
                    e.preventDefault();
                    handleExport($(this).data('kt-export'));
                });
        
                // Handle DataTable export actions
                function handleExport(exportType) {
                    switch (exportType) {
                        case 'copy':
                            table.button('.buttons-copy').trigger();
                            break;
                        case 'excel':
                            table.button('.buttons-excel').trigger();
                            break;
                        case 'csv':
                            table.button('.buttons-csv').trigger();
                            break;
                        case 'pdf':
                            table.button('.buttons-pdf').trigger();
                            break;
                        default:
                            console.error('Unknown export type:', exportType);
                    }
                }
        
            });
        </script>

        {{-- product filter --}}
        {{-- @include('pages.apps.order.columns.filter') --}}
    @endpush
</x-default-layout>