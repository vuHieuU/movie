<div>
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
                    {{--<div class="card card-block card-stretch card-height">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4 card-total-sale">
                                <div class="icon iq-icon-box-2 bg-success-light">
                                    <img src="/template/assets/images/product/3.png" class="img-fluid"
                                        alt="image">
                                </div>
                                <div>
                                    <p class="mb-2">Phim</p>
                                    <h4>{{ $CountFilmCinema }} </h4>
                                </div>
                            </div>
                             <div class="card-header-toolbar d-flex align-items-center">
                                <div class="dropdown">
                                    <span class="dropdown-toggle dropdown-bg btn" id="z"
                                        data-toggle="dropdown">
                                        Chọn phim<i class="ri-arrow-down-s-line ml-1"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right shadow-none"
                                        aria-labelledby="dropdownMenuButton007">
                                        @foreach ($films as $item)
                                            <a class="li dropdown-item "
                                                data-film-id="{{ $item->name }}">
                                                <li onclick="changeDropdownText('{{ $item->name }}')">
                                                    {{ $item->name }}</li>
                                            </a>
                                        @endforeach
                                    </div>

                                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                                    <script>
                                        $(document).ready(function() {
                                            $("a.li").click(function(event) {
                                                event.preventDefault();
                                                var filmId = $(this).data('film-id');
                                                $.ajax({
                                                    url: "/statistical/index/" + filmId,
                                                    success: function(result) {
                                                        $("#div2").html(result);
                                                    }
                                                });
                                            });
                                        });
                                    </script>
                                </div>
                            </div> 
                        </div>
                    </div>--}}
                </div>
            </div>
        </div>
    </div>
    <div id="div2" class="row">
        <div class="col-lg-4">
            <div class="card card-block card-stretch card-height-helf">
                <div class="card-body">
                    <div class="d-flex align-items-top justify-content-between">
                        <div class="">
                            <p class="mb-0">Vé đã đặt</p>
                            <h6 id="ticketListcount">{{ $TotalTicketCinema }}</h6>
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
                            @if ($filmCinema)
                                <h6 id="ticketListfilmname">{{ $filmCinema->film_name }}</h6>
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

                            @if ($ShowTimeCinemas)
                                <h6 id="ticketListfilhour"> {{ $ShowTimeCinemas }} </h6>
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

                            {{-- @if ($mostBookedfood)
                                <h6 id="ticketListfood"> {{ $mostBookedfood->name }} </h6>
                            @else
                                <p>Không có dữ liệu để hiển thị.</p>
                            @endif --}}
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
                    <div class="card-header-toolbar d-flex align-items-center">
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton008" data-toggle="dropdown">
                                Thời gian<i class="ri-arrow-down-s-line ml-1"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right shadow-none" aria-labelledby="dropdownMenuButton008">
                                <a class="li dropdown-item" data-film-id="7">
                                    <li onclick="changeDropdownTexts('7 ngày')">7 ngày</li>
                                </a>
                                <a class="li dropdown-item" data-film-id="14">
                                    <li onclick="changeDropdownTexts('14 ngày')">14 ngày</li>
                                </a>
                                <a class="li dropdown-item" data-film-id="30">
                                    <li onclick="changeDropdownTexts('30 ngày')">30 ngày</li>
                                </a>
                            </div>
                        
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                            <script>
                                    $(document).ready(function() {
                                            $("a.li").click(function(event) {
                                                event.preventDefault();
                                                var days = $(this).data('film-id');
                                                $.ajax({
                                                    url: "/statistical/detailFilmCinemasDay/" + days,
                                                    method: 'GET',
                                                    success: function(result) {
                                                        $("#div1").html(result);
                                                    },
                                                    error: function(error) {
                                                        console.error('Error:', error);
                                                    }
                                                });
                                            });
                                        });
                            </script>
                              <script>
                                function changeDropdownTexts(selectedOption) {
                                    var dropdownButton = document.getElementById("dropdownMenuButton008");
                                    dropdownButton.textContent = selectedOption;
                                }
                            </script>
                        </div>
                        
    </div>

                    <script>
                        function changeDropdownText(selectedOption) {
                            var dropdownButton = document.getElementById("dropdownMenuButton007");
                            dropdownButton.textContent = selectedOption;
                        }
                    </script>
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

                                        {{-- <h5 id="ticketListtoltal">{{ number_format($tickets) }}</h5> --}}
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


    <div class="card-header-toolbar d-flex align-items-center justify-content-between">
        <div>

        </div>
        <div class="dropdown dropup">
            <span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton007" data-toggle="dropdown">
                Chọn phim<i class="ri-arrow-up-s-line ml-1"></i>
            </span>
            <div class="dropdown-menu dropdown-menu-right shadow-none" aria-labelledby="dropdownMenuButton007">
                @foreach ($film_name->unique('film_name') as $item)
                    <a class="li dropdown-item" data-cinema-id="{{ $item->film_name }}">
                        <li onclick="changeDropdownText('{{ $item->film_name }}')">
                            {{ $item->film_name }}
                        </li>
                    </a>
                @endforeach
            </div>
            <script>
                $(document).ready(function() {
                    $("a.li").click(function(event) {
                        event.preventDefault();
                        var film_name = $(this).data('cinema-id');
                        $.ajax({
                            url: "/statistical/detailFilm/" + film_name,
                            success: function(result) {
                                $("#film_name").html(result);
                            }
                        });
                    });
                });
            </script>
        </div>
        
    </div>
    <div id="film_name" class="card-body pt-0">
        <div id="layout1-chart-6"></div>
    </div>
</div>