
    @extends('client.layout.main.main')
    @section('contact')
  

    <div id="main">
        <div id="content" class="site-content">


            <section id="amy-page-header" class="amy-page-header">
                <div class="amy-page-title amy-center">
                    <div class="amy-inner container">
                        <h1 class="page-title">
                            Sắp ra mắt </h1>
                    </div>
                </div>
                <span class="amy-section-overlay"></span>
            </section>
            <section class="main-content page-layout-">
                <div class="container">
                    <div class="row">


                        <div class="col-md-12">
                            <div class="page-content">
                                <div data-elementor-type="wp-page" data-elementor-id="133"
                                    class="elementor elementor-133">
                                    <section
                                        class="elementor-section elementor-top-section elementor-element elementor-element-d82fc6b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="d82fc6b" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7316787"
                                                data-id="7316787" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-39a0ebc elementor-widget elementor-widget-Amy_Movie_List"
                                                        data-id="39a0ebc" data-element_type="widget"
                                                        data-widget_type="Amy_Movie_List.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="amy-shortcode amy-mv-list ">


                                                             
                                                                <div class="list-content amy-ajax-content">

                                                                    @foreach ($film_comming_soon as $item)
                                                                        
                                                                    
                                                                    <article class="entry-item clearfix">
                                                                        <div class="entry-thumb">
                                                                            <a  class="amy-btn-icon-text link-detail fancybox.iframe amy-fancybox"
                                                                                href="{{$item->trailer}}">
                                                                                <img class="" style="width: 200px;height: 300px;"
                                                                                    src="{{asset("storage/images/".$item->thumb)}}"
                                                                                    alt="Kubo and the Two Strings" />
                                                                            </a>
                                                                        </div>
                                                                        <div class="entry-content">
                                                                            <h2 class="entry-title">
                                                                                <a
                                                                                    href="chi-tiet-phim/{{$item->slug}}">
                                                                                    {{$item->name}}</a>
                                                                            </h2>
                                                                            <div class="info-top">
                                                                                <span class="pg">
                                                                                    G </span>

                                                                                <span class="duration">
                                                                                    <i class="fa fa-clock-o"></i>
                                                                                    {{$item->duration}} phút </span>
                                                                            </div>

                                                                            <ul class="info-list">
                                                                                

                                                                                <li>
                                                                                    <label>
                                                                                        Đạo diễn:
                                                                                    </label>
                                                                                    <span>
                                                                                      <a
                                                                                            href=""> {{$item->director}}</a> </span>
                                                                                </li>

                                                                              


                                                                                <li>
                                                                                    <label>
                                                                                        Time chiếu:
                                                                                    </label>
                                                                                    <span>
                                                                                        {{$item->premiere_date}} </span>
                                                                                </li>

                                                                                <li>
                                                                                    <label>
                                                                                        Ngôn ngữ:
                                                                                    </label>
                                                                                    <span>
                                                                                        {{$item->language}} </span>
                                                                                </li>

                                                                                <li>
                                                                                    <label>
                                                                                        Imdb:
                                                                                    </label>
                                                                                    <span>
                                                                                        8.5 </span>
                                                                                </li>

                                                                            </ul>


                                                            
                                                                        </div>
                                                                        <div class="clearfix"></div>

                                                                        <div class="entry-showtime as"
                                                                            id="entry-showtime-79">
                                                                            <div
                                                                                class="showtime-item single-cinema">
                                                                                <div class="st-item">
                                                                                    <div class="st-title">
                                                                                        <label>April 6,
                                                                                            2022</label><a
                                                                                            href="#"
                                                                                            class="amy-buy-ticket"
                                                                                            target="_blank">Buy
                                                                                            Ticket</a>
                                                                                    </div>
                                                                                    <ul>
                                                                                        <li>12h30</li>
                                                                                        <li> 15h40</li>
                                                                                        <li> 19h20</li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="st-item">
                                                                                    <div class="st-title">
                                                                                        <label>April 13,
                                                                                            2022</label><a
                                                                                            href="#"
                                                                                            class="amy-buy-ticket"
                                                                                            target="_blank">Buy
                                                                                            Ticket</a>
                                                                                    </div>
                                                                                    <ul>
                                                                                        <li>10h30</li>
                                                                                        <li> 15h20</li>
                                                                                        <li> 20h10</li>
                                                                                        <li> 23h50</li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="st-item">
                                                                                    <div class="st-title">
                                                                                        <label>May
                                                                                            4, 2022</label><a
                                                                                            href="#"
                                                                                            class="amy-buy-ticket"
                                                                                            target="_blank">Buy
                                                                                            Ticket</a></div>
                                                                                    <ul>
                                                                                        <li>09h20</li>
                                                                                        <li> 13h10</li>
                                                                                        <li> 17h20</li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="st-item">
                                                                                    <div class="st-title">
                                                                                        <label>May
                                                                                            6, 2022</label><a
                                                                                            href="#"
                                                                                            class="amy-buy-ticket"
                                                                                            target="_blank">Buy
                                                                                            Ticket</a></div>
                                                                                    <ul>
                                                                                        <li>07h20</li>
                                                                                        <li> 10h10. 15h30</li>
                                                                                        <li> 21h00</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </article>
                                                                  
                                                                    @endforeach
                                                                </div>

                                                                <div class="clear"></div>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f9a6412"
                                                data-id="f9a6412" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-2c7abfc elementor-widget elementor-widget-sidebar"
                                                        data-id="2c7abfc" data-element_type="widget"
                                                        data-widget_type="sidebar.default">
                                                        <div class="elementor-widget-container">
                                                            <div
                                                                class="amy-widget widget_block widget_media_image">
                                                                <figure class="wp-block-image size-full"><img
                                                                        loading="lazy" width="350"
                                                                        height="272"
                                                                        src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_62.png"
                                                                        alt="" class="wp-image-254"
                                                                        srcset="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_62.png 350w, http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_62-300x233.png 300w"
                                                                        sizes="(max-width: 350px) 100vw, 350px" />
                                                                </figure>
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
                                                                                    book-to-film adaptations to get
                                                                                    excited about this autumn</a>
                                                                            </h2>
                                                                            <div class="entry-meta"><span
                                                                                    class="entry-date">April 28,
                                                                                    2022</span><span> / </span><span
                                                                                    class="entry-comment">0
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
                                                                                    Beatles: Eight Days a Week – The
                                                                                    Touring</a></h2>
                                                                            <div class="entry-meta"><span
                                                                                    class="entry-date">April 28,
                                                                                    2022</span><span> / </span><span
                                                                                    class="entry-comment">0
                                                                                    Comments</span></div>
                                                                        </div>
                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="clear"></div>
                                                            </div>
                                                            <div
                                                                class="amy-widget widget_block widget_media_image">
                                                                <figure class="wp-block-image size-full"><img
                                                                        loading="lazy" width="350"
                                                                        height="290"
                                                                        src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_63.png"
                                                                        alt="" class="wp-image-255"
                                                                        srcset="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_63.png 350w, http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_63-300x249.png 300w"
                                                                        sizes="(max-width: 350px) 100vw, 350px" />
                                                                </figure>
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