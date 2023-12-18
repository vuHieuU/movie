@extends('admin.layout.home')
@section('content')
    <div class="wrapper">
        <div class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="card card-block card-stretch card-height">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-4 card-total-sale">
                                            <div class="icon iq-icon-box-2 bg-info-light">
                                                <img src="/template/assets/images/product/1.png" class="img-fluid"
                                                    alt="image">
                                            </div>
                                            <div>
                                                <p class="mb-2">Các Rạp</p>
                                                <div class="card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                        <span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton006" data-toggle="dropdown">
                                                            Chọn Rạp<i class="ri-arrow-down-s-line ml-1"></i>
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right shadow-none" aria-labelledby="dropdownMenuButton006">
                                                            {{-- <a class="li dropdown-item" href="{{ route('allFilm') }}">
                                                                Tất cả rạp
                                                            </a> --}}
                                                            @foreach ($cinemalist as $item)
                                                                <a class="li dropdown-item" href="{{ route('allCinemaFilm',[$item->id]) }}">{{ $item->name }}
                                                                </a>
                                                            @endforeach
                                                        </div>
                                                
                                                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                                                        {{-- <script>
                                                            $(document).ready(function () {
                                                                $("a.li").click(function (event) {
                                                                    event.preventDefault();
                                                                    var cinemaId = $(this).data('cinema-id');
                                                                    if (cinemaId === 'all') {
                                                                        window.location.href = "/statistical/index";
                                                                    } else {
                                                                        $.ajax({
                                                                            url: "/statistical/cinema/" + cinemaId,
                                                                            success: function (result) {
                                                                                $("#cinema").html(result);
                                                                                changeDropdownText(cinemaId);
                                                                            }
                                                                        });
                                                                    }
                                                                });
                                                        
                                                                function changeDropdownText(selectedOption) {
                                                                    var dropdownButton = document.getElementById("dropdownMenuButton006");
                                                                    dropdownButton.textContent = selectedOption;
                                                                }
                                                            });
                                                        </script> --}}
                                                        
                                                        
                                                    </div>
                                                </div>
                                                

                                            </div>
                                        </div>
                                        <div class="iq-progress-bar mt-2">
                                            <span class="bg-info iq-progress progress-1" data-percent="100">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
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
                                            <span class="bg-danger iq-progress progress-1" data-percent="100">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="cinema" class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
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
                                            <span class="bg-info iq-progress progress-1" data-percent="100">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="card card-block card-stretch card-height">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-4 card-total-sale">
                                            <div class="icon iq-icon-box-2 bg-success-light">
                                                <img src="/template/assets/images/product/3.png" class="img-fluid"
                                                    alt="image">
                                            </div>
                                            <div>
                                                <p class="mb-2">Tổng vé đã bán</p>
                                                <h4>{{ $countfilm }} </h4>
                                            </div>
                                        </div>
                                        <div class="iq-progress-bar mt-2">
                                            <span class="bg-danger iq-progress progress-1" data-percent="100">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Doanh thu </h4>
                                </div>
                                {{-- <div class="card-header-toolbar d-flex align-items-center d-none">
                                    <div class="dropdown">
                                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                                        <script>
                                            $(document).ready(function() {
                                                $("a.li").click(function(event) {
                                                    event.preventDefault();
                                                    var cinemaId = $(this).data('cinema-id');
                                                    $.ajax({
                                                        url: "/overview/" + cinemaId,
                                                        success: function(result) {
                                                            $("#div1").html(result);
                                                        }
                                                    });
                                                });
                                            });
                                        </script>
                                    </div>
                                </div> --}}

            
                            </div>
                            <div id="div1">
                                <div class="card-body">
                                    <div class="d-flex flex-wrap align-items-center mt-2">
                                        <div class="d-flex align-items-center progress-order-left">
                                            <div class="progress progress-round m-0 orange conversation-bar"
                                                data-percent="46">
                                                <span class="progress-left">
                                                    <span class="progress-bar"></span>
                                                </span>
                                                <span class="progress-right">
                                                    <span class="progress-bar"></span>
                                                </span>
                                                <div class="progress-value text-secondary">46%</div>
                                            </div>
                                            <div class="progress-value ml-3 pr-5 border-right">

                                                <div>

                                                    <h5 id="ticketListtoltal">{{ number_format($tickets) }}</h5>
                                                    <p class="mb-0">Tổng doanh thu </p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="card-body pt-0">
                                    <div id="layout1-chart-5"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        var revenuesData = @json($revenues);
        if (jQuery("#layout1-chart-5").length) {
            options = {
                series: [{
                    name: 'Doanh thu',
                    data: Object.values(revenuesData),
                }],
                chart: {
                    type: 'bar',
                    height: 300
                },
                colors: ['#32BDEA', '#FF7E41'],
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '30%',
                        endingShape: 'rounded'
                    },
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    show: true,
                    width: 3,
                    colors: ['transparent']
                },
                xaxis: {
                    categories: Object.keys(revenuesData),
                    labels: {
                        minWidth: 0,
                        maxWidth: 0
                    }
                },
                yaxis: {
                    // show: true,
                    // labels: {
                    //     minWidth: 20,
                    //     maxWidth: 20
                    // }
                },
                fill: {
                    opacity: 1
                },
                tooltip: {
                    y: {
                        formatter: function(val) {
                            return "$ " + val + " thousands"
                        }
                    }
                }
            };
            const chart = new ApexCharts(document.querySelector("#layout1-chart-5"), options);
            chart.render();
            const body = document.querySelector('body')
            if (body.classList.contains('dark')) {
                apexChartUpdate(chart, {
                    dark: true
                })
            }

            document.addEventListener('ChangeColorMode', function(e) {
                apexChartUpdate(chart, e.detail)
            })
        }
    </script>
@endsection
