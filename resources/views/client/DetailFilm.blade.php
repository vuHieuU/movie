<!DOCTYPE html>
<html lang="en-US">

<head>
    @include('client.layout.main.HeadDetailFilm')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
{{-- ảnh url --}}
<link rel="shortcut icon" href="storage/images/img_66.png" type="image/png">
{{-- ảnh url --}}

<body
    class="amy_movie-template-default single single-amy_movie postid-74 amy-header-default  single-author elementor-default elementor-kit-5">
    <div id="page" class="hfeed site">

        @extends('client.layout.main.main')

        @section('title')
            {{$film->meta_title}}
        @endsection

        @section('meta_keyword')
            {{$film->meta_keyword}}
        @endsection

        @section('meta_description')
            {{$film->meta_description}}
        @endsection

        @section('contact')
            <div class="modal fade" id="rateStar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    </div>
                </div>
            </div>


            <div id="main">
                <div id="content" class="site-content">

                    <section id="amy-page-header" class="amy-page-header">
                        <img src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_25.jpg"
                            alt="Jumanji: Welcome to the Jungle" />
                    </section>

                    <section class="main-content amy-movie single-movie layout-right has-banner">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="page-content">

                                        <article id="post-74"
                                            class="post-74 amy_movie type-amy_movie status-publish amy_genre-cartoon amy_genre-sci-fi amy_actor-alexander-cattly amy_actor-cartin-hollia amy_actor-humpray-richard amy_director-gally-peckin amy_director-mae-west">
                                            <div class="entry-top">

                                                <div class="entry-poster mx-5"style="max-width: 250px;width: 100%;">
                                                    <img class="" src="{{ asset('storage/images/' . $film->thumb) }}"
                                                        alt="The Hurricane Heist" />
                                                    {{-- <img class="" 
                                                        src="{{ asset('storage/images/'.$film->thumb) }}"
                                                        alt="Jumanji: Welcome to the Jungle" /> --}}
                                                </div>
                                                <div class="entry-info">
                                                    <h1 class="entry-title p-name" itemprop="name headline">
                                                        <a href="" rel="bookmark" class="u-url url" itemprop="url">
                                                            {{ $film->name }}</a>

                                                    </h1>

                                                    <div class="entry-pg">
                                                        <span class="pg">G</span>

                                                        <span class="duration">

                                                            <i class="fa fa-clock-o"></i>
                                                            {{ $film->duration }} minutess
                                                        </span>

                                                    </div>

                                                    <ul class="info-list">
                                                        <li>
                                                            <label>
                                                                Diễn viên:
                                                            </label>
                                                            <span>
                                                                <a href="">{{ $film->actor }}</a>

                                                            </span>

                                                        </li>

                                                        <li>
                                                            <label>
                                                                Đạo diễn:
                                                            </label>
                                                            <span>
                                                                <a href="">{{ $film->director }}</a>
                                                            </span>

                                                        </li>

                                                        {{-- <li>
                                                            <label>
                                                                Thể loại :
                                                            </label>
                                                            <span>

                                                     
                                                                    <a href="">Hành động</a>,

                                                    </span>

                                                        </li> --}}


                                                        </li>


                                                        <li>
                                                            <label>
                                                                Ngôn ngữ:
                                                            </label>
                                                            <span>
                                                                {{ $film->country }}</span>

                                                        </li>
                                                    </ul>
                                                    @if ($check == 0)
                                                    <form action="/unLikeFilm/{{ $film->id }}" method="GET">
                                                        @csrf
                                                        <input type="Submit" value="Bỏ yêu thích">
                                                    </form>
                                                @else
                                                    <form action="/addFavoFilm" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="user_id"
                                                            value="{{ $user }}">
                                                        <input type="hidden" name="film_id"
                                                            value="{{ $film->id }}">
                                                        <input type="Submit" value="Yêu thích">
                                                    </form>
                                                @endif
                                                    {{-- BUy ticket --}}
                                                    <div class="entry-action">
                                                        {{-- @if ($film_show_time->film->status == 'đang chiếu') --}}
                                                        <div class="mrate w-4  no-rate">
                                                            @if ($film->status == '1')
                                                            <button type="button"  data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal" class="amy-buy-ticket">Đặt
                                                                vé</button>     
                                                            @endif
                                                           
                                                        </div>
                                                 

                                                   
                                                        <style>
                                                            /* Đặt màu nền cho modal */
                                                            .modal-content {
                                                                background-color: #fff;
                                                                /* Màu nền bạn muốn */
                                                            }

                                                            /* Đặt màu cho tiêu đề modal */
                                                            .modal-title {
                                                                color: #333;
                                                                /* Màu chữ bạn muốn */
                                                            }

                                                            /* Đặt màu và kiểu chữ cho cinema links */
                                                            .li {
                                                                text-decoration: none;
                                                                color: #606060;
                                                                /* Màu chữ bạn muốn */
                                                                list-style: none;
                                                                font-size: 20px;

                                                            }



                                                            /* Đặt kiểu chữ cho ngày */
                                                            .showtime-day {
                                                                font-weight: 700;
                                                                margin-left: 20px;
                                                            }

                                                            /* Đặt màu nền cho các nút option */
                                                            .option {
                                                                background-color: #fe7b00b3;
                                                                /* Màu nền bạn muốn */
                                                                font-weight: 700;
                                                            }

                                                            /* Đặt màu và kiểu chữ cho các nút option */
                                                            .hour-button {
                                                                background-color: #fe7b00b3;
                                                                /* Màu nền bạn muốn */
                                                                color: #fff;
                                                                /* Màu chữ bạn muốn */
                                                            }

                                                            .hour-button:hover {
                                                                background-color: #ff9900;
                                                                /* Màu nền khi hover */
                                                            }
                                                        </style>

                                                        {{-- model --}}
                                                        <div class="modal fade modal-xl" id="exampleModal" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h1 class="modal-title fs-2 text-muted fw-bold ps-5 "
                                                                            id="exampleModalLabel">Lịch Chiếu - <span
                                                                                class="fs-4">Phim
                                                                                {{ $film->name }}</span>
                                                                        </h1>
                                                                    </div>

                                                                    <div class="modal-header  px-5">
                                                                        <div class="container">
                                                                            <h1 class="modal-title fs-2 py-3 text-muted fw-bold"
                                                                                id="exampleModalLabel">Chọn rạp</h1>
                                                                            <div class="d-flex justify-content-around">
                                                                                @foreach (\App\Models\Cinema::get() as $cinema)
                                                                                    <a class="li" href="#"
                                                                                        data-cinema-id="{{ $cinema->id }}">
                                                                                        <li> {{ $cinema->name }}</li>
                                                                                    </a>
                                                                                @endforeach
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="modal-header px-5">
                                                                        <style>
                                                                            .A {
                                                                                text-decoration: none;
                                                                            }

                                                                            .A.active {
                                                                                text-decoration: underline;
                                                                            }
                                                                        </style>
                                                                        <div class="container">
                                                                            <h1 class="modal-title fs-2 py-3 text-muted fw-bold"
                                                                                id="exampleModalLabel">Chọn ngày</h1>
                                                                            <div class="d-flex py-4">
                                                                                @php
                                                                                    $uniqueDates = [];
                                                                                @endphp
                                                                                @foreach (\App\Models\Cinema::get() as $cinema)
                                                                                    @php
                                                                                        $cinemaDates = [];
                                                                                    @endphp
                                                                                    @foreach ($ShowTime as $item)
                                                                                        @if ($item->cinema_id == $cinema->id && !in_array($item->day, $cinemaDates))
                                                                                            @php
                                                                                                $cinemaDates[] = $item->day;
                                                                                            @endphp
                                                                                            <a class="A showtime-day fs-3"
                                                                                                style="display: none;font-weight: 700; margin-left:40px"
                                                                                                data-showtime-date="{{ $item->day }}"
                                                                                                data-showtime-cinema-id="{{ $item->cinema_id }}">
                                                                                                {{ Carbon\Carbon::parse($item->day)->format('d/m/Y') }}</a>
                                                                                        @endif
                                                                                    @endforeach
                                                                                @endforeach
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <style>
                                                                        .A.active {
                                                                            text-decoration: underline;
                                                                            color: red; /* Add this line to change the text color to red */
                                                                        }
                                                                    </style>

                                                                    <div class="modal-header px-5">
                                                                        <div class="container">
                                                                            <h1 class="modal-title fs-2 py-3 text-muted fw-bold"
                                                                                id="exampleModalLabel">Chọn giờ</h1>
                                                                            <div class="">
                                                                                <style>
                                                                                    .option {
                                                                                        background-color: #fe7b00b3;
                                                                                        font-weight: 700;
                                                                                    }
                                                                                </style>
                                                                                @foreach ($ShowTime as $item)
                                                                                    <a style="display: none"
                                                                                        class="btn option hour-button px-4 py-2 fs-5"
                                                                                        data-bs-toggle="collapse" href role
                                                                                        aria-expanded="false"
                                                                                        onclick="selectHour('{{ $item->hour }}')"
                                                                                        aria-controls="multiCollapseExample1"
                                                                                        data-showtime-date="{{ $item->day }}"
                                                                                        data-showtime-cinema-id="{{ $item->cinema_id }}"
                                                                                        data-showtime-hour="{{ $item->hour }}"
                                                                                        data-showtime-id="{{ $item->id }}">{{ $item->hour }}</a>
                                                                                @endforeach
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <form
                                                                        action="{{ route('chair', ['film_id' => $film->id]) }}"
                                                                        method="GET">
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary amy-buy-ticket"
                                                                                data-bs-dismiss="modal">Close</button>
                                                                            <button type="submit"
                                                                                class="amy-buy-ticket">Next</button>
                                                                            <input type="hidden" id="selectedCinemaId"
                                                                                name="selectedCinemaId" value="">
                                                                            <input type="hidden" id="selectedDate"
                                                                                name="selectedDate" value="">
                                                                            <input type="hidden" id="selectedHour"
                                                                                name="selectedHour" value="">
                                                                            <input type="hidden" id="selectedShowTimeId"
                                                                                name="selectedShowTimeId" value="">
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <script>
                                                            var selectedCinemaId = "";

                                                            // Function to show dates and hours for the selected cinema
                                                            function showDatesAndHoursForCinema(cinemaId) {
                                                                selectedCinemaId = cinemaId;

                                                                // Hide all date elements
                                                                var showtimeDays = document.querySelectorAll(".showtime-day");
                                                                showtimeDays.forEach(function(day) {
                                                                    day.style.display = "none";
                                                                });

                                                                // Show dates for the selected cinema
                                                                var selectedShowtimeDays = document.querySelectorAll(
                                                                    ".showtime-day[data-showtime-cinema-id='" + selectedCinemaId + "']"
                                                                );
                                                                selectedShowtimeDays.forEach(function(day) {
                                                                    day.style.display = "block";
                                                                });

                                                                // Show hours for the selected cinema and date
                                                                showHoursForSelectedCinemaAndDate();
                                                            }

                                                            // Function to show hours for the selected cinema and date
                                                            function showHoursForSelectedCinemaAndDate() {
                                                                var selectedDayElement = document.querySelector(".showtime-day[data-showtime-date='" + selectedDate + "']");
                                                                if (selectedDayElement) {
                                                                    var selectedDay = selectedDayElement.getAttribute("data-showtime-date");

                                                                    var hourButtons = document.querySelectorAll(".hour-button");
                                                                    hourButtons.forEach(function(button) {
                                                                        var showtimeDate = button.getAttribute("data-showtime-date");
                                                                        var showtimeCinemaId = button.getAttribute("data-showtime-cinema-id");
                                                                        if (showtimeDate === selectedDay && showtimeCinemaId === selectedCinemaId) {
                                                                            button.style.display = "inline-block";
                                                                        } else {
                                                                            button.style.display = "none";
                                                                        }
                                                                    });
                                                                }
                                                            }

                                                            // Call the function to show dates and hours for the first cinema when the modal is opened
                                                            document.addEventListener("DOMContentLoaded", function() {
                                                                showDatesAndHoursForCinema(document.querySelector(".li").getAttribute("data-cinema-id"));
                                                            });

                                                            var cinemaLinks = document.querySelectorAll(".li");
                                                            cinemaLinks.forEach(function(cinemaLink) {
                                                                cinemaLink.addEventListener("click", function(event) {
                                                                    event.preventDefault();
                                                                    showDatesAndHoursForCinema(cinemaLink.getAttribute("data-cinema-id"));
                                                                });
                                                            });

                                                            var showtimeDayElements = document.querySelectorAll(".showtime-day");
                                                            showtimeDayElements.forEach(function(element) {
                                                                element.addEventListener("click", function() {
                                                                    showtimeDayElements.forEach(function(dateElement) {
                                                                            dateElement.classList.remove("active");
                                                                        });

                                                                        // Select the clicked date
                                                                        element.classList.add("active");
                                                                    selectDate(element.getAttribute("data-showtime-date"));
                                                                    showHoursForSelectedCinemaAndDate();
                                                                });
                                                            });

                                                            function selectDate(date) {
                                                                selectedDate = date;
                                                                var selectDateElement = document.getElementById("selectedDate");
                                                                selectDateElement.value = selectedDate;
                                                            }

                                                            function selectHour(hour) {
                                                                selectedHour = hour;
                                                                var selectHourElement = document.getElementById("selectedHour");
                                                                selectHourElement.value = selectedHour;

                                                                var selectShowTimeId = event.currentTarget.getAttribute("data-showtime-id");
                                                                var selectShowTimeIdElement = document.getElementById("selectedShowTimeId");
                                                                selectShowTimeIdElement.value = selectShowTimeId;
                                                            }
                                                        </script>

                                                        {{-- model --}}


                                                        <div class="entry-share">
                                                            <label>Share:</label>
                                                            <ul class="amy-social-links clearfix">
                                                                <li><a href="https://www.facebook.com/sharer.php?u=http://demo.amytheme.com/movie/demo/elementor-single-cinema/movie/jumanji-welcome-to-the-jungle/"
                                                                        class="fab fa-facebook" target="_blank"></a></li>
                                                                <li><a href="http://www.twitter.com/share?url=http://demo.amytheme.com/movie/demo/elementor-single-cinema/movie/jumanji-welcome-to-the-jungle/"
                                                                        class="fab fa-twitter" target="_blank"></a></li>
                                                                <li><a href="http://pinterest.com/pin/create/button/?url=http://demo.amytheme.com/movie/demo/elementor-single-cinema/movie/jumanji-welcome-to-the-jungle/"
                                                                        class="fab fa-pinterest" target="_blank"></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    {{-- BUy ticket --}}
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>

                                            <div class="entry-content e-content" itemprop="description articleBody">
                                                <h3 class="info-name amy-title">Mô tả phim</h3>
                                                <p>{!! $film->description !!}</p>
                                            </div>

                                            <div class="entry-media">
                                                <h3 class="info-name amy-title">Video
                                                    &amp; Ảnh</h3>
                                                <div class="number-media">
                                                    <span class="gallery"><i></i>5
                                                        photos</span>
                                                </div>
                                                <div class="media-carousel">
                                                    <div class="amy-slick"
                                                        data-slick='{"slidesToShow":4,"slidesToScroll":4,"autoplay":true,"autoplaySpeed":3000,"arrows":true,"infinite":true,"responsive": [{"breakpoint": 480,"settings": {"slidesToShow": 1,"slidesToScroll": 1}},{"breakpoint": 979,"settings": {"slidesToShow": 3,"slidesToScroll": 3}}],"dots":false}'>
                                                        <div class="media-item">
                                                            <a href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_57.jpg"
                                                                class="amy-fancybox" rel="movie-gallery">
                                                                <img
                                                                    src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_57-200x150_c.jpg" />
                                                            </a>
                                                        </div>
                                                        <div class="media-item">
                                                            <a href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_56.jpg"
                                                                class="amy-fancybox" rel="movie-gallery">
                                                                <img
                                                                    src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_56-200x150_c.jpg" />
                                                            </a>
                                                        </div>
                                                        <div class="media-item">
                                                            <a href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_55.jpg"
                                                                class="amy-fancybox" rel="movie-gallery">
                                                                <img
                                                                    src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_55-200x150_c.jpg" />
                                                            </a>
                                                        </div>
                                                        <div class="media-item">
                                                            <a href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_54.jpg"
                                                                class="amy-fancybox" rel="movie-gallery">
                                                                <img
                                                                    src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_54-200x150_c.jpg" />
                                                            </a>
                                                        </div>
                                                        <div class="media-item">
                                                            <a href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_53.jpg"
                                                                class="amy-fancybox" rel="movie-gallery">
                                                                <img
                                                                    src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_53-200x150_c.jpg" />
                                                            </a>
                                                        </div>
                                                        <div class="media-item">
                                                            <a href="https://player.vimeo.com/video/51834631"
                                                                class="fancybox.iframe amy-fancybox"><img
                                                                    src="https://i.vimeocdn.com/video/357455249-732b250e69cba9e97ba604b86d2966bd6e105ddef1602ece3eedca1460d6b1d6-d_640" /><i
                                                                    class="fa fa-play"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="entry-comment">

                                                <div class="amy-comment-form">
                                                    <div id="respond" class="comment-respond">
                                                        <h3 id="reply-title" class="comment-reply-title amy-title">Write
                                                            a
                                                            comment <small><a rel="nofollow"
                                                                    id="cancel-comment-reply-link"
                                                                    href="/movie/demo/elementor-single-cinema/movie/jumanji-welcome-to-the-jungle/#respond"
                                                                    style="display:none;">Cancel
                                                                    reply</a></small></h3>
                                                        <form action="{{ route('comment.store') }}" method="post" class="comment-form">
                                                            @csrf
                                                            <input type="hidden" name="user_id"
                                                                value="{{ $user }}" hidden>
                                                            <input type="hidden" name="film_id"
                                                                value="{{ $film->id }}" hidden>
                                                            <p class="comment-form-comment"><label for="comment">Comment
                                                                    <span class="required">*</span></label>
                                                                <textarea name="comment_text" id="comment_text" cols="45" rows="8" max-length="65525"
                                                                    aria-required="true" required="required"></textarea>
                                                            {{-- <div id="commentError" class="text-danger"></div> --}}
                                                            @if (Auth()->check())
                                                                   <div class="row">
                                                                <div class="col-md-6">
                                                                    <p class="comment-form-author"><label
                                                                            for="author">Name
                                                                            <span class="required">*</span></label><input
                                                                            type="text" value="{{ Auth::user()->name }}" id="name"
                                                                            name="name" size="30" maxlength="245"
                                                                            aria-required="true" required="required" />
                                                                    </p>
                                                                    {{-- <div id="nameError" class="text-danger"></div> --}}
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p class="comment-form-email"><label
                                                                            for="email">Email
                                                                            <span class="required">*</span></label><input
                                                                            type="email" value="{{ Auth::user()->email }}" id="email"
                                                                            name="email" size="30" maxlength="100"
                                                                            aria-describedby="email-notes"
                                                                            aria-required="true" required="required" />
                                                                    </p>
                                                                    {{-- <div id="emailError" class="text-danger"></div> --}}
                                                                </div>
                                                            </div>
                                                            @else
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <p class="comment-form-author"><label
                                                                            for="author">Name
                                                                            <span class="required">*</span></label><input
                                                                            type="text" value="" id="name"
                                                                            name="name" size="30" maxlength="245"
                                                                            aria-required="true" required="required" />
                                                                    </p>
                                                                    {{-- <div id="nameError" class="text-danger"></div> --}}
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p class="comment-form-email"><label
                                                                            for="email">Email
                                                                            <span class="required">*</span></label><input
                                                                            type="email" value="" id="email"
                                                                            name="email" size="30" maxlength="100"
                                                                            aria-describedby="email-notes"
                                                                            aria-required="true" required="required" />
                                                                    </p>
                                                                    {{-- <div id="emailError" class="text-danger"></div> --}}
                                                                </div>
                                                            </div> 
                                                            @endif
                                                         

                                                            <p class="form-submit">
                                                                <button class="btn btn-success button-comment"
                                                                    type="submit">POST COMMENT</button>
                                                            </p>
                                                        </form>
                                                    </div><!-- #respond -->
                                                </div>

                                            </div>

                                        </article>
                                    </div>
                                    <div id="commentNew" class="row"></div>
                                    @foreach ($comments as $item)
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="media g-mb-30 media-comment">
                                                    <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30">
                                                        <div class="g-mb-15">
                                                            <h5 class="h5 g-color-gray-dark-v1 mb-0">{{ $item->name }}
                                                            </h5>
                                                            <span
                                                                class="g-color-gray-dark-v4 g-font-size-12" style="font-size: 12px">{{ $item->created_at->format('d-m-20y m:h:s') }}</span>
                                                        </div>

                                                        <p>{{ $item->comment_text }}</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <br>
                                    {{-- <div class="row">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status"
                                                aria-live="polite">Showing 1 to 10 of 11 entries</div>
                                        </div>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="dataTables_paginate paging_simple_numbers"
                                                id="DataTables_Table_0_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled"
                                                        id="DataTables_Table_0_previous"><a href="#"
                                                            aria-controls="DataTables_Table_0" data-dt-idx="0"
                                                            tabindex="0" class="page-link">Previous</a></li>
                                                    <li class="paginate_button page-item active"><a href="#"
                                                            aria-controls="DataTables_Table_0" data-dt-idx="1"
                                                            tabindex="0" class="page-link">1</a></li>
                                                    <li class="paginate_button page-item "><a href="#"
                                                            aria-controls="DataTables_Table_0" data-dt-idx="2"
                                                            tabindex="0" class="page-link">2</a></li>
                                                    <li class="paginate_button page-item next"
                                                        id="DataTables_Table_0_next"><a href="#"
                                                            aria-controls="DataTables_Table_0" data-dt-idx="3"
                                                            tabindex="0" class="page-link">Next</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="col-md-4 amy-sidebar-clear">
                                    <div class="amy-page-sidebar amy-sidebar-right">
                                        <aside id="sidebar">
                                            <div class="amy-widget widget_block widget_media_image">
                                                <figure class="wp-block-image size-full"><img loading="lazy"
                                                        width="350" height="272"
                                                        src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_62.png"
                                                        alt class="wp-image-254"
                                                        srcset="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_62.png 350w, http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_62-300x233.png 300w"
                                                        sizes="(max-width: 350px) 100vw, 350px" /></figure>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="amy-widget amy-widget-list">
                                                <div class="amy-widget amy-widget-list list-movie ">
                                                    <h4 class="amy-title amy-widget-title">Top phim</h4>


                                                    @foreach ($filmtopmovie as $item)
                                                        <div class="entry-item">
                                                            <div class="entry-thumb"><img style="width: 120px" class
                                                                    src="{{ asset('storage/images/' . $item->thumb) }}"
                                                                    alt="Kubo and the Two Strings" /></div>
                                                            <div class="entry-content">
                                                                <h2 class="entry-title"><a
                                                                        href="{{ route('filmDetail', [$item->id]) }}">{{ $item->name }}</a>
                                                                </h2>
                                                                <div><span class="duration"><i class="fa fa-clock-o"></i>
                                                                        {{ $item->duration }}
                                                                        minutes</span></div>

                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    @endforeach

                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="amy-widget amy-widget-list">
                                                <div class="amy-widget amy-widget-list list-post ">
                                                    <h4 class="amy-title amy-widget-title">Tin tức gần nhất</h4>
                                                    @foreach ($newdetail as $item)
                                                        <div class="entry-item">
                                                            <div class="entry-thumb"><img
                                                                    style="width: 120px; height: 150px;object-fit: cover"
                                                                    src="{{ asset('storage/images/' . $item->thumbnail) }}" />
                                                            </div>
                                                            <div class="entry-content">
                                                                <h2 class="entry-title"><a
                                                                        href="">{{ $item->title }}</a></h2>
                                                                <div class="entry-meta"><span
                                                                        class="entry-date">{{ Carbon\Carbon::parse($item->created_at)->format('d/n/Y') }}</span><span>
                                                                        /
                                                                    </span><span class="entry-comment">0
                                                                        Comments</span></div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    @endforeach

                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </aside>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>

            {{-- <script>
                $(document).ready(function() {
                    var commentNew = " ";
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    var form = $('#FormComment')[0];
                    $('#post-comment').click(function() {
                        var formData = new FormData(form);

                        function validateName(name) {
                            return name.length > 0;
                        }

                        function validateEmail(email) {
                            return email.length > 0;
                        }

                        function validateComment(comment) {
                            return comment.length > 0;
                        }

                        var postCommentButton = document.getElementById("post-comment");
                        var nameInput = document.getElementById("name");
                        var emailInput = document.getElementById("email");
                        var commentInput = document.getElementById("comment_text");

                        var nameError = document.getElementById("nameError");
                        var emailError = document.getElementById("emailError");
                        var commentError = document.getElementById("commentError");

                        nameError.textContent = "";
                        emailError.textContent = "";
                        commentError.textContent = "";

                        var comment = commentInput.value;
                        if (!validateComment(comment)) {
                            commentError.textContent = "Bình luận không được để trống";
                            return;
                        }

                        var name = nameInput.value;
                        if (!validateName(name)) {
                            nameError.textContent = "Tên không được để trống";
                            return;
                        }


                        var email = emailInput.value;
                        if (!validateEmail(email)) {
                            emailError.textContent = "Email không được để trống";
                            return;
                        }

                        $.ajax({
                            url: '{{ route('comment.store') }}',
                            method: 'POST',
                            processData: false,
                            contentType: false,
                            data: formData,

                            success: function(response) {
                                let name = document.getElementById("name").value;
                                let email = document.getElementById("email").value;
                                let comment = document.getElementById("comment_text").value;
                                let commentNew1 = " ";
                                let currentdate = new Date();
                                let datetime = currentdate.getFullYear() + "-" + currentdate
                                .getMonth() +
                                    "-" + currentdate.getDay() + " " +
                                    currentdate.getHours() + ":" +
                                    currentdate.getMinutes() + ":" + currentdate.getSeconds();
                                let form = document.getElementById("FormComment");
                                form.reset();
                                commentNew1 += '<div class="row">' +
                                    '<div class="col-md-1">' +
                                    '<img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15" src="https://vivureviews.com/wp-content/uploads/2022/08/avatar-vo-danh-9.png" alt="Image Description">' +
                                    '</div>' +
                                    '<div class="col-md-11">' +
                                    '<div class="media g-mb-30 media-comment">' +
                                    '<div class="media-body u-shadow-v18 g-bg-secondary g-pa-30">' +
                                    '<div class="g-mb-15">' +
                                    '<h5 class="h5 g-color-gray-dark-v1 mb-0">' + name + '</h5>' +
                                    '<span class="g-color-gray-dark-v4 g-font-size-12">' + datetime +
                                    '</span>' +
                                    '</div>'

                                    +
                                    '<p>' + comment + '</p>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>';

                                commentNew = commentNew1 + commentNew;
                                $('#commentNew').html(commentNew);
                            },
                            // error: function(error){
                            //     if(error){
                            //         $('#nameError').html(error.responseJSON.errors.name);
                            //         $('#emailError').html(error.responseJSON.errors.email);
                            //         $('#commentError').html(error.responseJSON.errors.comment);
                            //     }
                            // }
                        });
                    })
                })
            </script> --}}
            {{-- <script>
                @if (Session::has('error'))
                    Swal.fire({
                        icon: 'error',
                        title: 'Lỗi!',
                        text: '{{ Session::get('error') }}',
                    });
                @elseif (Session::has('success'))
                    Swal.fire({
                        icon: 'success',
                        title: 'Thành công!',
                        text: '{{ Session::get('success') }}',
                    });
                @endif
            </script> --}}
        @endsection
