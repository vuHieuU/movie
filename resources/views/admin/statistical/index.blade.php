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
                                                            <a class="li dropdown-item" data-cinema-id="all">
                                                                <li onclick="changeDropdownText('Tất cả rạp')">Tất cả rạp</li>
                                                            </a>
                                                            @foreach ($cinemalist as $item)
                                                                <a class="li dropdown-item" data-cinema-id="{{ $item->name }}">
                                                                    <li onclick="changeDropdownText('{{ $item->name }}')">{{ $item->name }}</li>
                                                                </a>
                                                            @endforeach
                                                        </div>
                                                
                                                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                                                        <script>
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
                                                        </script>
                                                        
                                                        
                                                    </div>
                                                </div>
                                                

                                            </div>
                                        </div>
                                        <div class="iq-progress-bar mt-2">
                                            <span class="bg-info iq-progress progress-1" data-percent="85">
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
                                            <span class="bg-danger iq-progress progress-1" data-percent="70">
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
                                            <span class="bg-info iq-progress progress-1" data-percent="85">
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
                                                <p class="mb-2">Phim</p>
                                                <h4>{{ $countfilm }} </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card-body pt-0">
                        <div id="layout1-chart-7"></div>
                    </div>
                </div>
                <div id="div2" class="row">
                    <div class="col-lg-4">
                        <div class="card card-block card-stretch card-height-helf">
                            <div class="card-body">
                                <div class="d-flex align-items-top justify-content-between">
                                    <div class="">
                                        <p class="mb-0">Vé đã đặt</p>
                                        <h6 id="ticketListcount">{{ $tickettong }}</h6>
                                    </div>
                                    <div class="card-header-toolbar d-flex align-items-center">
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

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card card-block card-stretch card-height-helf">
                            <div class="card-body">
                                <div class="d-flex align-items-top justify-content-between">
                                    <div class="">
                                        <p class="mb-0">Phim được đặt nhiều nhất:</p>
                                        @if ($mostBookedfilm)
                                            <h6 id="ticketListfilmname">{{ $mostBookedfilm->film_name }}</h6>
                                        @else
                                            <p>Không có dữ liệu để hiển thị.</p>
                                        @endif

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

                                        @if ($formattedTime)
                                            <h6 id="ticketListfilhour"> {{ $formattedTime }} </h6>
                                        @else
                                            <p>Không có dữ liệu để hiển thị.</p>
                                        @endif
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
                        <div class="card card-block card-stretch card-height-helf">
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
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Doanh thu </h4>
                                </div>
                                <div class="card-header-toolbar d-flex align-items-center d-none">
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
                                </div>

            
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
        // ********************** //
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
    <script>
        // Tạo một mảng để lưu trữ tất cả các vé
        var ticketsSevenDaysAgo0 = <?php echo json_encode($ticketsSevenDaysAgo); ?>;
        var ticketsCurrentMonth0 = <?php echo json_encode($ticketsCurrentMonth); ?>;
        var ticketsCurrentYear0 = <?php echo json_encode($ticketsCurrentYear); ?>;

        // Hàm hiển thị danh sách vé và số lượng vé đã lọc
        function displayFilteredTickets0(tickets) {
            // Lấy thẻ div để hiển thị danh sách vé và số lượng vé
            var ticketListDiv = document.getElementById("ticketListcount");

            // Xóa nội dung hiện tại của thẻ div
            ticketListDiv.innerHTML = "";

            // Duyệt qua danh sách vé và hiển thị thông tin của từng vé
            tickets.forEach(function(ticket) {
                var ticketInfo = document.createElement("div");


                // Thêm thông tin vé vào thẻ div
                ticketListDiv.appendChild(ticketInfo);
            });

            // Đếm số lượng vé
            var ticketCount = tickets.length;

            // Hiển thị số lượng vé đã lọc
            var ticketCountDiv = document.createElement("div");
            ticketCountDiv.textContent = ticketCount;

            // Thêm số lượng vé vào thẻ div
            ticketListDiv.appendChild(ticketCountDiv);
        }

        // Bắt sự kiện click trên thẻ <a> và gọi hàm hiển thị danh sách vé đã lọc
        document.getElementById("filterLinkSevenDaysAgo00").addEventListener("click", function(event) {
            event.preventDefault(); // Ngăn chặn trình duyệt chuyển đến một URL
            displayFilteredTickets0(ticketsSevenDaysAgo0);
        });

        document.getElementById("filterLinkCurrentMonth00").addEventListener("click", function(event) {
            event.preventDefault(); // Ngăn chặn trình duyệt chuyển đến một URL
            displayFilteredTickets0(ticketsCurrentMonth0);
        });

        document.getElementById("filterLinkCurrentYear00").addEventListener("click", function(event) {
            event.preventDefault(); // Ngăn chặn trình duyệt chuyển đến một URL
            displayFilteredTickets0(ticketsCurrentYear0);
        });


        function changeDropdownText0007(selectedOption) {
            var dropdownButton = document.getElementById("dropdownMenuButton0007");
            dropdownButton.textContent = selectedOption; // Sửa lỗi ở đây
        }
        // ***************************//
        // Tạo một mảng để lưu trữ tất cả các vé
        var ticketsSevenDaysAgo1 = <?php echo json_encode($ticketsSevenDaysAgo); ?>;
        var ticketsCurrentMonth1 = <?php echo json_encode($ticketsCurrentMonth); ?>;
        var ticketsCurrentYear1 = <?php echo json_encode($ticketsCurrentYear); ?>;

        // Hàm hiển thị danh sách vé và số lượng vé đã lọc
        // Hàm hiển thị danh sách vé và tên phim
        function displayFilteredTickets1(tickets) {
            // Lấy thẻ div để hiển thị danh sách vé và tên phim
            var ticketListDiv = document.getElementById("ticketListfilmname");

            // Xóa nội dung hiện tại của thẻ div
            ticketListDiv.innerHTML = "";

            // Tạo một đối tượng để theo dõi số lần xuất hiện của từng tên phim
            var filmNameCounts = {};

            // Duyệt qua danh sách vé và đếm số lần xuất hiện của mỗi tên phim
            tickets.forEach(function(ticket) {
                var filmName = ticket.film_name;

                // Kiểm tra xem tên phim đã tồn tại trong filmNameCounts chưa, nếu chưa thì khởi tạo bằng 0
                if (!filmNameCounts[filmName]) {
                    filmNameCounts[filmName] = 0;
                }

                // Tăng số lần xuất hiện của tên phim lên 1
                filmNameCounts[filmName]++;
            });

            // Tìm tên phim có số lần xuất hiện nhiều nhất
            var mostBookedFilm = "";
            var maxCount = 0;

            for (var filmName in filmNameCounts) {
                if (filmNameCounts[filmName] > maxCount) {
                    maxCount = filmNameCounts[filmName];
                    mostBookedFilm = filmName;
                }
            }

            // Hiển thị tên phim có lượt đặt nhiều nhất
            var mostBookedFilmDiv = document.createElement("h5");
            mostBookedFilmDiv.textContent = mostBookedFilm;
            ticketListDiv.appendChild(mostBookedFilmDiv);


        }



        // Bắt sự kiện click trên thẻ <a> và gọi hàm hiển thị danh sách vé đã lọc
        document.getElementById("filterLinkSevenDaysAgo1").addEventListener("click", function(event) {
            event.preventDefault(); // Ngăn chặn trình duyệt chuyển đến một URL
            displayFilteredTickets1(ticketsSevenDaysAgo1);
        });

        document.getElementById("filterLinkCurrentMonth1").addEventListener("click", function(event) {
            event.preventDefault(); // Ngăn chặn trình duyệt chuyển đến một URL
            displayFilteredTickets1(ticketsCurrentMonth1);
        });

        document.getElementById("filterLinkCurrentYear1").addEventListener("click", function(event) {
            event.preventDefault(); // Ngăn chặn trình duyệt chuyển đến một URL
            displayFilteredTickets1(ticketsCurrentYear1);
        });


        function changeDropdownText009(selectedOption) {
            var dropdownButton = document.getElementById("dropdownMenuButton009");
            dropdownButton.textContent = selectedOption; // Sửa lỗi ở đây
        }
        // ****************//
        // Tạo một mảng để lưu trữ tất cả các vé
        var ticketsSevenDaysAgo1 = <?php echo json_encode($ticketsSevenDaysAgo); ?>;
        var ticketsCurrentMonth1 = <?php echo json_encode($ticketsCurrentMonth); ?>;
        var ticketsCurrentYear1 = <?php echo json_encode($ticketsCurrentYear); ?>;

        // Hàm hiển thị danh sách vé và số lượng vé đã lọc
        // Hàm hiển thị danh sách vé và tên phim
        function displayFilteredTickets2(tickets) {
            // Lấy thẻ div để hiển thị danh sách vé và giờ chiếu có số lần đặt nhiều nhất
            var ticketListDiv = document.getElementById("ticketListfilhour");

            // Xóa nội dung hiện tại của thẻ div
            ticketListDiv.innerHTML = "";

            // Tạo một đối tượng để theo dõi số lần xuất hiện của từng giờ chiếu
            var hourCounts = {};

            // Duyệt qua danh sách vé và đếm số lần xuất hiện của mỗi giờ chiếu
            tickets.forEach(function(ticket) {
                var selectedHour = ticket.selected_hour;

                // Kiểm tra xem giờ chiếu đã tồn tại trong hourCounts chưa, nếu chưa thì khởi tạo bằng 0
                if (!hourCounts[selectedHour]) {
                    hourCounts[selectedHour] = 0;
                }

                // Tăng số lần xuất hiện của giờ chiếu lên 1
                hourCounts[selectedHour]++;
            });

            // Tìm giờ chiếu có số lần đặt nhiều nhất
            var mostBookedHour = "";
            var maxCount = 0;

            for (var selectedHour in hourCounts) {
                if (hourCounts[selectedHour] > maxCount) {
                    maxCount = hourCounts[selectedHour];
                    mostBookedHour = selectedHour;
                }
            }

            // Hiển thị giờ chiếu có lượt đặt nhiều nhất
            var mostBookedHourDiv = document.createElement("h5");
            mostBookedHourDiv.textContent = mostBookedHour;
            ticketListDiv.appendChild(mostBookedHourDiv);
        }






        // Bắt sự kiện click trên thẻ <a> và gọi hàm hiển thị danh sách vé đã lọc
        document.getElementById("filterLinkSevenDaysAgo2").addEventListener("click", function(event) {
            event.preventDefault(); // Ngăn chặn trình duyệt chuyển đến một URL
            displayFilteredTickets2(ticketsSevenDaysAgo1);
        });

        document.getElementById("filterLinkCurrentMonth2").addEventListener("click", function(event) {
            event.preventDefault(); // Ngăn chặn trình duyệt chuyển đến một URL
            displayFilteredTickets2(ticketsCurrentMonth1);
        });

        document.getElementById("filterLinkCurrentYear2").addEventListener("click", function(event) {
            event.preventDefault(); // Ngăn chặn trình duyệt chuyển đến một URL
            displayFilteredTickets2(ticketsCurrentYear1);
        });



        function changeDropdownText0001(selectedOption) {
            var dropdownButton = document.getElementById("dropdownMenuButton0001");
            dropdownButton.textContent = selectedOption; // Sửa lỗi ở đây
        }
    </script>
@endsection
