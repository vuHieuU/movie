@extends('client.layout.main.main')

@section('title', 'Trang chủ')

@section('contact')
    {{-- menu --}}
    <div id="main">
        <div id="content" class="site-content ">

            <div data-elementor-type="wp-page" data-elementor-id="84" class="elementor elementor-84 ">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-08975e9 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                    data-id="08975e9" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-222b7e7"
                            data-id="222b7e7" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-6dd3468 elementor-widget__width-inherit elementor-widget elementor-widget-Amy_Movie_Slide"
                                    data-id="6dd3468" data-element_type="widget" data-widget_type="Amy_Movie_Slide.default">
                                    <div class="elementor-widget-container">

                                        <div class="amy-shortcode amy-mv-slide">
                                            <div class="amy-slick "
                                                data-slick='{"slidesToShow":1,"slidesToScroll":1,"autoplay":true,"autoplaySpeed":3000,"prevArrow": "<a class=\"amy-arrow fa amy-pre fa-chevron-right\"></a>","nextArrow": "<a class=\"amy-arrow fa amy-next fa-chevron-left\"></a>","arrows":true,"infinite":true,"fade":true,"useCSS":true,"useTransform":true,"dots":true}'>
                                                @forelse ($sliders as $key => $sliderItem )
                                                    <div class="slide-item">
                                                        <div class="slide-thumb">
                                                            <img src="{{asset($sliderItem->image) }}" alt="">
                                                        </div>
                                                        <div class="slide-content">
                                                            <h2 class="slide-title">
                                                                <a>
                                                                    {{ $sliderItem->title}}
                                                                </a>
                                                            </h2>

                                                            <div class="slide-desc">
                                                                <p>{{ $sliderItem->description}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @empty
                                                    <div class="slide-item">
                                                        <div class="slide-thumb">
                                                            <img src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_27.jpg" alt="The Hurricane Heist" />
                                                        </div>
                                                        <div class="slide-content">
                                                            <h2 class="slide-title">
                                                                <a>
                                                                    The Hurricane <span class="last_word">Heist</span>
                                                                </a>
                                                            </h2>

                                                            <div class="slide-desc">
                                                                <p>Sed ut perspiciatis unde omnis iste natus error sit
                                                                    voluptatem accusantium doloremque laudantium, totam
                                                                    rem aperiam, eaque ipsa quae ab ...</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforelse
                                           
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div id="div1">
                    @include('client.layout.session.FilmHome')
                </div>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-a9d0dcf elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                    data-id="a9d0dcf" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6271200"
                            data-id="6271200" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-41c7e7f home-cinema-icon elementor-widget elementor-widget-text-editor"
                                    data-id="41c7e7f" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <style>
                                            /*! elementor - v3.6.5 - 27-04-2022 */
                                            .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                                background-color: #818a91;
                                                color: #fff
                                            }

                                            .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                                color: #818a91;
                                                border: 3px solid;
                                                background-color: transparent
                                            }

                                            .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                                margin-top: 8px
                                            }

                                            .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                                width: 1em;
                                                height: 1em
                                            }

                                            .elementor-widget-text-editor .elementor-drop-cap {
                                                float: left;
                                                text-align: center;
                                                line-height: 1;
                                                font-size: 50px
                                            }

                                            .elementor-widget-text-editor .elementor-drop-cap-letter {
                                                display: inline-block
                                            }
                                        </style>
                                        {{-- <div class="amy-widget-content">
                                            <ul>
                                                <li><a href="#">Rạp phim</a></li>
                                                <li><a href="#">Vouchers</a></li>
                                                <li><a href="#">Đặt vé</a></li>
                                                <li>popcorn</li>
                                            </ul>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-d06313b elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                    data-id="d06313b" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5d23715"
                            data-id="5d23715" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-af4aa50 elementor-widget elementor-widget-heading"
                                    data-id="af4aa50" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <style>
                                            /*! elementor - v3.6.5 - 27-04-2022 */
                                            .elementor-heading-title {
                                                padding: 0;
                                                margin: 0;
                                                line-height: 1
                                            }

                                            .elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
                                                color: inherit;
                                                font-size: inherit;
                                                line-height: inherit
                                            }

                                            .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                                                font-size: 15px
                                            }

                                            .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                                                font-size: 19px
                                            }

                                            .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                                                font-size: 29px
                                            }

                                            .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                                                font-size: 39px
                                            }

                                            .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                                                font-size: 59px
                                            }
                                        </style>
                                        <h2 class="elementor-heading-title elementor-size-default">Phim thịnh hành ở rạp</h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-b83f4fa elementor-widget elementor-widget-Amy_Movie_Carousel"
                                    data-id="b83f4fa" data-element_type="widget"
                                    data-widget_type="Amy_Movie_Carousel.default">
                                    <div class="elementor-widget-container">
                                        <div class="amy-shortcode amy-mv-carousel">

                                            <div class="amy-slick "
                                                data-slick='{"slidesToShow":5,"slidesToScroll":5,"autoplay":true,"autoplaySpeed":3000,"arrows":true,"infinite":true,"centerMode":true,"responsive": [{"breakpoint": 480,"settings": {"slidesToShow": 1,"slidesToScroll": 1}},{"breakpoint": 979,"settings": {"slidesToShow": 3,"slidesToScroll": 3}},{"breakpoint": 1199,"settings": {"slidesToShow": 5,"slidesToScroll": 5}},{"breakpoint": 1999,"settings": {"slidesToShow": 7,"slidesToScroll": 7}},{"breakpoint": 4999,"settings": {"slidesToShow": 20,"slidesToScroll": 20}}],"dots":true}'>
                                                @foreach ($film_topmovie as $item)
                                                        <div class="carousel-item">
                                                            <a href="chi-tiet-phim/{{ $item->slug }}">
                                                            <div class="carousel-thumb">
                                                                <a href="chi-tiet-phim/{{ $item->id }}">
                                                                    <img class=""
                                                                        src="{{ asset('storage/images/' . $item->thumb) }}"
                                                                        alt="The Sleeping Beauty &#8211; Australia" /> </a>
                                                            </div>
                                                            <div class="carousel-content">
                                                                <h2 class="carousel-title">
                                                                    <a href="chi-tiet-phim/{{ $item->id }}">
                                                                        {{ $item->name }} </a>
                                                                </h2>
                                                                <div class="carousel-release">
                                                                    Thời gian chiếu:
                                                                    <span>
                                                                        {{ Carbon\Carbon::parse($item->premiere_date)->format('d/n/Y') }}
                                                                    </span>
                                                                </div>
                                                                <div class="carousel-button">
                                                                    <a href="chi-tiet-phim/{{ $item->slug }}"
                                                                        class="fancybox.iframe amy-fancybox">
                                                                        <i aria-hidden="true" class="fa fa-play"></i>
                                                                        Trailer </a>
                                                                    {{-- <a href="{{ route('filmDetail',[$item->id]) }}">
                                                                        <i aria-hidden="true"
                                                                            class="fa fa-exclamation"></i>
                                                                        Chi tiết </a> --}}
                                                                </div>
                                                            </div>
                                                        </a>
                                                        </div>
                                                @endforeach

                                    




                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-bae4559 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="bae4559" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-c982f26"
                            data-id="c982f26" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-4a8597b elementor-widget elementor-widget-heading"
                                    data-id="4a8597b" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Video và ảnh
                                        </h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-846ee5c elementor-widget elementor-widget-image"
                                    data-id="846ee5c" data-element_type="widget" data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <style>
                                            /*! elementor - v3.6.5 - 27-04-2022 */
                                            .elementor-widget-image {
                                                text-align: center
                                            }

                                            .elementor-widget-image a {
                                                display: inline-block
                                            }

                                            .elementor-widget-image a img[src$=".svg"] {
                                                width: 48px
                                            }

                                            .elementor-widget-image img {
                                                vertical-align: middle;
                                                display: inline-block
                                            }
                                        </style> <img
                                            src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_30.jpg"
                                            title="" alt="" />
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-8d1a5bd elementor-widget elementor-widget-text-editor"
                                    data-id="8d1a5bd" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <div class="amy-widget-content">
                                            <h4>10 Cloverfield Lane</h4>
                                            <p>A young woman wakes up after a terrible accident to find that she’s…
                                                locked in a cellar with a doomsday prepper,… who insists that he
                                                saved her life and that the world outside is uninhabitable following
                                                an apocalyptic catastrophe. Uncertain what to believe, the woman
                                                soon….</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-16ca592"
                            data-id="16ca592" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-9df2d84 elementor-widget elementor-widget-Amy_V2_Movie_Gallery_Grid"
                                    data-id="9df2d84" data-element_type="widget"
                                    data-widget_type="Amy_V2_Movie_Gallery_Grid.default">
                                    <div class="elementor-widget-container">
                                        <div class="amy-gallery-grid amy-gallery ">
                                            <div class="gallery-grid-inner amy-lightgallery" data-column="3">

                                                <div class="grid-item col-sm-6 col-md-4"
                                                    data-src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_60.jpg">
                                                    <a href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_60.jpg"
                                                        class="amy-fancybox">
                                                        <span class="thumbnail">
                                                            <img width="750" height="500"
                                                                src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_60.jpg"
                                                                class="attachment-full size-full" alt=""
                                                                loading="lazy"
                                                                srcset="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_60.jpg 750w, http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_60-300x200.jpg 300w"
                                                                sizes="(max-width: 750px) 100vw, 750px" /> </span>
                                                        <span class="fa fa-search"></span>
                                                    </a>
                                                </div>

                                                <div class="grid-item col-sm-6 col-md-4"
                                                    data-src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_59.jpg">
                                                    <a href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_59.jpg"
                                                        class="amy-fancybox">
                                                        <span class="thumbnail">
                                                            <img width="750" height="500"
                                                                src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_59.jpg"
                                                                class="attachment-full size-full" alt=""
                                                                loading="lazy"
                                                                srcset="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_59.jpg 750w, http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_59-300x200.jpg 300w"
                                                                sizes="(max-width: 750px) 100vw, 750px" /> </span>
                                                        <span class="fa fa-search"></span>
                                                    </a>
                                                </div>

                                                <div class="grid-item col-sm-6 col-md-4"
                                                    data-src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_58.jpg">
                                                    <a href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_58.jpg"
                                                        class="amy-fancybox">
                                                        <span class="thumbnail">
                                                            <img width="750" height="500"
                                                                src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_58.jpg"
                                                                class="attachment-full size-full" alt=""
                                                                loading="lazy"
                                                                srcset="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_58.jpg 750w, http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_58-300x200.jpg 300w"
                                                                sizes="(max-width: 750px) 100vw, 750px" /> </span>
                                                        <span class="fa fa-search"></span>
                                                    </a>
                                                </div>

                                                <div class="grid-item col-sm-6 col-md-4"
                                                    data-src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_57.jpg">
                                                    <a href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_57.jpg"
                                                        class="amy-fancybox">
                                                        <span class="thumbnail">
                                                            <img width="750" height="500"
                                                                src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_57.jpg"
                                                                class="attachment-full size-full" alt=""
                                                                loading="lazy"
                                                                srcset="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_57.jpg 750w, http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_57-300x200.jpg 300w"
                                                                sizes="(max-width: 750px) 100vw, 750px" /> </span>
                                                        <span class="fa fa-search"></span>
                                                    </a>
                                                </div>

                                                <div class="grid-item col-sm-6 col-md-4"
                                                    data-src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_56.jpg">
                                                    <a href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_56.jpg"
                                                        class="amy-fancybox">
                                                        <span class="thumbnail">
                                                            <img width="750" height="500"
                                                                src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_56.jpg"
                                                                class="attachment-full size-full" alt=""
                                                                loading="lazy"
                                                                srcset="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_56.jpg 750w, http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_56-300x200.jpg 300w"
                                                                sizes="(max-width: 750px) 100vw, 750px" /> </span>
                                                        <span class="fa fa-search"></span>
                                                    </a>
                                                </div>

                                                <div class="grid-item col-sm-6 col-md-4"
                                                    data-src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_55.jpg">
                                                    <a href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_55.jpg"
                                                        class="amy-fancybox">
                                                        <span class="thumbnail">
                                                            <img width="750" height="500"
                                                                src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_55.jpg"
                                                                class="attachment-full size-full" alt=""
                                                                loading="lazy"
                                                                srcset="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_55.jpg 750w, http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_55-300x200.jpg 300w"
                                                                sizes="(max-width: 750px) 100vw, 750px" /> </span>
                                                        <span class="fa fa-search"></span>
                                                    </a>
                                                </div>

                                                <div class="grid-item col-sm-6 col-md-4"
                                                    data-src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_54.jpg">
                                                    <a href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_54.jpg"
                                                        class="amy-fancybox">
                                                        <span class="thumbnail">
                                                            <img width="750" height="500"
                                                                src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_54.jpg"
                                                                class="attachment-full size-full" alt=""
                                                                loading="lazy"
                                                                srcset="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_54.jpg 750w, http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_54-300x200.jpg 300w"
                                                                sizes="(max-width: 750px) 100vw, 750px" /> </span>
                                                        <span class="fa fa-search"></span>
                                                    </a>
                                                </div>

                                                <div class="grid-item col-sm-6 col-md-4"
                                                    data-src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_53.jpg">
                                                    <a href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_53.jpg"
                                                        class="amy-fancybox">
                                                        <span class="thumbnail">
                                                            <img width="750" height="500"
                                                                src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_53.jpg"
                                                                class="attachment-full size-full" alt=""
                                                                loading="lazy"
                                                                srcset="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_53.jpg 750w, http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_53-300x200.jpg 300w"
                                                                sizes="(max-width: 750px) 100vw, 750px" /> </span>
                                                        <span class="fa fa-search"></span>
                                                    </a>
                                                </div>

                                                <div class="grid-item col-sm-6 col-md-4"
                                                    data-src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_52.jpg">
                                                    <a href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_52.jpg"
                                                        class="amy-fancybox">
                                                        <span class="thumbnail">
                                                            <img width="750" height="500"
                                                                src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_52.jpg"
                                                                class="attachment-full size-full" alt=""
                                                                loading="lazy"
                                                                srcset="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_52.jpg 750w, http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_52-300x200.jpg 300w"
                                                                sizes="(max-width: 750px) 100vw, 750px" /> </span>
                                                        <span class="fa fa-search"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-a9d0dcf elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                    data-id="a9d0dcf" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6271200"
                            data-id="6271200" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-41c7e7f home-cinema-icon elementor-widget elementor-widget-text-editor"
                                    data-id="41c7e7f" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <style>
                                            /*! elementor - v3.6.5 - 27-04-2022 */
                                            .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                                background-color: #818a91;
                                                color: #fff
                                            }

                                            .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                                color: #818a91;
                                                border: 3px solid;
                                                background-color: transparent
                                            }

                                            .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                                margin-top: 8px
                                            }

                                            .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                                width: 1em;
                                                height: 1em
                                            }

                                            .elementor-widget-text-editor .elementor-drop-cap {
                                                float: left;
                                                text-align: center;
                                                line-height: 1;
                                                font-size: 50px
                                            }

                                            .elementor-widget-text-editor .elementor-drop-cap-letter {
                                                display: inline-block
                                            }
                                        </style>
                                        {{-- <div class="amy-widget-content">
                                            <ul>
                                                <li><a href="#">Rạp Phim</a></li>
                                                <li><a href="#">Vouchers</a></li>
                                                <li><a href="#">Đặt vé</a></li>
                                                <li>popcorn</li>
                                            </ul>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-d4a6835 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="d4a6835" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7609416"
                            data-id="7609416" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-5717a5b elementor-widget elementor-widget-heading"
                                    data-id="5717a5b" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Tin tức mới nhất</h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-5131c14 elementor-widget elementor-widget-Amy_Movie_Blog"
                                    data-id="5131c14" data-element_type="widget"
                                    data-widget_type="Amy_Movie_Blog.default">
                                    <div class="elementor-widget-container">
                                        <div class="amy-shortcode amy-mv-blog layout1 ">

                                            <div class="row">
                                                <div class="col-md-3 wide">
                                                    @foreach ($new_latest_new as $item)
                                                        <div class="entry-item">
                                                            <div class="entry-thumb"><img loading="lazy" width="750"
                                                                    height="500"
                                                                    src="{{ asset('/storage/images/' . $item->thumbnail) }}"
                                                                    class="attachment-full size-full wp-post-image"
                                                                    alt="" srcset=" "
                                                                    sizes="(max-width: 750px) 100vw, 750px" /></div>
                                                            <div class="entry-content">
                                                                <h2 class="entry-title"><a
                                                                        href="{{ route('detailblog', [$item->slug]) }}">{{ $item->title }}</a>
                                                                </h2><a class="entry-btn"
                                                                    href="{{ route('detailblog', [$item->slug]) }}">Xem thêm</a>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                @foreach ($new_latest as $item)
                                                    <div class="col-md-6 full">
                                                        <div class="entry-item">
                                                            <div class="entry-thumb"><img width="750" height="500"
                                                                    src="{{ asset('storage/images/' . $item->thumbnail) }}"
                                                                    class="attachment-full size-full wp-post-image"
                                                                    alt="" loading="lazy" srcset=","
                                                                    sizes="(max-width: 750px) 100vw, 750px" /></div>
                                                            <div class="entry-content">
                                                                <h2 class="entry-title"><a
                                                                        href="{{ route('detailblog', [$item->slug]) }}">{{ $item->title }}</a>
                                                                </h2>
                                                                <div class="entry-summary">
                                                                </div><a class="entry-btn"
                                                                    href="{{ route('detailblog', [$item->slug]) }}">Xem thêm</a>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                <div class="col-md-3 wide">
                                                    @foreach ($new_latest_new as $item)
                                                        <div class="entry-item">
                                                            <div class="entry-thumb"><img loading="lazy" width="750"
                                                                    height="500"
                                                                    src="{{ asset('storage/images/' . $item->thumbnail) }}"
                                                                    class="attachment-full size-full wp-post-image"
                                                                    alt="" srcset=" "
                                                                    sizes="(max-width: 750px) 100vw, 750px" /></div>
                                                            <div class="entry-content">
                                                                <h2 class="entry-title"><a
                                                                        href="{{ route('detailblog', [$item->slug]) }}">{{ $item->title }}</a>
                                                                </h2><a class="entry-btn"
                                                                    href="{{ route('detailblog', [$item->slug]) }}">Read
                                                                    more</a>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
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
@endsection

{{-- foooter --}}
