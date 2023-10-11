<!DOCTYPE html>
<html lang="en-US">

<head>
     @include('client.layout.main.HeadDetailFilm')
</head>

<body
    class="amy_movie-template-default single single-amy_movie postid-74 amy-header-default  single-author elementor-default elementor-kit-5">
    <div id="page" class="hfeed site">

        @extends('client.layout.main.main')
        @section('contact')

            <div class="modal fade" id="rateStar" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        {{-- <form action="{{ url('/add-rating') }}" method="post">
                            @csrf
                            <input type="text" name="film_id" value="{{ $film_show_time->film->id }}" hidden>
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Đánh giá phim {{ $film_show_time->film->name }}</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="rating">
                                    @if ($user_rating)
                                        @for ($l = 5; $l > $user_rating->star_rated; $l--)
                                            <input type="radio" value="{{ $l }}" name="film_rating"
                                                id="star{{ $l }}">
                                            <label for="star{{ $l }}"></label>
                                        @endfor

                                        @for ($k = $user_rating->star_rated; $k >= 1; $k--)
                                            <input type="radio" value="{{ $k }}" name="film_rating"
                                                class="star-rated" id="star{{ $k }}">
                                            <label for="star{{ $k }}" class="star-rated"></label>
                                        @endfor
                                    @else
                                        <input type="radio" value="5" name="film_rating" id="star1">
                                        <label for="star1"></label>

                                        <input type="radio" value="4" name="film_rating" id="star2">
                                        <label for="star2"></label>

                                        <input type="radio" value="3" name="film_rating" id="star3">
                                        <label for="star3"></label>

                                        <input type="radio" value="2" name="film_rating" id="star4">
                                        <label for="star4"></label>

                                        <input type="radio" value="1" name="film_rating" id="star5">
                                        <label for="star5"></label>
                                    @endif
                                </div>

                              
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                <button type="submit" class="btn btn-primary">Gửi</button>
                            </div>
                        </form> --}}
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
                                                    <img  class=""
                                                                 src="{{ asset('storage/images/'.$film_show_time->film->thumb) }}"
                                                                 alt="The Hurricane Heist" />
                                                    {{-- <img class="" 
                                                        src="{{ asset('storage/images/'.$film->thumb) }}"
                                                        alt="Jumanji: Welcome to the Jungle" /> --}}
                                                </div>
                                                <div class="entry-info">
                                                    <h1 class="entry-title p-name" itemprop="name headline">
                                                        <a href="" rel="bookmark" class="u-url url"
                                                            itemprop="url">
                                                            {{ $film_show_time->film->name }}</a>

                                                    </h1>

                                                    <div class="entry-pg">
                                                        <span class="pg">G</span>

                                                        <span class="duration">

                                                            <i class="fa fa-clock-o"></i>
                                                            {{ $film_show_time->film->duration }} minutess
                                                        </span>

                                                    </div>

                                                    <ul class="info-list">
                                                        <li>
                                                            <label>
                                                                Diễn viên:
                                                            </label>
                                                            <span>
                                                                <a href="">{{ $film_show_time->film->actor }}</a>

                                                            </span>

                                                        </li>

                                                        <li>
                                                            <label>
                                                                Đạo diễn:
                                                            </label>
                                                            <span>
                                                                <a href="">{{ $film_show_time->film->director }}</a>
                                                            </span>

                                                        </li>

                                                        <li>
                                                            <label>
                                                                Thể loại :
                                                            </label>
                                                            <span>

                                                     
                                                                    <a href="">Hành động</a>,

                                                    </span>

                                                        </li>
                                                             
                                                            
                                                        </li>


                                                        <li>
                                                            <label>
                                                                Ngôn ngữ:
                                                            </label>
                                                            <span>
                                                                {{ $film_show_time->film->country }}</span>
                                                          
                                                        </li>

                                                        {{-- <li>
                                                            @php
                                                                $rateNum = number_format($rating_value);
                                                            @endphp
                                                            <div class="rating_result">
                                                                @for ($i = 1; $i <= $rateNum; $i++)
                                                                    <i class="fa fa-star checked"></i>
                                                                @endfor

                                                                @for ($j = $rateNum + 1; $j <= 5; $j++)
                                                                    <i class="fa fa-star"></i>
                                                                @endfor
                                                            </div>
                                                            <style>
                                                                .checked {
                                                                    color: #ffe900;
                                                                }
                                                            </style>
                                                            <span style="margin-left: 2px;">

                                                                @if ($ratings->count() > 0)
                                                                    {{ $ratings->count() }} Người đánh giá
                                                                @else
                                                                    Không có đánh giá nào
                                                                @endif
                                                            </span>
                                                        </li> --}}
                                                    </ul>

                                                    {{-- BUy ticket --}}
                                                    <div class="entry-action">
                                                        <div class="mrate  no-rate">
                                                            <button type="button" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal" class="amy-buy-ticket">Buy
                                                                Ticket</button>
                                                        </div>

                                                        <div class="modal fade   modal-lg " id="exampleModal"
                                                            tabindex="-1" aria-labelledby="exampleModalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h1 class="modal-title fs-2  text-muted fw-bold"
                                                                            id="exampleModalLabel">Lịch
                                                                            Chiếu
                                                                            -
                                                                            <span class="fs-4">Phim
                                                                                {{ $film_show_time->film->name }}</span>
                                                                        </h1>

                                                                    </div>
                                                                    <div class="modal-header ">
                                                                        <h1 class="modal-title  text-center modal-dialog"
                                                                            id="exampleModalLabel"
                                                                            style="font-size: 35px ; font-weight: 500">Rạp
                                                                            Hà
                                                                            Nội</h1>

                                                                    </div>
                                                                    <div class="modal-header ">

                                                                        <style>
                                                                            .A {
                                                                                text-decoration: none;
                                                                            }

                                                                            /* Định nghĩa kiểu cho liên kết khi nó được click (có gạch chân) */
                                                                            .A.active {
                                                                                text-decoration: underline;
                                                                            }
                                                                        </style>
                                                                        <div class="row">

                                                                            @php $uniqueDates = []; @endphp
                                                                            @foreach ($ShowTime as $item)
                                                                                @if (!in_array($item->day, $uniqueDates))
                                                                                    <div
                                                                                        class="col-md-4 fs-3 navbar-nav  date-button A" style="width: 130px;">
                                                                                        <li style="background-color: #F8F8F8"
                                                                                            class=" px-3 py-2 text-white">
                                                                                            <a class="showtime-day"
                                                                                                data-showtime-date="{{ $item->day }}">{{ $item->day }}</a>
                                                                                        </li>
                                                                                    </div>
                                                                                @endif
                                                                                @php $uniqueDates[] = $item->day; @endphp
                                                                            @endforeach

                                                                        </div>
                                                                        {{-- //chọn giờ theo ngày --}}
                                                                        <script>
                                                                            var selectedDate = "";
                                                                            var selectedHour = "";
                                                                            function selectDate(date) {
                                                                                selectedDate = date;
                                            
                                                                                var selectDateElement = document.getElementById("selectedDate");
                                                                                selectDateElement.value=selectedDate
                                                                                console.log(selectDate)

                                                                            }
                                                                            function selectHour(hour) {
                                                                                selectedHour = hour;
                                            
                                                                                var selectHourElement = document.getElementById("selectedHour");
                                                                                selectHourElement.value=selectedHour
                                                                                var selectShowTimeId = event.currentTarget.getAttribute("data-showtime-id");
                                                                                
                                                                                var selectShowTimeIdElement = document.getElementById("selectedShowTimeId")
                                                                                selectShowTimeIdElement.value = selectShowTimeId
                                                                                


                                                                            }
                                                                            var showtimeDayElements = document.querySelectorAll(".showtime-day");
                                                                            showtimeDayElements.forEach(function(element) {
                                                                                element.addEventListener("click", function() {

                                                                                    var selectedDay = element.getAttribute("data-showtime-date");
                                                                                    selectDate(selectedDay);
                                                                                    console.log(selectedDay);
                                                                                    // Hiển thị giờ xem tương ứng với ngày được chọn và ẩn giờ xem của các ngày khác
                                                                                    var hourButtons = document.querySelectorAll(".hour-button");
                                                                                    hourButtons.forEach(function(button) {
                                                                                        var showtimeDate = button.getAttribute("data-showtime-date");
                                                                                        if (showtimeDate === selectedDay) {
                                                                                            button.style.display = "inline-block";
                                                                                        } else {
                                                                                            button.style.display = "none";
                                                                                        }
                                                                                    });
                                                                                });
                                                                            });
                                                                        </script>
                                                                        {{-- //chọn giờ theo ngày --}}

                                                                    </div>
                                                                    <div class="modal-header">

                                                                        <div class="container ">
                                                                            <h1 class="modal-title fs-3 py-3 text-muted fw-bold"
                                                                                id="exampleModalLabel">2D
                                                                                Phụ
                                                                                Đề</h1>
                                                                            <div class="">
                                                                                <style>
                                                                                    .option {
                                                                                        background-color: #fe7b00b3;

                                                                                        font-weight: 700
                                                                                    }
                                                                                </style>
                                                                                @foreach ($ShowTime as $item)
                                                                                    <a style="display: none"
                                                                                        class="btn  option    hour-button"
                                                                                        data-bs-toggle="collapse" href role
                                                                                        aria-expanded="false" onclick="selectHour('{{$item->hour }}')"
                                                                                        aria-controls="multiCollapseExample1"
                                                                                        data-showtime-date="{{ $item->day }}" 
                                                                                        data-showtime-id="{{$item->id}}"
                                                                                        >{{ $item->hour }}
                                                                                    </a>
                                                                                @endforeach



                                                                            </div>

                                                                        </div>


                                                                    </div>
                                                                 
                                                                    <form action="{{route('chair',['film_id'=>$film_show_time->id])}}" method="GET">
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary amy-buy-ticket"
                                                                                data-bs-dismiss="modal">Close</button>
                                                                            <button type="submit" class="amy-buy-ticket">Next</button>
                                                                            <input type="hidden" id="selectedDate" name="selectedDate" value="">
                                                                            <input type="hidden" id="selectedHour" name="selectedHour" value="">
                                                                            <input type="hidden" id="selectedShowTimeId" name="selectedShowTimeId" value="">
                                                                        </div>
                                                                        
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        {{-- <button type="button" class="btn btn-primary"
                                                            data-bs-toggle="modal" data-bs-target="#rateStar">
                                                            Đánh giá phim
                                                        </button> --}}


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
                                                <h3 class="info-name amy-title">Synopsis</h3>
                                                <p>{{ $film_show_time->film->description }}</p>
                                            </div>

                                            <div class="entry-media">
                                                <h3 class="info-name amy-title">Video
                                                    &amp; Photo</h3>
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
                                                        <form
                                                            action="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-comments-post.php"
                                                            method="post" id="commentform" class="comment-form">
                                                            <p class="comment-notes"><span id="email-notes">Your
                                                                    email
                                                                    address will
                                                                    not be
                                                                    published.</span>
                                                                <span class="required-field-message"
                                                                    aria-hidden="true">Required
                                                                    fields are
                                                                    marked <span class="required"
                                                                        aria-hidden="true">*</span></span>
                                                            </p>
                                                            <p class="comment-form-comment"><label for="comment">Comment
                                                                    <span class="required">*</span></label>
                                                                <textarea name="comment" id="comment" cols="45" rows="8" max-length="65525" aria-required="true"
                                                                    required="required"></textarea>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <p class="comment-form-author"><label
                                                                            for="author">Name
                                                                            <span class="required">*</span></label><input
                                                                            type="text" value id="author"
                                                                            name="author" size="30" maxlength="245"
                                                                            aria-required="true" required="required" />
                                                                    </p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <p class="comment-form-email"><label
                                                                            for="email">Email
                                                                            <span class="required">*</span></label><input
                                                                            type="email" value id="email"
                                                                            name="email" size="30" maxlength="100"
                                                                            aria-describedby="email-notes"
                                                                            aria-required="true" required="required" />
                                                                    </p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <p class="comment-form-url"><label
                                                                            for="url">Website</label><input
                                                                            type="url" value id="url"
                                                                            name="url" size="30"
                                                                            maxlength="200" /></p>
                                                                </div>
                                                            </div>
                                                            <p class="comment-form-cookies-consent"><input
                                                                    id="wp-comment-cookies-consent"
                                                                    name="wp-comment-cookies-consent" type="checkbox"
                                                                    value="yes" />
                                                                <label for="wp-comment-cookies-consent">Save
                                                                    my name,
                                                                    email,
                                                                    and
                                                                    website
                                                                    in this
                                                                    browser
                                                                    for the
                                                                    next
                                                                    time I
                                                                    comment.</label>
                                                            </p>
                                                            <p class="form-submit"><input name="submit" type="submit"
                                                                    id="submit" class="submit" value="Post Comment" />
                                                                <input type='hidden' name='comment_post_ID'
                                                                    value='74' id='comment_post_ID' />
                                                                <input type='hidden' name='comment_parent'
                                                                    id='comment_parent' value='0' />
                                                            </p>
                                                        </form>
                                                    </div><!-- #respond -->
                                                </div>

                                            </div>

                                        </article>
                                    </div>
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
                                                    <h4 class="amy-title amy-widget-title">Top
                                                        Movie</h4>
                                                    <div class="entry-item">
                                                        <div class="entry-thumb"><img class
                                                                src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_20-118x159_c.jpg"
                                                                alt="Kubo and the Two Strings" /></div>
                                                        <div class="entry-content">
                                                            <h2 class="entry-title"><a
                                                                    href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/movie/kubo-and-the-two-strings/">Kubo
                                                                    and the
                                                                    Two
                                                                    Strings</a></h2>
                                                            <div><span class="duration"><i class="fa fa-clock-o"></i>02
                                                                    hours 00
                                                                    minutes</span></div>
                                                            <div class="genre"><span><a
                                                                        href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/genre/cartoon/">Cartoon</a>,
                                                                    <a
                                                                        href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/genre/comic/">Comic</a></span>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="entry-item">
                                                        <div class="entry-thumb"><img class
                                                                src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_19-118x159_c.jpg"
                                                                alt="The Hurricane Heist" /></div>
                                                        <div class="entry-content">
                                                            <h2 class="entry-title"><a
                                                                    href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/movie/the-hurricane-heist/">The
                                                                    Hurricane
                                                                    Heist</a></h2>
                                                            <div><span class="duration"><i class="fa fa-clock-o"></i>01
                                                                    hours 30
                                                                    minutes</span></div>
                                                            <div class="genre"><span><a
                                                                        href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/genre/comic/">Comic</a>,
                                                                    <a
                                                                        href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/genre/magic/">Magic</a></span>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="entry-item">
                                                        <div class="entry-thumb"><img class
                                                                src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_17-118x159_c.jpg"
                                                                alt="Jumanji: Welcome to the Jungle" /></div>
                                                        <div class="entry-content">
                                                            <h2 class="entry-title"><a
                                                                    href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/movie/jumanji-welcome-to-the-jungle/">Jumanji:
                                                                    Welcome
                                                                    to the
                                                                    Jungle</a></h2>
                                                            <div><span class="duration"><i class="fa fa-clock-o"></i>02
                                                                    hours 30
                                                                    minutes</span></div>
                                                            <div class="genre"><span><a
                                                                        href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/genre/cartoon/">Cartoon</a>,
                                                                    <a
                                                                        href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/genre/sci-fi/">Sci-fi</a></span>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="entry-item">
                                                        <div class="entry-thumb"><img class
                                                                src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_18-118x159_c.jpg"
                                                                alt="Death Wish" /></div>
                                                        <div class="entry-content">
                                                            <h2 class="entry-title"><a
                                                                    href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/movie/death-wish/">Death
                                                                    Wish</a></h2>
                                                            <div><span class="duration"><i class="fa fa-clock-o"></i>01
                                                                    hours 00
                                                                    minutes</span></div>
                                                            <div class="genre"><span><a
                                                                        href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/genre/cartoon/">Cartoon</a>,
                                                                    <a
                                                                        href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/genre/comic/">Comic</a></span>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="amy-widget amy-widget-list">
                                                <div class="amy-widget amy-widget-list list-post ">
                                                    <h4 class="amy-title amy-widget-title">Recent
                                                        Posts</h4>
                                                    <div class="entry-item">
                                                        <div class="entry-thumb"><img
                                                                src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_59-115x85_c.jpg" />
                                                        </div>
                                                        <div class="entry-content">
                                                            <h2 class="entry-title"><a
                                                                    href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/2022/04/28/six-book-to-film-adaptations-to-get-excited-about-this-autumn/">Six
                                                                    book-to-film
                                                                    adaptations
                                                                    to get
                                                                    excited
                                                                    about
                                                                    this
                                                                    autumn</a></h2>
                                                            <div class="entry-meta"><span class="entry-date">April
                                                                    28,
                                                                    2022</span><span>
                                                                    /
                                                                </span><span class="entry-comment">0
                                                                    Comments</span></div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="entry-item">
                                                        <div class="entry-thumb"><img
                                                                src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_57-115x85_c.jpg" />
                                                        </div>
                                                        <div class="entry-content">
                                                            <h2 class="entry-title"><a
                                                                    href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/2022/04/28/the-beatles-eight-days-a-week-the-touring/">The
                                                                    Beatles:
                                                                    Eight
                                                                    Days a
                                                                    Week –
                                                                    The
                                                                    Touring</a></h2>
                                                            <div class="entry-meta"><span class="entry-date">April
                                                                    28,
                                                                    2022</span><span>
                                                                    /
                                                                </span><span class="entry-comment">0
                                                                    Comments</span></div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="amy-widget widget_block widget_media_image">
                                                <figure class="wp-block-image size-full"><img loading="lazy"
                                                        width="350" height="290"
                                                        src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_63.png"
                                                        alt class="wp-image-255"
                                                        srcset="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_63.png 350w, http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_63-300x249.png 300w"
                                                        sizes="(max-width: 350px) 100vw, 350px" /></figure>
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
        @endsection
