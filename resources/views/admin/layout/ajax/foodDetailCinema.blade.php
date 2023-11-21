<div class="col-lg-4">
    <div class="card card-block card-stretch card-height-helf">
        <div class="card-body">
            <div class="d-flex align-items-top justify-content-between">
                <div class="">
                    <p class="mb-0">Phim được đặt nhiều nhất:</p>
                    {{-- @if ($mostBookedfilm)
                        <h6 id="ticketListfilmname">{{ $mostBookedfilm->film_name }}</h6>
                    @else
                        <p>Không có dữ liệu để hiển thị.</p>
                    @endif --}}

                </div>
                <div class="card-header-toolbar d-flex align-items-center">
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
                </div>
            </div>

        </div>
    </div>
    <div class="card card-block card-stretch card-height-helf">
        <div class="card-body">
            <div class="d-flex align-items-top justify-content-between">
                <div class="">
                    <p class="mb-0">Khung giờ xem được đặt nhiều nhất:</p>

                    {{-- @if ($formattedTime)
                        <h6 id="ticketListfilhour"> {{ $formattedTime }} </h6>
                    @else
                        <p>Không có dữ liệu để hiển thị.</p>
                    @endif --}}
                </div>
                <div class="card-header-toolbar d-flex align-items-center">
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
                </div>


            </div>

        </div>
    </div>
    {{-- <div class="card card-block card-stretch card-height-helf">
        <div class="card-body">
            <div class="d-flex align-items-top justify-content-between">
                <div class="">
                    <p class="mb-0">Combo đồ ăn được đặt nhiều nhất:</p>

                    @if ($mostBookedfood)
                        <h6 id="ticketListfood"> {{ $mostBookedfood->name }} </h6>
                    @else
                        <p>Không có dữ liệu để hiển thị.</p>
                    @endif
                </div>
            </div>
        </div>
    </div> --}}
</div>
<div class="col-lg-8">
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
                        <div class="dropdown-menu dropdown-menu-right shadow-none" aria-labelledby="dropdownMenuButton008">
                            <a class="li dropdown-item" data-film-id="7">
                                <li onclick="changeDropdownText('7 ngày')">7 ngày</li>
                            </a>
                            <a class="li dropdown-item" data-film-id="14">
                                <li onclick="changeDropdownText('14 ngày')">14 ngày</li>
                            </a>
                            <a class="li dropdown-item" data-film-id="30">
                                <li onclick="changeDropdownText('30 ngày')">30 ngày</li>
                            </a>
                        </div>
                    
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                        <script>
                                $(document).ready(function() {
                                        $("a.li").click(function(event) {
                                            event.preventDefault();
                                            var days = $(this).data('film-id');
                                            $.ajax({
                                                url: "/statistical/detailFoodCinemas/" + days,
                                                method: 'GET',
                                                success: function(result) {
                                                    $("#Foods").html(result);
                                                },
                                                error: function(error) {
                                                    console.error('Error:', error);
                                                }
                                            });
                                        });
                                    });
                        </script>
                          <script>
                            function changeDropdownText(selectedOption) {
                                var dropdownButton = document.getElementById("dropdownMenuButton008");
                                dropdownButton.textContent = selectedOption;
                            }
                        </script>
                    </div>
                    
</div>


        </div>
        <div id="Foods">
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

                                <h5 id="ticketListtoltal">{{ number_format($grandTotal) }}</h5>
                                <p class="mb-0">Tổng doanh thu </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="card-body pt-0">
                <div id="layout1-chart-8"></div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    var foodTotals = @json($foodTotals);
    if (jQuery("#layout1-chart-8").length) {
        options = {
            series: [{
                name: 'Doanh thu',
                data: foodTotals.map(item => item.total),
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
                categories: foodTotals.map(item => item.name),
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
                        return "$ " + val + " thousands"
                    }
                }
            }
        };
        const chart = new ApexCharts(document.querySelector("#layout1-chart-8"), options);
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