<!DOCTYPE html>
<html lang="en-US">
@extends('client.layout.main.main')
@section('contact')
    <div id="main">
        <div id="content" class="site-content">


            {{-- <section id="amy-page-header" class="amy-page-header">
                <div class="amy-page-title amy-center">
                    <div class="amy-inner container">
                        <h1 class="page-title">
                            Phim đang chiếu </h1>
                    </div>
                </div>
                <span class="amy-section-overlay"></span>
            </section> --}}
            <section class="main-content page-layout-">
                <div class="container">
                    <div class="row">


                        <div class="col-md-12">
                            <div class="page-content">
                                <div data-elementor-type="wp-page" data-elementor-id="142" class="elementor elementor-142">
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


                                                                        @foreach ($film_nowplaying as $item)
                                                                            <div class="amy-movie-item entry-item">
                                                                                <div class="amy-movie-item-inner">
                                                                                    <div class="amy-movie-item-front">
                                                                                        <div class="amy-movie-item-poster">
                                                                                            <a class="amy-btn-icon-text link-detail fancybox.iframe amy-fancybox"
                                                                                                href="{{ $item->trailer }} ">
                                                                                                <img class=""
                                                                                                    src="{{ asset('storage/images/' . $item->thumb) }}"
                                                                                                    {{-- src="{{ asset("$item->thumb") }}" --}}
                                                                                                    alt="Kubo and the Two Strings" />
                                                                                            </a>
                                                                                            {{-- <span
                                                                                                class="amy-movie-field-imdb">8.5</span> --}}
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="amy-movie-item-back">
                                                                                        <div
                                                                                            class="amy-movie-item-back-inner">
                                                                                            <div
                                                                                                class="amy-movie-item-content">
                                                                                                <h3
                                                                                                    class="amy-movie-field-title">
                                                                                                    <a
                                                                                                        href="chi-tiet-phim/{{ $item->slug }}">{{ $item->name }}</a>
                                                                                                </h3>

                                                                                                <div
                                                                                                    class="amy-movie-item-meta">
                                                                                                    <span
                                                                                                        class="amy-movie-field-mpaa">G</span>
                                                                                                    <span
                                                                                                        class="amy-movie-field-duration"><i
                                                                                                            class="fa fa-clock-o"></i>{{ $item->duration }}
                                                                                                        phút</span>
                                                                                                </div>
                                                                                                <style>
                                                                                                    .h34 {
                                                                                                        max-width: 300px;
                                                                                                        /* Đặt chiều rộng tối đa của tiêu đề */
                                                                                                        overflow: hidden;
                                                                                                        /* Tránh tràn bề ngang */
                                                                                                        white-space: nowrap;
                                                                                                        /* Ngăn chặn xuống dòng */
                                                                                                        text-overflow: ellipsis;
                                                                                                        /* Thêm dấu chấm ba chấm (...) khi văn bản bị cắt bớt */
                                                                                                    }
                                                                                                </style>
                                                                                                <div
                                                                                                    class="amy-movie-field-desc ">
                                                                                                    <p class="h34">
                                                                                                        {{ $item->description }}
                                                                                                    </p>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="amy-movie-custom-field-group amy-movie-field-language">
                                                                                                    <label
                                                                                                        class="amy-movie-custom-field-label">Ngôn
                                                                                                        ngữ:</label>
                                                                                                    <div
                                                                                                        class="amy-movie-custom-field-content">
                                                                                                        {{ $item->language }}
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="amy-movie-custom-field-group amy-movie-field-release_date">
                                                                                                    <label
                                                                                                        class="amy-movie-custom-field-label">Thời
                                                                                                        gian
                                                                                                        chiếu:</label>
                                                                                                    <div
                                                                                                        class="amy-movie-custom-field-content">
                                                                                                        {{ $item->premiere_date }}
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div
                                                                                                    class="amy-movie-custom-field-group amy-movie-field-amy_actor">
                                                                                                    <label
                                                                                                        class="amy-movie-custom-field-label">Diễn
                                                                                                        viên:</label>
                                                                                                    <div
                                                                                                        class="amy-movie-custom-field-content">

                                                                                                        <a
                                                                                                            href="">{{ $item->actor }}</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="amy-movie-custom-field-group amy-movie-field-amy_director">
                                                                                                    <label
                                                                                                        class="amy-movie-custom-field-label">Đạo
                                                                                                        diễn:</label>
                                                                                                    <div
                                                                                                        class="amy-movie-custom-field-content">

                                                                                                        <a
                                                                                                            href="">{{ $item->director }}</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div
                                                                                                class="amy-movie-item-button">
                                                                                                <a href="{{ $item->trailer }}"
                                                                                                    class="amy-btn-icon-text link-detail fancybox.iframe amy-fancybox">
                                                                                                    <i
                                                                                                        class="fa fa-play"></i>Trailer</a>
                                                                                                <a class="amy-btn-icon-text link-detail"
                                                                                                    href="chi-tiet-phim/{{ $item->slug }}">
                                                                                                    <i
                                                                                                        class="fa fa-info"></i>Chi
                                                                                                    tiết</a>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endforeach


                                                                        <div class="amy-pagination">
                                                                            <div class="clear"></div>

                                                                        </div>
                                                                    </div>
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
                                                            <div class="amy-widget widget_block widget_media_image">
                                                                @php
                                                                    $banner = \App\Models\Slider::where('status', '1')
                                                                        ->where('position', '4')
                                                                        ->first();
                                                                @endphp
                                                                @if ($banner)
                                                                    <figure class="wp-block-image size-full"><img
                                                                            loading="lazy" width="350" height="272"
                                                                            src="{{ asset("$banner->image") }}" alt
                                                                            class="wp-image-254"
                                                                            sizes="(max-width: 350px) 100vw, 350px" />
                                                                    </figure>
                                                                @endif
                                                                <div class="clear"></div>
                                                            </div>
                                                            <div class="amy-widget amy-widget-list">
                                                                <div class="amy-widget amy-widget-list list-movie ">
                                                                    <h4 class="amy-title amy-widget-title">Top
                                                                        Movie</h4>
                                                                    @foreach ($film_topmovie as $item)
                                                                        <div class="entry-item">
                                                                            <div class="entry-thumb"><img class=""
                                                                                    style="height: 150px;width: 110px"
                                                                                    src="{{ asset('storage/images/' . $item->thumb) }}"
                                                                                    {{-- src="{{ asset("$item->thumb") }}" --}}
                                                                                    alt="Kubo and the Two Strings" />
                                                                            </div>
                                                                            <div class="entry-content">
                                                                                <h2 class="entry-title"><a
                                                                                        href="chi-tiet-phim/{{ $item->slug }}">{{ $item->name }}</a>
                                                                                </h2>
                                                                                <div><span class="duration"><i
                                                                                            class="fa fa-clock-o"></i>{{ $item->duration }}
                                                                                        minutes</span></div>

                                                                            </div>
                                                                            {{-- <div class="">
                                                                            <span>
                                                                                <a href=""class="px-4">  {{ $item->description }}</a>
                                                                        </span>
                                                                </div> --}}
                                                                            <div class="clearfix"></div>
                                                                        </div>
                                                                    @endforeach


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
@endsection

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
        background-color: #606060;
    }

    #amy-page-header {
        background-image: url(http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_50.jpg);
    }
</style>
