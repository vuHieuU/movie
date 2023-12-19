    <!DOCTYPE html>
    <html lang="en-US">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="profile" href="https://gmpg.org/xfn/11" />
        <title>{{ $title }}</title>
        <meta name='robots' content='max-image-preview:large' />
        <link rel='dns-prefetch' href='//fonts.googleapis.com' />
        <link rel="stylesheet" href="fontawesome-free-6.1.1-web/css/all.css">
<link rel="stylesheet" href="/template/assets/css/seatfood.css">
        <style type="text/css">
            body {
                font-family: "Roboto Condensed";
                color: #333;
                font-weight: normal;
                font-size: 14px;
            }

            #amy-site-nav .sub-menu .menu-item a {
                font-family: "Roboto Condensed";
                font-weight: 700;
                font-size: 15px;
            }

            h1 {
                font-family: "Roboto Condensed";
                color: #333;
                font-weight: 700;
                font-size: 36px;
            }

            h2 {
                font-family: "Roboto Condensed";
                color: #333;
                font-weight: 700;
                font-size: 30px;
            }

            h3 {
                font-family: "Roboto Condensed";
                color: #333;
                font-weight: 700;
                font-size: 24px;
            }

            h4 {
                font-family: "Roboto Condensed";
                color: #333;
                font-weight: 700;
                font-size: 18px;
            }

            h5 {
                font-family: "Roboto Condensed";
                color: #333;
                font-weight: 700;
                font-size: 14px;
            }

            .amy-site-footer {
                background-color: #BABBC3;
            }

            #amy-page-header {
                background-image: url(http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_50.jpg);
            }
        </style>
    </head>

    <body
        class="page-template-default page page-id-142 amy-header-default  single-author elementor-default elementor-kit-5 elementor-page elementor-page-142">
        <div id="page" class="hfeed site">
            @extends('client.layout.main.main')
            @section('contact')
                <div id="main">
                    <div id="content" class="site-content">


                        {{-- <section id="amy-page-header" class="amy-page-header">
                            <div class="amy-page-title amy-center">
                                <div class="amy-inner container">
                                    <h1 class="page-title">
                                        Đặt vé </h1>
                                </div>
                            </div>
                            <span class="amy-section-overlay"></span>
                        </section> --}}
                        <section class="main-content page-layout-">
                            <div class="container">
                                <div class="row">


                                    <div class="col-md-12">
                                        <div class="page-content">
                                            <div data-elementor-type="wp-page" data-elementor-id="142"
                                                class="elementor elementor-142">
                                                <section
                                                    class="elementor-section elementor-top-section elementor-element elementor-element-19a978c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="19a978c" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6ac9358"
                                                            data-id="6ac9358" data-element_type="column">
                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-b63bd50 elementor-widget elementor-widget-Amy_V2_Movie_List"
                                                                    data-id="b63bd50" data-element_type="widget"
                                                                    data-widget_type="Amy_V2_Movie_List.default">
                                                                    <div class="elementor-widget-container">

                                                                        <div class="amy-movie-layout-list ">
                                                                            <div class="amy-movie-list">
                                                                                <div class="amy-movie-items">



                                                                                    <h2 class="col-12 text-center ">Chọn ghế
                                                                                        và đồ ăn </h2>
                                                                                    <hr class="border">
                                                                                    <div class="row text-center "
                                                                                        style="margin-top: 30px; ">
                                                                                        <div class="col-md-3 col-sm-4">

                                                                                            <svg style="font-size: 35px; fill: #BABBC3"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                height="1em"
                                                                                                viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                                                <path
                                                                                                    d="M64 160C64 89.3 121.3 32 192 32H448c70.7 0 128 57.3 128 128v33.6c-36.5 7.4-64 39.7-64 78.4v48H128V272c0-38.7-27.5-71-64-78.4V160zM544 272c0-20.9 13.4-38.7 32-45.3c5-1.8 10.4-2.7 16-2.7c26.5 0 48 21.5 48 48V448c0 17.7-14.3 32-32 32H576c-17.7 0-32-14.3-32-32H96c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V272c0-26.5 21.5-48 48-48c5.6 0 11 1 16 2.7c18.6 6.6 32 24.4 32 45.3v48 32h32H512h32V320 272z" />
                                                                                            </svg>
                                                                                            <span>Ghế trống</span>

                                                                                        </div>

                                                                                        <div class="col-md-3 col-sm-4">

                                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                style="font-size: 35px; fill: #03599D"
                                                                                                height="1em"
                                                                                                viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                                                <path
                                                                                                    d="M64 160C64 89.3 121.3 32 192 32H448c70.7 0 128 57.3 128 128v33.6c-36.5 7.4-64 39.7-64 78.4v48H128V272c0-38.7-27.5-71-64-78.4V160zM544 272c0-20.9 13.4-38.7 32-45.3c5-1.8 10.4-2.7 16-2.7c26.5 0 48 21.5 48 48V448c0 17.7-14.3 32-32 32H576c-17.7 0-32-14.3-32-32H96c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V272c0-26.5 21.5-48 48-48c5.6 0 11 1 16 2.7c18.6 6.6 32 24.4 32 45.3v48 32h32H512h32V320 272z" />
                                                                                            </svg>

                                                                                            <span>Ghế đang chọn</span>
                                                                                        </div>
                                                                                        <div class="col-md-3 col-sm-4">

                                                                                            <svg xmlns="http://www.w3.org/2000/svg"style="font-size: 35px; fill: #FD2802"
                                                                                                height="1em"
                                                                                                viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                                                <path
                                                                                                    d="M64 160C64 89.3 121.3 32 192 32H448c70.7 0 128 57.3 128 128v33.6c-36.5 7.4-64 39.7-64 78.4v48H128V272c0-38.7-27.5-71-64-78.4V160zM544 272c0-20.9 13.4-38.7 32-45.3c5-1.8 10.4-2.7 16-2.7c26.5 0 48 21.5 48 48V448c0 17.7-14.3 32-32 32H576c-17.7 0-32-14.3-32-32H96c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V272c0-26.5 21.5-48 48-48c5.6 0 11 1 16 2.7c18.6 6.6 32 24.4 32 45.3v48 32h32H512h32V320 272z" />
                                                                                            </svg>
                                                                                            <span>Ghế đặt trước</span>
                                                                                        </div>
                                                                                        <div class="col-md-3 col-sm-4">

                                                                                            <span>Thời gian còn lại</span>
                                                                                            <br>
                                                                                            <span class="fs-1; fw-bold"
                                                                                                id="thoiGianDemNguoc"
                                                                                                style="font-size: 25px"></span>

                                                                                            {{-- //thời gian chạy --}}

                                                                                            <script>
                                                                                                var thoiGianDemNguoc = 10; // Số phút bạn muốn đếm ngược

                                                                                                function demNguocVaChuyenTrang() {
                                                                                                    if (thoiGianDemNguoc <= 0) {
                                                                                                        // Hết thời gian, chuyển trang
                                                                                                        window.location.href = "/"; // Sử dụng named route của Laravel
                                                                                                    } else {
                                                                                                        var minutes = Math.floor(thoiGianDemNguoc);
                                                                                                        var seconds = (thoiGianDemNguoc - minutes) * 60;
                                                                                                        document.getElementById('thoiGianDemNguoc').textContent = minutes + " : " + Math.floor(seconds) + " ";
                                                                                                        thoiGianDemNguoc -= 1 / 60; // Trừ 1 phút (1/60) sau mỗi giây
                                                                                                        setTimeout(demNguocVaChuyenTrang, 1000); // Đếm ngược mỗi giây
                                                                                                    }
                                                                                                }

                                                                                                // Bắt đầu đếm ngược khi trang đã tải hoàn tất
                                                                                                window.onload = function() {
                                                                                                    demNguocVaChuyenTrang();
                                                                                                }
                                                                                            </script>
                                                                                            {{-- //thời gian chạy --}}
                                                                                        </div>

                                                                                    </div>

                                                                                    <div class="py-5">
                                                                                        <img class="img-responsive "
                                                                                            src="{{ asset('storage/images/ic-screen.png') }}">

                                                                                    </div>
                                                                                    {{-- <div class="row mt-4 "
                                                                                    style="max-width: 700px;margin: auto">
                                                                                    <style>
                                                                                        .iconchuadat {
                                                                                            color: #BABBC3;
                                                                                            /* Default color */
                                                                                            font-size: 25px;
                                                                                            /* Default font size */
                                                                                            transition: color 0.3s;
                                                                                            /* Smooth transition on color change */
                                                                                        }

                                                                                        .iconchuadat:hover {
                                                                                            color: #03599D;
                                                                                            /* Change the color to red on hover */
                                                                                        }

                                                                                        .fa-couch-icon {}
                                                                                    </style>
                                                                                    @foreach ($seats as $item)
                                                                                        <div class="col-md-1 col-sm-2 col-xs-3 text-center seat"
                                                                                            id="{{ $item->id }}"
                                                                                            data-price="{{ $item->price }}"
                                                                                            onclick="toggleSeat(this)">
                                                                                            @if ($item->isActive == 1 && $item->isFreeze == 1)
                                                                                                <i
                                                                                                    class="fa-solid fa-couch fa-couch-icon iconchuadat iconHover mb-4">
                                                                                                    <span class="fs-6">
                                                                                                        {{ $item->seat_number }}</span>
                                                                                                </i>
                                                                                            @else
                                                                                                <i class="fa-solid fa-couch fa-couch-icon mb-4"
                                                                                                    style="font-size: 25px;color: #FD2802;"
                                                                                                    disabled>
                                                                                                    <span class="fs-6 ">
                                                                                                        {{ $item->seat_number }}</span></i>
                                                                                                
                                                                                            @endif
                                                                                        </div>
                                                                                    @endforeach
                                                                                    <script>
                                                                                        $(document).ready(function() {
                                                                                            var selectedSeats = [];
                                                                                            var maxSeats = 8; // Số lượng ghế tối đa có thể chọn

                                                                                            $('.iconchuadat').click(function() {
                                                                                                var seat = $(this);

                                                                                                if (selectedSeats.length < maxSeats || seat.hasClass('selected')) {
                                                                                                    if (seat.hasClass('selected')) {
                                                                                                        // Trả lại màu ban đầu và loại bỏ khỏi danh sách ghế đã chọn
                                                                                                        seat.css('color', '#BABBC3');
                                                                                                        seat.removeClass('selected');
                                                                                                        selectedSeats.splice(selectedSeats.indexOf(seat), 1);
                                                                                                    } else {
                                                                                                        // Thay đổi màu và thêm vào danh sách ghế đã chọn
                                                                                                        seat.css('color', '#03599D');
                                                                                                        seat.addClass('selected');
                                                                                                        selectedSeats.push(seat);
                                                                                                    }
                                                                                                }
                                                                                            });
                                                                                        });
                                                                                    </script>
                                                                                </div> --}}
                                                                                    @if ($count == 88)
                                                                                        <div class="row mt-4 "
                                                                                            style="max-width: 800px;margin: auto">

                                                                                            {{-- <div class="container mt-4"> --}}
                                                                                            <style>
                                                                                                .iconHover {
                                                                                                    color: #BABBC3;
                                                                                                    font-size: 25px;
                                                                                                    transition: color 0.3s;
                                                                                                }

                                                                                                .iconchuadat:hover {
                                                                                                    color: #03599D;
                                                                                                    /* Thay đổi màu khi di chuột qua */
                                                                                                }

                                                                                                .selected .iconchuadat {
                                                                                                    color: #03599D;
                                                                                                }
                                                                                            </style>
                                                                                            {{-- @foreach ($seats1 as $item)
                                                                                                <a href="/updates/{{ $item->id }}"
                                                                                                    class=""
                                                                                                    >{{ $item->seat_number }}</a>
                                                                                            @endforeach
                                                                                          --}}

 


                                                                                            <div
                                                                                                style="max-width: 750px;margin: auto; text-center">
                                                                                                @foreach ($seats1 as $item)
                                                                                                    <div class="col-md-1 col-sm-2 col-xs-3 text-center  seat update-seat"
                                                                                                        id="{{ $item->showtime_seat_id }}"
                                                                                                        data-seat-id="{{ $item->id}}"
                                                                                                        data-price="{{ $item->price }}"
                                                                                                        data-is-active="{{ $item->isActive }}"
                                                                                                        data-is-freeze="{{ $item->isFreeze }}"
                                                                                                        onclick="toggleSeat(this)">

                                                                                                        @if ($item->isActive == 1 && $item->isFreeze == 1)
                                                                                                            <i class="fa-solid fa-couch fa-couch-icon iconchuadat iconHover mb-4"
                                                                                                                style="">
                                                                                                                <span
                                                                                                                    class="fs-6">
                                                                                                                    {{ $item->seat_number }}
                                                                                                                </span>
                                                                                                            </i>
                                                                                                            {{-- @endif --}}
                                                                                                        @else
                                                                                                            {{-- @if ($item->id == 2) --}}
                                                                                                            <i class="fa-solid fa-couch fa-couch-icon mb-4"
                                                                                                                style="font-size: 25px; color: #FD2802;"
                                                                                                                disabled>
                                                                                                                <span
                                                                                                                    class="fs-6">
                                                                                                                    {{ $item->seat_number }}
                                                                                                                </span>
                                                                                                            </i>
                                                                                                        @endif

                                                                                                    </div>
                                                                                                @endforeach


                                                                                            </div>
                                                                                            <div
                                                                                                style="max-width: 750px;margin: auto;">
                                                                                                @foreach ($seats2 as $item)
                                                                                                    <div class="col-md-1 ms-3 col-sm-2 col-xs-3 text-center  seat update-seat"
                                                                                                        id="{{ $item->showtime_seat_id }}"
                                                                                                        data-seat-id="{{ $item->id}}"
                                                                                                        data-price="{{ $item->price }}"
                                                                                                        data-is-active="{{ $item->isActive }}"
                                                                                                        data-is-freeze="{{ $item->isFreeze }}"
                                                                                                        onclick="toggleSeat(this)">

                                                                                                        @if ($item->isActive == 1 && $item->isFreeze == 1)
                                                                                                            <i class="fa-solid fa-couch fa-couch-icon iconchuadat iconHover mb-4"
                                                                                                                style="">
                                                                                                                <span
                                                                                                                    class="fs-6">
                                                                                                                    {{ $item->seat_number }}
                                                                                                                </span>
                                                                                                            </i>
                                                                                                            {{-- @endif --}}
                                                                                                        @else
                                                                                                            {{-- @if ($item->id == 2) --}}
                                                                                                            <i class="fa-solid fa-couch fa-couch-icon mb-4"
                                                                                                                style="font-size: 25px; color: #FD2802;"
                                                                                                                disabled>
                                                                                                                <span
                                                                                                                    class="fs-6">
                                                                                                                    {{ $item->seat_number }}
                                                                                                                </span>
                                                                                                            </i>
                                                                                                        @endif

                                                                                                    </div>
                                                                                                @endforeach


                                                                                            </div>
                                                                                            <div
                                                                                                style="max-width: 750px;margin: auto;">
                                                                                                @foreach ($seats3 as $item)
                                                                                                    <div class="col-md-1 col-sm-2 col-xs-3 text-center  seat update-seat"
                                                                                                        id="{{ $item->showtime_seat_id }}"
                                                                                                        data-seat-id="{{ $item->id}}"
                                                                                                        data-price="{{ $item->price }}"
                                                                                                        data-is-active="{{ $item->isActive }}"
                                                                                                        data-is-freeze="{{ $item->isFreeze }}"
                                                                                                        onclick="toggleSeat(this)">

                                                                                                        @if ($item->isActive == 1 && $item->isFreeze == 1)
                                                                                                            <i class="fa-solid fa-couch fa-couch-icon iconchuadat iconHover mb-4"
                                                                                                                style="">
                                                                                                                <span
                                                                                                                    class="fs-6">
                                                                                                                    {{ $item->seat_number }}
                                                                                                                </span>
                                                                                                            </i>
                                                                                                            {{-- @endif --}}
                                                                                                        @else
                                                                                                            {{-- @if ($item->id == 2) --}}
                                                                                                            <i class="fa-solid fa-couch fa-couch-icon mb-4"
                                                                                                                style="font-size: 25px; color: #FD2802;"
                                                                                                                disabled>
                                                                                                                <span
                                                                                                                    class="fs-6">
                                                                                                                    {{ $item->seat_number }}
                                                                                                                </span>
                                                                                                            </i>
                                                                                                        @endif

                                                                                                    </div>
                                                                                                @endforeach


                                                                                            </div>
                                                                                            <div
                                                                                                style="max-width: 750px;margin: auto;">
                                                                                                @foreach ($seats4 as $item)
                                                                                                    <div class="col-md-1 ms-3 col-sm-2 col-xs-3 text-center  seat update-seat"
                                                                                                        id="{{ $item->showtime_seat_id }}"
                                                                                                        data-seat-id="{{ $item->id}}"
                                                                                                        data-price="{{ $item->price }}"
                                                                                                        data-is-active="{{ $item->isActive }}"
                                                                                                        data-is-freeze="{{ $item->isFreeze }}"
                                                                                                        onclick="toggleSeat(this)">

                                                                                                        @if ($item->isActive == 1 && $item->isFreeze == 1)
                                                                                                            <i class="fa-solid fa-couch fa-couch-icon iconchuadat iconHover mb-4"
                                                                                                                style="">
                                                                                                                <span
                                                                                                                    class="fs-6">
                                                                                                                    {{ $item->seat_number }}
                                                                                                                </span>
                                                                                                            </i>
                                                                                                            {{-- @endif --}}
                                                                                                        @else
                                                                                                            {{-- @if ($item->id == 2) --}}
                                                                                                            <i class="fa-solid fa-couch fa-couch-icon mb-4"
                                                                                                                style="font-size: 25px; color: #FD2802;"
                                                                                                                disabled>
                                                                                                                <span
                                                                                                                    class="fs-6">
                                                                                                                    {{ $item->seat_number }}
                                                                                                                </span>
                                                                                                            </i>
                                                                                                        @endif

                                                                                                    </div>
                                                                                                @endforeach


                                                                                            </div>
                                                                                            <div
                                                                                                style="max-width: 750px;margin: auto;">
                                                                                                @foreach ($seats5 as $item)
                                                                                                    <div class="col-md-1 col-sm-2 col-xs-3 text-center  seat update-seat"
                                                                                                        id="{{ $item->showtime_seat_id }}"
                                                                                                        data-seat-id="{{ $item->id}}"
                                                                                                        data-price="{{ $item->price }}"
                                                                                                        data-is-active="{{ $item->isActive }}"
                                                                                                        data-is-freeze="{{ $item->isFreeze }}"
                                                                                                        onclick="toggleSeat(this)">

                                                                                                        @if ($item->isActive == 1 && $item->isFreeze == 1)
                                                                                                            <i class="fa-solid fa-couch fa-couch-icon iconchuadat iconHover mb-4"
                                                                                                                style="">
                                                                                                                <span
                                                                                                                    class="fs-6">
                                                                                                                    {{ $item->seat_number }}
                                                                                                                </span>
                                                                                                            </i>
                                                                                                            {{-- @endif --}}
                                                                                                        @else
                                                                                                            {{-- @if ($item->id == 2) --}}
                                                                                                            <i class="fa-solid fa-couch fa-couch-icon mb-4"
                                                                                                                style="font-size: 25px; color: #FD2802;"
                                                                                                                disabled>
                                                                                                                <span
                                                                                                                    class="fs-6">
                                                                                                                    {{ $item->seat_number }}
                                                                                                                </span>
                                                                                                            </i>
                                                                                                        @endif

                                                                                                    </div>
                                                                                                @endforeach


                                                                                            </div>
                                                                                            <div
                                                                                                style="max-width: 750px;margin: auto;">
                                                                                                @foreach ($seats6 as $item)
                                                                                                    <div class="col-md-1 ms-3 col-sm-2 col-xs-3 text-center  seat update-seat"
                                                                                                        id="{{ $item->showtime_seat_id }}"
                                                                                                        data-seat-id="{{ $item->id}}"
                                                                                                        data-price="{{ $item->price }}"
                                                                                                        data-is-active="{{ $item->isActive }}"
                                                                                                        data-is-freeze="{{ $item->isFreeze }}"
                                                                                                        onclick="toggleSeat(this)">

                                                                                                        @if ($item->isActive == 1 && $item->isFreeze == 1)
                                                                                                            <i class="fa-solid fa-couch fa-couch-icon iconchuadat iconHover mb-4"
                                                                                                                style="">
                                                                                                                <span
                                                                                                                    class="fs-6">
                                                                                                                    {{ $item->seat_number }}
                                                                                                                </span>
                                                                                                            </i>
                                                                                                            {{-- @endif --}}
                                                                                                        @else
                                                                                                            {{-- @if ($item->id == 2) --}}
                                                                                                            <i class="fa-solid fa-couch fa-couch-icon mb-4"
                                                                                                                style="font-size: 25px; color: #FD2802;"
                                                                                                                disabled>
                                                                                                                <span
                                                                                                                    class="fs-6">
                                                                                                                    {{ $item->seat_number }}
                                                                                                                </span>
                                                                                                            </i>
                                                                                                        @endif

                                                                                                    </div>
                                                                                                @endforeach


                                                                                            </div>
                                                                                            <div
                                                                                                style="max-width: 750px;margin: auto;">
                                                                                                @foreach ($seats7 as $item)
                                                                                                    <div class="col-md-1 col-sm-2 col-xs-3 text-center  seat update-seat"
                                                                                                        id="{{ $item->showtime_seat_id }}"
                                                                                                        data-seat-id="{{ $item->id}}"
                                                                                                        data-price="{{ $item->price }}"
                                                                                                        data-is-active="{{ $item->isActive }}"
                                                                                                        data-is-freeze="{{ $item->isFreeze }}"
                                                                                                        onclick="toggleSeat(this)">

                                                                                                        @if ($item->isActive == 1 && $item->isFreeze == 1)
                                                                                                            <i class="fa-solid fa-couch fa-couch-icon iconchuadat iconHover mb-4"
                                                                                                                style="">
                                                                                                                <span
                                                                                                                    class="fs-6">
                                                                                                                    {{ $item->seat_number }}
                                                                                                                </span>
                                                                                                            </i>
                                                                                                            {{-- @endif --}}
                                                                                                        @else
                                                                                                            {{-- @if ($item->id == 2) --}}
                                                                                                            <i class="fa-solid fa-couch fa-couch-icon mb-4"
                                                                                                                style="font-size: 25px; color: #FD2802;"
                                                                                                                disabled>
                                                                                                                <span
                                                                                                                    class="fs-6">
                                                                                                                    {{ $item->seat_number }}
                                                                                                                </span>
                                                                                                            </i>
                                                                                                        @endif

                                                                                                    </div>
                                                                                                @endforeach


                                                                                            </div>
                                                                                            <div
                                                                                                style="max-width: 750px;margin: auto;">
                                                                                                @foreach ($seats8 as $item)
                                                                                                    <div class="col-md-1 ms-3 col-sm-2 col-xs-3 text-center  seat update-seat"
                                                                                                        id="{{ $item->showtime_seat_id }}"
                                                                                                        data-seat-id="{{ $item->id}}"
                                                                                                        data-price="{{ $item->price }}"
                                                                                                        data-is-active="{{ $item->isActive }}"
                                                                                                        data-is-freeze="{{ $item->isFreeze }}"
                                                                                                        onclick="toggleSeat(this)">

                                                                                                        @if ($item->isActive == 1 && $item->isFreeze == 1)
                                                                                                            <i class="fa-solid fa-couch fa-couch-icon iconchuadat iconHover mb-4"
                                                                                                                style="">
                                                                                                                <span
                                                                                                                    class="fs-6">
                                                                                                                    {{ $item->seat_number }}
                                                                                                                </span>
                                                                                                            </i>
                                                                                                            {{-- @endif --}}
                                                                                                        @else
                                                                                                            {{-- @if ($item->id == 2) --}}
                                                                                                            <i class="fa-solid fa-couch fa-couch-icon mb-4"
                                                                                                                style="font-size: 25px; color: #FD2802;"
                                                                                                                disabled>
                                                                                                                <span
                                                                                                                    class="fs-6">
                                                                                                                    {{ $item->seat_number }}
                                                                                                                </span>
                                                                                                            </i>
                                                                                                        @endif

                                                                                                    </div>
                                                                                                @endforeach


                                                                                            </div>
                                                                                        </div>
                                                                                    @else
                                                                                        <div class="row mt-4 "
                                                                                            style="max-width: 800px;margin: auto">

                                                                                            {{-- <div class="container mt-4"> --}}
                                                                                            <style>
                                                                                                .iconHover {
                                                                                                    color: #BABBC3;
                                                                                                    font-size: 25px;
                                                                                                    transition: color 0.3s;
                                                                                                }

                                                                                                .iconchuadat:hover {
                                                                                                    color: #03599D;
                                                                                                    /* Thay đổi màu khi di chuột qua */
                                                                                                }

                                                                                                .selected .iconchuadat {
                                                                                                    color: #03599D;
                                                                                                }
                                                                                            </style>

                                                                                            <div
                                                                                                style="max-width: 750px;margin: auto;">
                                                                                                @foreach ($f1 as $item)
                                                                                                    <div class="col-md-1 col-sm-2 col-xs-3 text-center  seat update-seat"
                                                                                                        id="{{ $item->showtime_seat_id }}"
                                                                                                        data-seat-id="{{ $item->id}}"
                                                                                                        data-price="{{ $item->price }}"
                                                                                                        data-is-active="{{ $item->isActive }}"
                                                                                                        data-is-freeze="{{ $item->isFreeze }}"
                                                                                                        onclick="toggleSeat(this)">

                                                                                                        @if ($item->isActive == 1 && $item->isFreeze == 1)
                                                                                                            <i class="fa-solid fa-couch fa-couch-icon iconchuadat iconHover mb-4"
                                                                                                                style="">
                                                                                                                <span
                                                                                                                    class="fs-6">
                                                                                                                    {{ $item->seat_number }}
                                                                                                                </span>
                                                                                                            </i>
                                                                                                            {{-- @endif --}}
                                                                                                        @else
                                                                                                            {{-- @if ($item->id == 2) --}}
                                                                                                            <i class="fa-solid fa-couch fa-couch-icon mb-4"
                                                                                                                style="font-size: 25px; color: #FD2802;"
                                                                                                                disabled>
                                                                                                                <span
                                                                                                                    class="fs-6">
                                                                                                                    {{ $item->seat_number }}
                                                                                                                </span>
                                                                                                            </i>
                                                                                                        @endif

                                                                                                    </div>
                                                                                                @endforeach


                                                                                            </div>
                                                                                            <div
                                                                                                style="max-width: 750px;margin: auto;">
                                                                                                @foreach ($f2 as $item)
                                                                                                    <div class="col-md-1 ms-2 col-sm-2 col-xs-3 text-center  seat update-seat"
                                                                                                        id="{{ $item->showtime_seat_id }}"
                                                                                                        data-seat-id="{{ $item->id}}"
                                                                                                        data-price="{{ $item->price }}"
                                                                                                        data-is-active="{{ $item->isActive }}"
                                                                                                        data-is-freeze="{{ $item->isFreeze }}"
                                                                                                        onclick="toggleSeat(this)">

                                                                                                        @if ($item->isActive == 1 && $item->isFreeze == 1)
                                                                                                            <i class="fa-solid fa-couch fa-couch-icon iconchuadat iconHover mb-4"
                                                                                                                style="">
                                                                                                                <span
                                                                                                                    class="fs-6">
                                                                                                                    {{ $item->seat_number }}
                                                                                                                </span>
                                                                                                            </i>
                                                                                                            {{-- @endif --}}
                                                                                                        @else
                                                                                                            {{-- @if ($item->id == 2) --}}
                                                                                                            <i class="fa-solid fa-couch fa-couch-icon mb-4"
                                                                                                                style="font-size: 25px; color: #FD2802;"
                                                                                                                disabled>
                                                                                                                <span
                                                                                                                    class="fs-6">
                                                                                                                    {{ $item->seat_number }}
                                                                                                                </span>
                                                                                                            </i>
                                                                                                        @endif

                                                                                                    </div>
                                                                                                @endforeach


                                                                                            </div>
                                                                                            <div
                                                                                                style="max-width: 750px;margin: auto;">
                                                                                                @foreach ($f3 as $item)
                                                                                                    <div class="col-md-1 col-sm-2 col-xs-3 text-center  seat update-seat"
                                                                                                        id="{{ $item->showtime_seat_id }}"
                                                                                                        data-seat-id="{{ $item->id}}"
                                                                                                        data-price="{{ $item->price }}"
                                                                                                        data-is-active="{{ $item->isActive }}"
                                                                                                        data-is-freeze="{{ $item->isFreeze }}"
                                                                                                        onclick="toggleSeat(this)">

                                                                                                        @if ($item->isActive == 1 && $item->isFreeze == 1)
                                                                                                            <i class="fa-solid fa-couch fa-couch-icon iconchuadat iconHover mb-4"
                                                                                                                style="">
                                                                                                                <span
                                                                                                                    class="fs-6">
                                                                                                                    {{ $item->seat_number }}
                                                                                                                </span>
                                                                                                            </i>
                                                                                                            {{-- @endif --}}
                                                                                                        @else
                                                                                                            {{-- @if ($item->id == 2) --}}
                                                                                                            <i class="fa-solid fa-couch fa-couch-icon mb-4"
                                                                                                                style="font-size: 25px; color: #FD2802;"
                                                                                                                disabled>
                                                                                                                <span
                                                                                                                    class="fs-6">
                                                                                                                    {{ $item->seat_number }}
                                                                                                                </span>
                                                                                                            </i>
                                                                                                        @endif

                                                                                                    </div>
                                                                                                @endforeach


                                                                                            </div>
                                                                                            <div
                                                                                                style="max-width: 750px;margin: auto;">
                                                                                                @foreach ($f4 as $item)
                                                                                                    <div class="col-md-1 col-sm-2 col-xs-3 text-center  seat update-seat"
                                                                                                        id="{{ $item->showtime_seat_id }}"
                                                                                                        data-seat-id="{{ $item->id}}"
                                                                                                        data-price="{{ $item->price }}"
                                                                                                        data-is-active="{{ $item->isActive }}"
                                                                                                        data-is-freeze="{{ $item->isFreeze }}"
                                                                                                        onclick="toggleSeat(this)">

                                                                                                        @if ($item->isActive == 1 && $item->isFreeze == 1)
                                                                                                            <i class="fa-solid fa-couch fa-couch-icon iconchuadat iconHover mb-4"
                                                                                                                style="">
                                                                                                                <span
                                                                                                                    class="fs-6">
                                                                                                                    {{ $item->seat_number }}
                                                                                                                </span>
                                                                                                            </i>
                                                                                                            {{-- @endif --}}
                                                                                                        @else
                                                                                                            {{-- @if ($item->id == 2) --}}
                                                                                                            <i class="fa-solid fa-couch fa-couch-icon mb-4"
                                                                                                                style="font-size: 25px; color: #FD2802;"
                                                                                                                disabled>
                                                                                                                <span
                                                                                                                    class="fs-6">
                                                                                                                    {{ $item->seat_number }}
                                                                                                                </span>
                                                                                                            </i>
                                                                                                        @endif

                                                                                                    </div>
                                                                                                @endforeach


                                                                                            </div>
                                                                                            <div
                                                                                                style="max-width: 750px;margin: auto;">
                                                                                                @foreach ($f5 as $item)
                                                                                                    <div class="col-md-1 ms-2 col-sm-2 col-xs-3 text-center  seat update-seat"
                                                                                                        id="{{ $item->showtime_seat_id }}"
                                                                                                        data-seat-id="{{ $item->id}}"
                                                                                                        data-price="{{ $item->price }}"
                                                                                                        data-is-active="{{ $item->isActive }}"
                                                                                                        data-is-freeze="{{ $item->isFreeze }}"
                                                                                                        onclick="toggleSeat(this)">

                                                                                                        @if ($item->isActive == 1 && $item->isFreeze == 1)
                                                                                                            <i class="fa-solid fa-couch fa-couch-icon iconchuadat iconHover mb-4"
                                                                                                                style="">
                                                                                                                <span
                                                                                                                    class="fs-6">
                                                                                                                    {{ $item->seat_number }}
                                                                                                                </span>
                                                                                                            </i>
                                                                                                            {{-- @endif --}}
                                                                                                        @else
                                                                                                            {{-- @if ($item->id == 2) --}}
                                                                                                            <i class="fa-solid fa-couch fa-couch-icon mb-4"
                                                                                                                style="font-size: 25px; color: #FD2802;"
                                                                                                                disabled>
                                                                                                                <span
                                                                                                                    class="fs-6">
                                                                                                                    {{ $item->seat_number }}
                                                                                                                </span>
                                                                                                            </i>
                                                                                                        @endif

                                                                                                    </div>
                                                                                                @endforeach


                                                                                            </div>
                                                                                            <div
                                                                                                style="max-width: 750px;margin: auto;">
                                                                                                @foreach ($f6 as $item)
                                                                                                    <div class="col-md-1 ms-3 col-sm-2 col-xs-3 text-center  seat update-seat"
                                                                                                        id="{{ $item->showtime_seat_id }}"
                                                                                                        data-seat-id="{{ $item->id}}"
                                                                                                        data-price="{{ $item->price }}"
                                                                                                        data-is-active="{{ $item->isActive }}"
                                                                                                        data-is-freeze="{{ $item->isFreeze }}"
                                                                                                        onclick="toggleSeat(this)">

                                                                                                        @if ($item->isActive == 1 && $item->isFreeze == 1)
                                                                                                            <i class="fa-solid fa-couch fa-couch-icon iconchuadat iconHover mb-4"
                                                                                                                style="">
                                                                                                                <span
                                                                                                                    class="fs-6">
                                                                                                                    {{ $item->seat_number }}
                                                                                                                </span>
                                                                                                            </i>
                                                                                                            {{-- @endif --}}
                                                                                                        @else
                                                                                                            {{-- @if ($item->id == 2) --}}
                                                                                                            <i class="fa-solid fa-couch fa-couch-icon mb-4"
                                                                                                                style="font-size: 25px; color: #FD2802;"
                                                                                                                disabled>
                                                                                                                <span
                                                                                                                    class="fs-6">
                                                                                                                    {{ $item->seat_number }}
                                                                                                                </span>
                                                                                                            </i>
                                                                                                        @endif

                                                                                                    </div>
                                                                                                @endforeach


                                                                                            </div>
                                                                                            <div
                                                                                                style="max-width: 750px;margin: auto;">
                                                                                                @foreach ($f7 as $item)
                                                                                                    <div class="col-md-1 col-sm-2 col-xs-3 text-center  seat update-seat"
                                                                                                        id="{{ $item->showtime_seat_id }}"
                                                                                                        data-seat-id="{{ $item->id}}"
                                                                                                        data-price="{{ $item->price }}"
                                                                                                        data-is-active="{{ $item->isActive }}"
                                                                                                        data-is-freeze="{{ $item->isFreeze }}"
                                                                                                        onclick="toggleSeat(this)">

                                                                                                        @if ($item->isActive == 1 && $item->isFreeze == 1)
                                                                                                            <i class="fa-solid fa-couch fa-couch-icon iconchuadat iconHover mb-4"
                                                                                                                style="">
                                                                                                                <span
                                                                                                                    class="fs-6">
                                                                                                                    {{ $item->seat_number }}
                                                                                                                </span>
                                                                                                            </i>
                                                                                                            {{-- @endif --}}
                                                                                                        @else
                                                                                                            {{-- @if ($item->id == 2) --}}
                                                                                                            <i class="fa-solid fa-couch fa-couch-icon mb-4"
                                                                                                                style="font-size: 25px; color: #FD2802;"
                                                                                                                disabled>
                                                                                                                <span
                                                                                                                    class="fs-6">
                                                                                                                    {{ $item->seat_number }}
                                                                                                                </span>
                                                                                                            </i>
                                                                                                        @endif

                                                                                                    </div>
                                                                                                @endforeach


                                                                                            </div>
                                                                                            <div
                                                                                                style="max-width: 750px;margin: auto;">
                                                                                                @foreach ($f8 as $item)
                                                                                                    <div class="col-md-1 col-sm-2 col-xs-3 text-center  seat update-seat"
                                                                                                        id="{{ $item->showtime_seat_id }}"
                                                                                                        data-seat-id="{{ $item->id}}"
                                                                                                        data-price="{{ $item->price }}"
                                                                                                        data-is-active="{{ $item->isActive }}"
                                                                                                        data-is-freeze="{{ $item->isFreeze }}"
                                                                                                        onclick="toggleSeat(this)">

                                                                                                        @if ($item->isActive == 1 && $item->isFreeze == 1)
                                                                                                            <i class="fa-solid fa-couch fa-couch-icon iconchuadat iconHover mb-4"
                                                                                                                style="">
                                                                                                                <span
                                                                                                                    class="fs-6">
                                                                                                                    {{ $item->seat_number }}
                                                                                                                </span>
                                                                                                            </i>
                                                                                                            {{-- @endif --}}
                                                                                                        @else
                                                                                                            {{-- @if ($item->id == 2) --}}
                                                                                                            <i class="fa-solid fa-couch fa-couch-icon mb-4"
                                                                                                                style="font-size: 25px; color: #FD2802;"
                                                                                                                disabled>
                                                                                                                <span
                                                                                                                    class="fs-6">
                                                                                                                    {{ $item->seat_number }}
                                                                                                                </span>
                                                                                                            </i>
                                                                                                        @endif

                                                                                                    </div>
                                                                                                @endforeach


                                                                                            </div>
                                                                                        </div>
                                                                                    @endif
                                                                                    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

                                                                                    <script>
                                                                                        const maxSeats = 8; // Số lượng ghế tối đa được chọn
                                                                                        const selectedSeats = []; // Mảng lưu các ghế đã chọn
                                                                                        const selectedSeatIds = [];
                                                                                        let totalPrice = 0;
                                                                                        let totalFoodPrice = 0; // Đặt biến totalFoodPrice ở mức toàn cục
                                                                                        const selectedFoodNames = [];
                                                                                        const foodQuantities = {};
                                                                                        const selectedSeatPrices = [];

                                                                                        function toggleSeat(seat) {
                                                                                            const seatNumber = seat.textContent.trim(); // Lấy seat_number từ nội dung của phần tử
                                                                                            const seatPrice = parseFloat(seat.getAttribute("data-price"));
                                                                                            const seatId = seat.getAttribute("id");
                                                                                            const isActive = seat.getAttribute("data-is-active");
                                                                                            const isFreeze = seat.getAttribute("data-is-freeze");
                                                                                            var selectedSeatsValueID = document.getElementById("selectedSeatsValueID");
                                                                                            if (isActive === "1" && isFreeze === "1") {
                                                                                                if (selectedSeats.includes(seatNumber)) {
                                                                                                    selectedSeats.splice(selectedSeats.indexOf(seatNumber), 1);
                                                                                                    seat.classList.remove("selected");
                                                                                                    const priceIndex = selectedSeatPrices.indexOf(seatPrice);
                                                                                                    if (priceIndex !== -1) {
                                                                                                        selectedSeatPrices.splice(priceIndex, 1);
                                                                                                    }
                                                                                                } else if (selectedSeats.length < maxSeats) {
                                                                                                    selectedSeats.push(seatNumber);
                                                                                                    seat.classList.add("selected");
                                                                                                    selectedSeatPrices.push(seatPrice);
                                                                                                } else {
                                                                                                    alert("Bạn chỉ được chọn tối đa 8 ghế.");
                                                                                                }

                                                                                                updateSelectedSeatsList();
                                                                                                selectedSeatsValueInput(); // Cập nhật giá trị trường input
                                                                                                updateTotalPrice(selectedSeatPrices);
                                                                                                if (selectedSeats.length === maxSeats) {
                                                                                                    $(".iconchuadat").removeClass("iconchuadat");
                                                                                                } else {
                                                                                                    $(".seat").addClass("iconchuadat");
                                                                                                }
                                                                                                // Thay đổi mã để lưu ID của ghế đã chọn
                                                                                                if (selectedSeatIds.includes(seatId)) {
                                                                                                    selectedSeatIds.splice(selectedSeatIds.indexOf(seatId), 1);
                                                                                                } else {
                                                                                                    selectedSeatIds.push(seatId);
                                                                                                }

                                                                                                // Lưu danh sách ID vào input
                                                                                                document.getElementById("selectedSeatsValueID").value = selectedSeatIds.slice(0, 8).join(', ');
                                                                                            } else {
                                                                                                alert("Ghế đã được đặt,không thể chọn lại.");
                                                                                            }
                                                                                            $.ajax({
                                                                                                type: 'POST',
                                                                                                url: '/update-seat-freeze/' + seatId,
                                                                                                data: {
                                                                                                    isActive: isActive
                                                                                                },
                                                                                                success: function(response) {
                                                                                                    // Cập nhật trạng thái của trường isActive trực tiếp trên trang nếu cần
                                                                                                    if (response.success) {
                                                                                                        seatElement.setAttribute('data-is-freeze', response.updatedStatus);

                                                                                                        // Thực hiện các hành động khác nếu cần
                                                                                                    }
                                                                                                },
                                                                                                error: function(error) {
                                                                                                    console.error('Error updating seat freeze status:', error);
                                                                                                }
                                                                                            });
                                                                                        }


                                                                                        function updateSelectedSeatsList() {
                                                                                            const selectedSeatsSpan = document.getElementById("selected-seats");
                                                                                            selectedSeatsSpan.textContent = selectedSeats.join(',');

                                                                                        }

                                                                                        function selectedSeatsValueInput() {
                                                                                            var selectedSeatsValue = document.getElementById("selectedSeatsValue");
                                                                                            selectedSeatsValue.value = selectedSeats.join(', ');
                                                                                        }



                                                                                        function updateTotalPrice(selectedSeatPrices) {
                                                                                            const totalPriceSpan = document.getElementById("total-price");
                                                                                            const selectedPriceSeatsValue = document.getElementById("selectedPriceSeatsValue");

                                                                                            function sumArrayElements(arr) {
                                                                                                const sum = arr.reduce((accumulator, currentValue) => accumulator + currentValue, 0);
                                                                                                return sum;
                                                                                            }
                                                                                            const total = sumArrayElements(selectedSeatPrices);
                                                                                            totalPriceSpan.textContent = total.toLocaleString();
                                                                                            selectedPriceSeatsValue.value = total;

                                                                                        }
                                                                                        // food
                                                                                        function calculateTotal() {
                                                                                            const foodItems = @json($food);
                                                                                            let total = 0;
                                                                                            let foodData = [];

                                                                                            foodItems.forEach(item => {
                                                                                                const quantityInput = document.getElementById(`quantity_${item.id}`);
                                                                                                const quantity = parseInt(quantityInput.value);
                                                                                                const itemFoodName = quantityInput.getAttribute('data-food-name');
                                                                                                const foodID = quantityInput.getAttribute('data-food-id');

                                                                                                if (quantity > 0) {
                                                                                                    const foodInfo = {
                                                                                                        name: itemFoodName,
                                                                                                        quantity: quantity,
                                                                                                        id: foodID
                                                                                                    };
                                                                                                    foodData.push(foodInfo);
                                                                                                }

                                                                                                total += quantity * item.price;
                                                                                            });

                                                                                            // Chuyển đối tượng foodData thành một chuỗi JSON và cập nhật giá trị của input "FoodValueName".
                                                                                            document.getElementById('FoodValueName').value = JSON.stringify(foodData);
                                                                                            document.getElementById('totalPriceFood').textContent = total.toLocaleString();
                                                                                            document.getElementById('totalPriceFoodValue').value = total;
                                                                                        }

                                                                                        $(document).ready(function() {
                                                                                            var selectedSeats = [];
                                                                                            var maxSeats = 8; // Số lượng ghế tối đa có thể chọn

                                                                                            $('.iconchuadat').click(function() {
                                                                                                var seat = $(this);

                                                                                                if (selectedSeats.length < maxSeats || seat.hasClass('selected')) {
                                                                                                    if (seat.hasClass('selected')) {
                                                                                                        // Trả lại màu ban đầu và loại bỏ khỏi danh sách ghế đã chọn
                                                                                                        seat.css('color', '#BABBC3');
                                                                                                        seat.removeClass('selected');
                                                                                                        selectedSeats.splice(selectedSeats.indexOf(seat), 1);
                                                                                                    } else {
                                                                                                        // Thay đổi màu và thêm vào danh sách ghế đã chọn
                                                                                                        seat.css('color', '#03599D');
                                                                                                        seat.addClass('selected');
                                                                                                        selectedSeats.push(seat);
                                                                                                    }
                                                                                                }
                                                                                            });
                                                                                        });



                                                                                        function kiemTraChonGhe() {
                                                                                            if (selectedSeats.length === 0) {
                                                                                                alert("Vui lòng chọn ít nhất một ghế trước khi tiếp tục.");
                                                                                                return false;
                                                                                            } else {
                                                                                                return true;
                                                                                            }
                                                                                        }
                                                                                    </script>

                                                                                </div>
                                                                                {{-- <div class="row text-center m-5 mt-5 p-4"
                                                                                    style="margin-top: 30px; background-color: #F8F8F8">
                                                                                    <div class="col-md-3 col-sm-4">
                                                                                        <svg style="font-size: 30px; fill: #BABBC3"
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                            height="1em"
                                                                                            viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                                            <path
                                                                                                d="M64 160C64 89.3 121.3 32 192 32H448c70.7 0 128 57.3 128 128v33.6c-36.5 7.4-64 39.7-64 78.4v48H128V272c0-38.7-27.5-71-64-78.4V160zM544 272c0-20.9 13.4-38.7 32-45.3c5-1.8 10.4-2.7 16-2.7c26.5 0 48 21.5 48 48V448c0 17.7-14.3 32-32 32H576c-17.7 0-32-14.3-32-32H96c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V272c0-26.5 21.5-48 48-48c5.6 0 11 1 16 2.7c18.6 6.6 32 24.4 32 45.3v48 32h32H512h32V320 272z" />
                                                                                        </svg>
                                                                                        <p class="fs-2 mt-3"
                                                                                            style="color: gray ;">Ghế
                                                                                            Thường
                                                                                        </p>
                                                                                    </div>

                                                                                    <div class="col-md-3 col-sm-4">
                                                                                        <svg style="font-size: 30px; fill: rgba(0, 128, 0, 0.486)"
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                            height="1em"
                                                                                            viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                                            <path
                                                                                                d="M64 160C64 89.3 121.3 32 192 32H448c70.7 0 128 57.3 128 128v33.6c-36.5 7.4-64 39.7-64 78.4v48H128V272c0-38.7-27.5-71-64-78.4V160zM544 272c0-20.9 13.4-38.7 32-45.3c5-1.8 10.4-2.7 16-2.7c26.5 0 48 21.5 48 48V448c0 17.7-14.3 32-32 32H576c-17.7 0-32-14.3-32-32H96c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V272c0-26.5 21.5-48 48-48c5.6 0 11 1 16 2.7c18.6 6.6 32 24.4 32 45.3v48 32h32H512h32V320 272z" />
                                                                                        </svg>
                                                                                        <p class="fs-2 mt-3"
                                                                                            style="color: gray ;">Ghế Vip
                                                                                        </p>
                                                                                      
                                                                                    </div>


                                                                                    <div class="col-md-3 col-sm-4">
                                                                                        <svg style="font-size: 30px; fill: rgba(255, 166, 0, 0.492)"
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                            height="1em"
                                                                                            viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                                            <path
                                                                                                d="M64 160C64 89.3 121.3 32 192 32H448c70.7 0 128 57.3 128 128v33.6c-36.5 7.4-64 39.7-64 78.4v48H128V272c0-38.7-27.5-71-64-78.4V160zM544 272c0-20.9 13.4-38.7 32-45.3c5-1.8 10.4-2.7 16-2.7c26.5 0 48 21.5 48 48V448c0 17.7-14.3 32-32 32H576c-17.7 0-32-14.3-32-32H96c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V272c0-26.5 21.5-48 48-48c5.6 0 11 1 16 2.7c18.6 6.6 32 24.4 32 45.3v48 32h32H512h32V320 272z" />
                                                                                        </svg>
                                                                                        <p class="fs-2 mt-3"
                                                                                            style="color: gray ;">Ghế Đôi
                                                                                        </p>
                                                                                    </div>

                                                                                    <div class="col-md-3 col-sm-4">
                                                                                        <svg style="font-size: 30px; fill: rgba(128, 0, 128, 0.486)"
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                            height="1em"
                                                                                            viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                                            <path
                                                                                                d="M64 160C64 89.3 121.3 32 192 32H448c70.7 0 128 57.3 128 128v33.6c-36.5 7.4-64 39.7-64 78.4v48H128V272c0-38.7-27.5-71-64-78.4V160zM544 272c0-20.9 13.4-38.7 32-45.3c5-1.8 10.4-2.7 16-2.7c26.5 0 48 21.5 48 48V448c0 17.7-14.3 32-32 32H576c-17.7 0-32-14.3-32-32H96c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V272c0-26.5 21.5-48 48-48c5.6 0 11 1 16 2.7c18.6 6.6 32 24.4 32 45.3v48 32h32H512h32V320 272z" />
                                                                                        </svg>
                                                                                        <p class="fs-2 mt-3"
                                                                                            style="color: gray ;">Ghế nằm
                                                                                        </p>
                                                                                    </div>
                                                                                </div> --}}
                                                                                {{-- food --}}
                                                                                <div>
                                                                                    <hr class="border-3 border-black mt-5">
                                                                                    <h3>Đồ ăn</h3>


                                                                                    <div>
                                                                                        <!-- Đoạn mã HTML -->
                                                                                        @foreach ($food as $item)
                                                                                            <div
                                                                                                class="card mb-3 col-md-5 m-5 product-card">
                                                                                                <div class="row g-0">
                                                                                                    <div class="col-md-4">
                                                                                                        <img 
                                                                                                        src="{{ asset("$item->thumb")}}"
                                                                                                            class="img-fluid rounded-start"
                                                                                                            alt="...">
                                                                                                    </div>
                                                                                                    <div class="col-md-8">
                                                                                                        <div
                                                                                                            class="card-body">
                                                                                                            <h5
                                                                                                                class="card-title product-title">
                                                                                                                {{ $item->name }}
                                                                                                            </h5>
                                                                                                            <p
                                                                                                                class="card-text product-description">
                                                                                                                {{ $item->content }}
                                                                                                            </p>
                                                                                                            <p
                                                                                                                class="card-text product-price">
                                                                                                                <small
                                                                                                                    class="text-body-secondary">Giá:
                                                                                                                    {{ $item->price }}đ</small>
                                                                                                            </p>
                                                                                                            <div class="input_number_product  col-md-8 d-flex mb-4"
                                                                                                                style="height: 25px">
                                                                                                                <input
                                                                                                                    type="number"
                                                                                                                    id="quantity_{{ $item->id }}"
                                                                                                                    name="quantity_{{ $item->id }}"
                                                                                                                    value="0"
                                                                                                                    min="0"
                                                                                                                    max="{{ $item->qty }}"
                                                                                                                    data-food-name="{{ $item->name }}"
                                                                                                                    data-food-id="{{ $item->id }}"
                                                                                                                    onchange="calculateTotal()">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        @endforeach

                                                                                    </div>
                                                                                </div>
                                                                                {{-- food --}}
                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3a57735"
                                                            data-id="3a57735" data-element_type="column">
                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-050b7f2 elementor-widget elementor-widget-sidebar"
                                                                    data-id="050b7f2" data-element_type="widget"
                                                                    data-widget_type="sidebar.default">
                                                                    <div class="elementor-widget-container">

                                                                        <div class="amy-widget amy-widget-list">
                                                                            <div
                                                                                class="amy-widget amy-widget-list list-movie ">
                                                                                <h4 class="amy-title amy-widget-title">
                                                                                </h4>
                                                                                <div class="entry-item">
                                                                                    <div class="entry-thumb"><img
                                                                                            class=""
                                                                                            style="width: 120px;"
                                                                                            src="{{ asset($showTime->film->thumb) }}"
                                                                                            alt="Kubo and the Two Strings" />
                                                                                    </div>
                                                                                    <div class="entry-content">
                                                                                        <h2 class="entry-title"><a
                                                                                                href=" {{ route('filmDetail', [$showTime->film->id]) }} ">{{ $showTime->film->name }}</a>
                                                                                        </h2>
                                                                                        <div><span class="duration"> <svg
                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                    height="1em"
                                                                                                    viewBox="0 0 512 512"
                                                                                                    style="fill: #ff6900"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                                                                    <path
                                                                                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z" />
                                                                                                </svg>
                                                                                                {{ $showTime->film->duration }}
                                                                                                minutes</span></div>

                                                                                    </div>
                                                                                    <div class="clearfix"></div>
                                                                                </div>

                                                                                <hr class="border-2 border-black py-4">
                                                                                <div class="">
                                                                                    <div
                                                                                        class=" d-flex align-items-center justify-content-between mb-5 px-4">
                                                                                        <div
                                                                                            class="d-flex align-items-center gap-2">
                                                                                            {{-- <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M488 64h-8v20c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12V64H96v20c0 6.6-5.4 12-12 12H44c-6.6 0-12-5.4-12-12V64h-8C10.7 64 0 74.7 0 88v336c0 13.3 10.7 24 24 24h8v-20c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v20h320v-20c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v20h8c13.3 0 24-10.7 24-24V88c0-13.3-10.7-24-24-24zM96 372c0 6.6-5.4 12-12 12H44c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40zm0-96c0 6.6-5.4 12-12 12H44c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40zm0-96c0 6.6-5.4 12-12 12H44c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40zm272 208c0 6.6-5.4 12-12 12H156c-6.6 0-12-5.4-12-12v-96c0-6.6 5.4-12 12-12h200c6.6 0 12 5.4 12 12v96zm0-168c0 6.6-5.4 12-12 12H156c-6.6 0-12-5.4-12-12v-96c0-6.6 5.4-12 12-12h200c6.6 0 12 5.4 12 12v96zm112 152c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40zm0-96c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40zm0-96c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40z"/></svg> --}}
                                                                                            <span>Rạp (Cinemas)</span>
                                                                                        </div>

                                                                                        <p class="m-0 p-0 fw-bold">
                                                                                            {{ $showTime->cinema->name }}
                                                                                        </p>
                                                                                    </div>
                                                                                    <div
                                                                                        class=" d-flex align-items-center justify-content-between mb-5 px-4 d-none">
                                                                                        <div
                                                                                            class="d-flex align-items-center gap-2">
                                                                                            {{-- <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M570.69,236.27,512,184.44V48a16,16,0,0,0-16-16H432a16,16,0,0,0-16,16V99.67L314.78,10.3C308.5,4.61,296.53,0,288,0s-20.46,4.61-26.74,10.3l-256,226A18.27,18.27,0,0,0,0,248.2a18.64,18.64,0,0,0,4.09,10.71L25.5,282.7a21.14,21.14,0,0,0,12,5.3,21.67,21.67,0,0,0,10.69-4.11l15.9-14V480a32,32,0,0,0,32,32H480a32,32,0,0,0,32-32V269.88l15.91,14A21.94,21.94,0,0,0,538.63,288a20.89,20.89,0,0,0,11.87-5.31l21.41-23.81A21.64,21.64,0,0,0,576,248.19,21,21,0,0,0,570.69,236.27ZM288,176a64,64,0,1,1-64,64A64,64,0,0,1,288,176ZM400,448H176a16,16,0,0,1-16-16,96,96,0,0,1,96-96h64a96,96,0,0,1,96,96A16,16,0,0,1,400,448Z"/></svg> --}}
                                                                                            <span>Phòng (Room)</span>
                                                                                        </div>

                                                                                        <p class="m-0 p-0 fw-bold">
                                                                                            {{ $showTime->room->name }}
                                                                                        </p>
                                                                                    </div>
                                                                                    <div
                                                                                        class=" d-flex align-items-center justify-content-between mb-5 px-4">
                                                                                        <div
                                                                                            class="d-flex align-items-center gap-2">
                                                                                            {{-- <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm64-192c0-8.8 7.2-16 16-16h96c8.8 0 16 7.2 16 16v96c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16v-96zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z"/></svg> --}}
                                                                                            <span>Ngày Chiếu (Day)</span>
                                                                                        </div>

                                                                                        <p class="m-0 p-0 fw-bold">
                                                                                            {{ Carbon\Carbon::parse($selectedDate)->format('d/m/Y') }}
                                                                                        </p>
                                                                                    </div>

                                                                                    <div
                                                                                        class=" d-flex align-items-center justify-content-between mb-5 px-4">
                                                                                        <div
                                                                                            class="d-flex align-items-center gap-2">
                                                                                            {{-- <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"/></svg> --}}
                                                                                            <span>Giờ Chiếu (Time)</span>
                                                                                        </div>

                                                                                        <p class="m-0 p-0 fw-bold">
                                                                                            {{ $selectedHour }}</p>
                                                                                    </div>

                                                                                    <div
                                                                                        class=" d-flex align-items-center justify-content-between mb-5 px-4 w-75">
                                                                                        <div
                                                                                            class="d-flex align-items-center gap-2">
                                                                                            {{-- <i
                                                                                            class="fa-regular fa-calendar-days"></i> --}}
                                                                                            <span>Ghế (Chair)</span>
                                                                                        </div>

                                                                                        <p class="w-50 m-0 p-0 fw-bold"
                                                                                            id="selected-seats"></p>
                                                                                        {{-- <input type="text" id="getseats" name="getseats"> --}}

                                                                                    </div>

                                                                                    <hr class="border-2 border-black py-4">


                                                                                    <div
                                                                                        class=" d-flex align-items-center justify-content-between mb-5 px-4">
                                                                                        <div
                                                                                            class="d-flex align-items-center gap-2">

                                                                                            <span
                                                                                                class="fs-2 fw-bold ">Ghế</span>
                                                                                            {{-- <span>1X20.00đ</span> --}}
                                                                                        </div>

                                                                                        <p class="m-0 p-0 fs-2 fw-bold"
                                                                                            id="total-price">
                                                                                        </p>
                                                                                    </div>


                                                                                    <div
                                                                                        class=" d-flex align-items-center justify-content-between mb-5 px-4">
                                                                                        <div
                                                                                            class="d-flex align-items-center gap-2">

                                                                                            <span class="fs-2 fw-bold ">Đồ
                                                                                                Ăn</span>
                                                                                            {{-- <span>1X20.00đ</span> --}}
                                                                                        </div>

                                                                                        <p class="m-0 p-0 fs-2 fw-bold"
                                                                                            id="totalPriceFood">
                                                                                        </p>
                                                                                    </div>

                                                                                    {{-- <div
                                                                                    class=" d-flex align-items-center justify-content-between mb-5 px-4">
                                                                                    <div
                                                                                        class="d-flex align-items-center gap-2">

                                                                                        <span class="fs-1 fw-bold ">Tổng
                                                                                            Tiền =</span>

                                                                                    </div>

                                                                                    <p class="m-0 p-0 fs-2 fw-bold">50.00đ
                                                                                    </p>
                                                                                </div> --}}


                                                                                    <hr class="border-2 border-black py-4">
                                                                                    <div class="d-flex">
                                                                                        <a href="{{ route('filmDetail', [$film->slug]) }}"
                                                                                            style="background-color: #FE7900;"
                                                                                            class="btn text-white btn-lg fs-4 px-4">Quay
                                                                                            lại</a>
                                                                                        <form
                                                                                            action="{{ route('pay', ['film_id' => $film->id]) }}"
                                                                                            method="get">

                                                                                            <button type="submit"
                                                                                                onclick="return kiemTraChonGhe();"
                                                                                                style="background-color: #FE7900;"
                                                                                                class=" mx-5 btn text-white btn-lg fs-4 px-4 ">
                                                                                                Tiếp Theo</button>

                                                                                            <input type="hidden"
                                                                                                name="selectedSeatsValue"
                                                                                                id="selectedSeatsValue"
                                                                                                value="">
                                                                                            <input type="hidden"
                                                                                                name="selectedPriceSeatsValue"
                                                                                                id="selectedPriceSeatsValue"
                                                                                                value="">
                                                                                            <input type="hidden"
                                                                                                name="totalPriceFoodValue"
                                                                                                id="totalPriceFoodValue"
                                                                                                value="">
                                                                                            <input type="hidden"
                                                                                                name="FoodValueName"
                                                                                                id="FoodValueName"
                                                                                                value="">
                                                                                            <input type="hidden"
                                                                                                name="selectedSeatsValueID"
                                                                                                id="selectedSeatsValueID"
                                                                                                value="">
                                                                                            <input type="hidden"
                                                                                                name="cinemaName"
                                                                                                id="cinemaName"
                                                                                                value="{{ $showTime->cinema->name }}">
                                                                                            <input type="hidden"
                                                                                                name="cinemaRoom"
                                                                                                id="cinemaRoom"
                                                                                                value="{{ $showTime->room->name }}">

                                                                                        </form>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                            <div class="clear"></div>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
                @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                    <script>
                        alert('{{ session('error') }}');
                    </script>
                </div>
            @endif
            
            @endsection
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
            <script>
              $(document).ready(function() {
    $('.update-seat').on('click', function(e) {
        e.preventDefault();
        if (selectedSeats.length < maxSeats || $(this).hasClass('selected')) {
            var seatId = $(this).data('seat-id');

            $.ajax({
                type: 'POST',
                url: '/updates/' + seatId,
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(data) {
                    console.log(data);
                    // Xử lý dữ liệu trả về (nếu cần)
                },
                error: function(error) {
                    console.log(error);
                }
            });
        } else {
            console.log("Đã đủ 8 ghế. Không thực hiện AJAX nữa.");
        }
    });
});

            </script>
              {{-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
              <script>
                  $(document).ready(function() {
                      $('.update-seat').on('click', function(e) {
                          e.preventDefault();
  
                          var seatId = $(this).data('seat-id');
  
                          $.ajax({
                              type: 'POST', // Hoặc 'GET' tùy thuộc vào cách bạn cài đặt route
                              url: '/updates/' + seatId,
                              data: {
                                  _token: '{{ csrf_token() }}'
                              }, // Cần thêm token CSRF nếu bạn sử dụng POST
                              success: function(data) {
                                  console.log(data); // Xử lý dữ liệu trả về (nếu cần)
                              },
                              error: function(error) {
                                  console.log(error);
                              }
                          });
                      });
                  });
              </script> --}}