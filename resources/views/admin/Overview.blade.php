@extends('admin.layout.home')
@section('content')
    <div class="wrapper">
        <div class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card card-transparent card-block card-stretch card-height border-none">
                            <div class="card-body p-0 mt-lg-2 mt-0">
                                <h3 class="mb-3">Xin chào, {{ Auth::user()->name }}</h3>
                                <p class="mb-0 mr-4">Trang tổng quan cung cấp cho bạn chế độ xem về doanh thu.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="card card-block card-stretch card-height">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-4 card-total-sale">
                                            <div class="icon iq-icon-box-2 bg-info-light">
                                                <img src="/template/assets/images/product/1.png" class="img-fluid"
                                                    alt="image">
                                            </div>
                                            <div>
                                                <p class="mb-2">Tổng doanh thu</p>
                                                <h4>{{ number_format($sumtotal) }} </h4>

                                            </div>
                                        </div>
                                        <div class="iq-progress-bar mt-2">
                                            <span class="bg-info iq-progress progress-1" data-percent="85">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="card card-block card-stretch card-height">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-4 card-total-sale">
                                            <div class="icon iq-icon-box-2 bg-danger-light">
                                                <img src="/template/assets/images/product/2.png" class="img-fluid"
                                                    alt="image">
                                            </div>
                                            <div>
                                                <p class="mb-2">Người dùng</p>
                                                <h4>{{ $countuser }}</h4>
                                            </div>
                                        </div>
                                        <div class="iq-progress-bar mt-2">
                                            <span class="bg-danger iq-progress progress-1" data-percent="70">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="card card-block card-stretch card-height">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-4 card-total-sale">
                                            <div class="icon iq-icon-box-2 bg-success-light">
                                                <img src="/template/assets/images/product/3.png" class="img-fluid"
                                                    alt="image">
                                            </div>
                                            <div>
                                                <p class="mb-2">Phim</p>
                                                <h4>{{ $countfilm }} </h4>
                                            </div>
                                        </div>
                                        <div class=" ">
                                            <select class="form-select form-control-sm border border-secondary-subtle"
                                                aria-label="Default select example">
                                                @foreach ($films as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="card card-block card-stretch card-height-helf">
                            <div class="card-body">
                                <div class="d-flex align-items-top justify-content-between">
                                    <div class="">
                                        <p class="mb-0">Vé đã đặt</p>
                                        <h5 id="ticketListcount">{{ $tickettong }}</h5>
                                    </div>
                                    {{-- <div class="card-header-toolbar d-flex align-items-center">
                                        <div class="dropdown">
                                            <span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton0007"
                                                data-toggle="dropdown">
                                                This Month<i class="ri-arrow-down-s-line ml-1"></i>
                                            </span>
                                            <div class="dropdown-menu dropdown-menu-right shadow-none"
                                                aria-labelledby="dropdownMenuButton0007">
                                                <a class="dropdown-item" value="" href="#"
                                                    id="filterLinkCurrentYear00"
                                                    onclick="changeDropdownText0007('Năm')">Năm</a>
                                                <a class="dropdown-item" value="" href="#"
                                                    id="filterLinkCurrentMonth00"
                                                    onclick="changeDropdownText0007('Tháng')">Tháng</a>
                                                <a class="dropdown-item" value="" href="#"
                                                    id="filterLinkSevenDaysAgo00"
                                                    onclick="changeDropdownText0007('Tuần')">Tuần</a>
                                            </div>
                                        </div>

                                    </div> --}}
                                </div>

                            </div>
                        </div>
                        <div class="card card-block card-stretch card-height-helf">
                            <div class="card-body">
                                <div class="d-flex align-items-top justify-content-between">
                                    <div class="">
                                        <p class="mb-0">Phim được đặt nhiều nhất:</p>
                                        @if ($mostBookedfilm)
                                            <h5 id="ticketListfilmname">{{ $mostBookedfilm->film_name }}</h5>
                                        @else
                                            <p>Không có dữ liệu để hiển thị.</p>
                                        @endif

                                    </div>
                                    {{-- <div class="card-header-toolbar d-flex align-items-center">
                                        <div class="dropdown">
                                            <span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton009"
                                                data-toggle="dropdown">
                                                This Month<i class="ri-arrow-down-s-line ml-1"></i>
                                            </span>
                                            <div class="dropdown-menu dropdown-menu-right shadow-none"
                                                aria-labelledby="dropdownMenuButton009">
                                                <a class="dropdown-item" value="" href="#"
                                                    id="filterLinkCurrentYear1"
                                                    onclick="changeDropdownText009('Năm')">Năm</a>
                                                <a class="dropdown-item" value="" href="#"
                                                    id="filterLinkCurrentMonth1"
                                                    onclick="changeDropdownText009('Tháng')">Tháng</a>
                                                <a class="dropdown-item" value="" href="#"
                                                    id="filterLinkSevenDaysAgo1"
                                                    onclick="changeDropdownText009('Tuần')">Tuần</a>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>

                            </div>
                        </div>
                        <div class="card card-block card-stretch card-height-helf">
                            <div class="card-body">
                                <div class="d-flex align-items-top justify-content-between">
                                    <div class="">
                                        <p class="mb-0">Khung giờ xem được đặt nhiều nhất:</p>

                                        @if ($formattedTime)
                                            <h5 id="ticketListfilhour"> {{ $formattedTime }} </h5>
                                        @else
                                            <p>Không có dữ liệu để hiển thị.</p>
                                        @endif
                                    </div>
                                    {{-- <div class="card-header-toolbar d-flex align-items-center">
                                        <div class="dropdown">
                                            <span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton0001"
                                                data-toggle="dropdown">
                                                This Month<i class="ri-arrow-down-s-line ml-1"></i>
                                            </span>
                                            <div class="dropdown-menu dropdown-menu-right shadow-none"
                                                aria-labelledby="dropdownMenuButton0001">
                                                <a class="dropdown-item" href="#" id="filterLinkCurrentYear2"
                                                    onclick="changeDropdownText0001('Năm')">Năm</a>
                                                <a class="dropdown-item" href="#" id="filterLinkCurrentMonth2"
                                                    onclick="changeDropdownText0001('Tháng')">Tháng</a>
                                                <a class="dropdown-item" href="#" id="filterLinkSevenDaysAgo2"
                                                    onclick="changeDropdownText0001('Tuần')">Tuần</a>
                                            </div>
                                        </div>
                                    </div> --}}


                                </div>

                            </div>
                        </div>
                        <div class="card card-block card-stretch card-height-helf">
                            <div class="card-body">
                                <div class="d-flex align-items-top justify-content-between">
                                    <div class="">
                                        <p class="mb-0">Combo đồ ăn được đặt nhiều nhất:</p>

                                        @if ($mostBookedfood)
                                            <h5 id="ticketListfood"> {{ $mostBookedfood->name }} </h5>
                                        @else
                                            <p>Không có dữ liệu để hiển thị.</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-block card-stretch card-height-helf">
                            <div class="card-body">
                                <div class="d-flex align-items-top justify-content-between">
                                    <div class="">
                                        <p class="mb-0">Phương thức thanh toán dùng nhiều nhất:</p>

                                        @if ($payments)
                                            <h5 id="ticketListfood"> {{ $payments->payment }} </h5>
                                        @else
                                            <p>Không có dữ liệu để hiển thị.</p>
                                        @endif
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
