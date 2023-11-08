

<footer id="amy-colophon" class="amy-site-footer">
    <div class="container">
        <div class="amy-footer-widgets">
            <div class="row">
                <div class="col-md-3 col-xs-12">
                    <div class="amy-widget amy-widget-module">
                        <div class="amy-widget amy-widget-module about ">
                            <h4 class="amy-title amy-widget-title"></h4>
                            <div class="footer-logo"><a
                                    href="/"><img
                                        src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_65.png" /></a>
                            </div>
                            <div class="summary">Chào mừng bạn đã đến với webiste đặt vé Tomorrow and Future. Chúc bạn sẽ có những trải nghiệm tốt nhất ở đây.</div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12">
                    <div class="amy-widget widget_nav_menu">
                        <div class="amy-widget-title">
                            <h4>Dịch vụ người dùng</h4>
                        </div>
                        <div class="amy-widget-content">
                            <ul id="menu-customer-services" class="menu">
                                <li id="menu-item-346"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-84 current_page_item menu-item-346">
                                    <a href="/"
                                        aria-current="page">Trang chủ</a>
                                </li>
                                <li id="menu-item-347"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-347">
                                    <a
                                        href="{{ route('dang-phat') }}">Đang chiếu</a>
                                </li>
                                <li id="menu-item-348"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-348">
                                    <a
                                        href="{{ route('contact') }}">Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12">
                    <div class="amy-widget amy-widget-list">
                        <div class="amy-widget amy-widget-list list-post ">
                            <h4 class="amy-title amy-widget-title">Bài viết mới nhất</h4>
                            @php
                                $new_footer = \App\Models\News::orderByDesc("created_at")->limit(2)->get();
                            @endphp
                            @foreach ($new_footer as $item )
                                <div class="entry-item">
                                    <div class="entry-thumb">
                                        <a href="{{ route('detailblog', [$item->id]) }}">
                                        <img src="{{ asset('storage/images/' . $item->thumbnail) }}" alt="" width="100px" height="50px">
                                    </a>
                                    </div>
                                    <div class="entry-content">
                                        <h2 class="entry-title"><a
                                                href="{{ route('detailblog', [$item->id]) }}">{{ $item->title }}</a></h2>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            @endforeach
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12">
                    <div class="amy-widget amy-widget-module">
                        <div class="amy-widget amy-widget-module contact ">
                            <h4 class="amy-title amy-widget-title">Liên hệ với chúng tôi</h4>
                            <div class="address"><i class="fa fa-location-arrow" aria-hidden="true"></i> Trịnh văn bô, Việt nam.</div>
                            <div class="email"><i class="fa fa-envelope-o" aria-hidden="true"></i>abc@gmail.com
                            </div>
                            <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>1234567890</div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div id="amy-copyright" class="amy-copyright">
    <div class="container">
        <div class="amy-inner">
            <div class="amy-copyright-left pull-left">
                <div class="amy-copyright-module amy-module-text " style="">

                    ©copyright 2023 Movie
                </div>
            </div>
            <div class="amy-copyright-right pull-right">
                <div class="amy-copyright-module amy-module-social " style="">
                    <ul class="amy-social-list">
                        <li><a href="#" class="fa fa-facebook"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

   <!-- Backend Bundle JavaScript -->
   <script src="template/assets/js/backend-bundle.min.js"></script>

   <!-- Table Treeview JavaScript -->
   <script src="template/assets/js/table-treeview.js"></script>

   <!-- Chart Custom JavaScript -->
   <script src="template/assets/js/customizer.js"></script>

   <!-- Chart Custom JavaScript -->
   <script async src="template/assets/js/chart-custom.js"></script>

   <!-- app JavaScript -->
   <script src="template/assets/js/app.js"></script>
   {{-- @endsection --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link rel="stylesheet" href="/template/fontawesome-free-6.1.1-web/css/all.css">
<script type='text/javascript'
src='http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-includes/js/jquery/ui/core.min.js?ver=1.13.1'
id='jquery-ui-core-js'></script>
<link rel="stylesheet" href="fontawesome-free-6.1.1-web/css/all.css">
<script type='text/javascript'
src='http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/themes/amy-movie/js/vendor/slick.min.js?ver=1.6.0'
id='slick-js'></script>
<script type='text/javascript'
src='http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/themes/amy-movie/js/vendor/isotope.pkgd.js?ver=3.0.1'
id='isotope-pkd-js'></script>
<script type='text/javascript'
src='http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/themes/amy-movie/js/vendor/masonry-horizontal.js?ver=2.0.0'
id='masonry-horizontal-js'></script>
<script type='text/javascript'
src='http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/themes/amy-movie/js/vendor/kinetic.js?ver=2.0.1'
id='kinetic-js'></script>
<script type='text/javascript'
src='http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/themes/amy-movie/js/vendor/smoothdivscroll.js?ver=1.3'
id='smooth-scroll-js'></script>
<script type='text/javascript'
src='http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/themes/amy-movie/js/vendor/jquery.mousewheel.min.js?ver=3.1.11'
id='mousewheel-js'></script>
<script type='text/javascript'
src='http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-includes/js/jquery/ui/datepicker.min.js?ver=1.13.1'
id='jquery-ui-datepicker-js'></script>
<script type='text/javascript' id='jquery-ui-datepicker-js-after'>
jQuery(function (jQuery) { jQuery.datepicker.setDefaults({ "closeText": "Close", "currentText": "Today", "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"], "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"], "nextText": "Next", "prevText": "Previous", "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"], "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"], "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"], "dateFormat": "MM d, yy", "firstDay": 1, "isRTL": false }); });
</script>
<script type='text/javascript'
src='http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/themes/amy-movie/js/vendor/jquery.fancybox.js?ver=3.5.7'
id='fancybox-js'></script>
<script type='text/javascript'
src='http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/themes/amy-movie/js/vendor/bootstrap-tab.js?ver=3.3.6'
id='bootstrap-tab-js'></script>
<script type='text/javascript'
src='http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-includes/js/imagesloaded.min.js?ver=4.1.4'
id='imagesloaded-js'></script>
<script type='text/javascript'
src='http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/themes/amy-movie/js/vendor/tooltipster.bundle.js?ver=1.0.0'
id='tooltipster-js'></script>
<script type='text/javascript'
src='http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/themes/amy-movie/js/vendor/jquery.waterwheelCarousel.js?ver=2.3.0'
id='waterwheelCarousel-js'></script>
<script type='text/javascript'
src='http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/themes/amy-movie/js/vendor/TweenMax.min.js?ver=1.15.1'
id='TweenMax-js'></script>
<script type='text/javascript'
src='http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/themes/amy-movie/js/vendor/jquery.mCustomScrollbar.js?ver=3.1.5'
id='mCustomScrollbar-js'></script>
<script type='text/javascript'
src='http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/themes/amy-movie/js/vendor/plyr.js?ver=1.0.0'
id='plyr-js'></script>
<script type='text/javascript'
src='http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/themes/amy-movie/js/vendor/reflection.js?ver=1.11.0'
id='reflection-js'></script>
<script type='text/javascript' id='amy-movie-script-js-extra'>
/* <![CDATA[ */
var amy_script = { "ajax_url": "http:\/\/demo.amytheme.com\/movie\/demo\/elementor-single-cinema\/wp-admin\/admin-ajax.php", "viewport": "992", "site_url": "http:\/\/demo.amytheme.com\/movie\/demo\/elementor-single-cinema\/", "theme_url": "http:\/\/demo.amytheme.com\/movie\/demo\/elementor-single-cinema\/wp-content\/themes\/amy-movie", "enable_fb_login": null, "fb_app_id": null, "enable_google_login": null, "gg_app_id": null, "gg_client_id": null, "amy_rtl": "", "amy_rate_already": "You already rate a movie", "amy_rate_done": "You vote done" };
/* ]]> */
</script>
<script type='text/javascript'
src='http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/themes/amy-movie/js/script.js?ver=1.0.0'
id='amy-movie-script-js'></script>
<script type='text/javascript'
src='http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.6.5'
id='elementor-webpack-runtime-js'></script>
<script type='text/javascript'
src='http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.6.5'
id='elementor-frontend-modules-js'></script>
<script type='text/javascript'
src='http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2'
id='elementor-waypoints-js'></script>
<script type='text/javascript' id='elementor-frontend-js-before'>
var elementorFrontendConfig = { "environmentMode": { "edit": false, "wpPreview": false, "isScriptDebug": false }, "i18n": { "shareOnFacebook": "Share on Facebook", "shareOnTwitter": "Share on Twitter", "pinIt": "Pin it", "download": "Download", "downloadImage": "Download image", "fullscreen": "Fullscreen", "zoom": "Zoom", "share": "Share", "playVideo": "Play Video", "previous": "Previous", "next": "Next", "close": "Close" }, "is_rtl": false, "breakpoints": { "xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600 }, "responsive": { "breakpoints": { "mobile": { "label": "Mobile", "value": 767, "default_value": 767, "direction": "max", "is_enabled": true }, "mobile_extra": { "label": "Mobile Extra", "value": 880, "default_value": 880, "direction": "max", "is_enabled": false }, "tablet": { "label": "Tablet", "value": 1024, "default_value": 1024, "direction": "max", "is_enabled": true }, "tablet_extra": { "label": "Tablet Extra", "value": 1200, "default_value": 1200, "direction": "max", "is_enabled": false }, "laptop": { "label": "Laptop", "value": 1366, "default_value": 1366, "direction": "max", "is_enabled": false }, "widescreen": { "label": "Widescreen", "value": 2400, "default_value": 2400, "direction": "min", "is_enabled": false } } }, "version": "3.6.5", "is_static": false, "experimentalFeatures": { "e_dom_optimization": true, "e_optimized_assets_loading": true, "e_optimized_css_loading": true, "a11y_improvements": true, "e_import_export": true, "additional_custom_breakpoints": true, "e_hidden_wordpress_widgets": true, "landing-pages": true, "elements-color-picker": true, "favorite-widgets": true, "admin-top-bar": true }, "urls": { "assets": "http:\/\/demo.amytheme.com\/movie\/demo\/elementor-single-cinema\/wp-content\/plugins\/elementor\/assets\/" }, "settings": { "page": [], "editorPreferences": [] }, "kit": { "active_breakpoints": ["viewport_mobile", "viewport_tablet"], "global_image_lightbox": "yes", "lightbox_enable_counter": "yes", "lightbox_enable_fullscreen": "yes", "lightbox_enable_zoom": "yes", "lightbox_enable_share": "yes", "lightbox_title_src": "title", "lightbox_description_src": "description" }, "post": { "id": 84, "title": "Elementor%20Single%20Cinema%20%E2%80%93%20Just%20another%20Amy%20Movie%20Sites%20site", "excerpt": "", "featuredImage": false } };
</script>
<script type='text/javascript'
src='http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.6.5'
id='elementor-frontend-js'></script>

