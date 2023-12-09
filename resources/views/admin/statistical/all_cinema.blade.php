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
                                            <span class="bg-info iq-progress progress-1" data-percent="100">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Doanh thu </h4>
                            </div>
                                  <div class="card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton008" data-toggle="dropdown">
                                            Thời gian<i class="ri-arrow-down-s-line ml-1"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right shadow-none" aria-labelledby="dropdownMenuButton007">
                                            <a class="li dropdown-item" data-film-id="all">
                                                <li onclick="changeDropdownText('Tất cả rạp')">Tất cả rạp</li>
                                            </a>
                                            <a class="li dropdown-item" data-film-id="1">
                                                <li onclick="changeDropdownText('1 ngày')">Hôm nay</li>
                                            </a>
                                            <a class="li dropdown-item" data-film-id="7">
                                                <li onclick="changeDropdownText('7 ngày')">7 ngày</li>
                                            </a>
                                            <a class="li dropdown-item" data-film-id="14">
                                                <li onclick="changeDropdownText('14 ngày')">14 ngày</li>
                                            </a>
                                            <a class="li dropdown-item" data-film-id="30">
                                                <li onclick="changeDropdownText('30 ngày')">30 ngày</li>
                                            </a>
                                            <a class="li dropdown-item" data-film-id="365">
                                                <li onclick="changeDropdownText('365 ngày')">365 ngày</li>
                                            </a>
                                        </div>
                                    
                                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                                        <script>
                                                $(document).ready(function() {
                                                        $("a.li").click(function(event) {
                                                            event.preventDefault();
                                                            var days = $(this).data('film-id');
                                                            if (days === 'all') {
                                                                        window.location.href = "/allCinema";
                                                                    } else {
                                                                        $.ajax({
                                                                url: "/allCinemaDay/" + days,
                                                                method: 'GET',
                                                                success: function(result) {
                                                                    $("#cinemaDay").html(result);
                                                                },
                                                                error: function(error) {
                                                                    console.error('Error:', error);
                                                                }
                                                            });
                                                                    }
                                             
                                                        });
                                                    });
                                        </script>
                                          <script>
                                            function changeDropdownText(selectedOption) {
                                                var dropdownButton = document.getElementById("dropdownMenuButton007");
                                                dropdownButton.textContent = selectedOption;
                                            }
                                        </script>
                                    </div>
                                    
                </div>
                
                
                        </div>
                        <div id="cinemaDay">
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
                                            <div class="progress-value text-secondary">100%</div>
                                        </div>
                                        <div class="progress-value ml-3 pr-5 border-right">
                
                                            <div>
                
                                                <h5 id="ticketListtoltal">{{ number_format($sumtotal) }}</h5>
                                                <p class="mb-0">Tổng doanh thu </p>
                                            </div>
                
                                        </div>
                                    </div>
                                </div>
                            </div>
                
                
                            <div class="card-body pt-0">
                                <div id="layout1-chart-7"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
            var cinemas = @json($cinemas);
            var cinemaSums = @json($cinemaSums);
        if (jQuery("#layout1-chart-7").length) {
            options = {
                series: [{
                    name: 'Doanh thu',
                    data: cinemaSums.map(item => item.revenue),
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
                    categories: cinemas,
                    labels: {
                        minWidth: 0,
                        maxWidth: 0
                    }
                },
                yaxis: {
                    show: true,
                    labels: {
                        minWidth: 20,
                        maxWidth: 20
                    }
                },
                fill: {
                    opacity: 1
                },
                tooltip: {
                    y: {
                        formatter: function(val) {
                            return val + " VNĐ"
                        }
                    }
                }
            };
            const chart = new ApexCharts(document.querySelector("#layout1-chart-7"), options);
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
