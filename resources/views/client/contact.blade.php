
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
                                        Contact </h1>
                                </div>
                            </div>
                            <span class="amy-section-overlay"></span>
                        </section> --}}







                    </div>
                    <div data-elementor-type="wp-page" data-elementor-id="38" class="elementor elementor-38">
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-34407b9 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="34407b9" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b5e8793"
                                    data-id="b5e8793" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-49147d5 elementor-widget elementor-widget-aovis_elementor_heading"
                                            data-id="49147d5" data-element_type="widget"
                                            data-widget_type="aovis_elementor_heading.default">
                                            <div class="elementor-widget-container">

                                                <div class="ova-heading ova-heading-template1">

                                                    <div class="icon m">
                                                        
                                                    </div>

                                                    <div class="top-heading " style="margin-top: 20px">
                                                        <h3 class="sub-title ">Liên hệ với chúng tôi</h3>



                                                        <h2 class="title">Hãy viết theo cách của bạn</h2>


                                                    </div>


                                                </div>

                                            </div>
                                        </div>
                                        <p style="color: green">
                                            {{ session('success') }}
                                        </p>
                                        <div class="elementor-element elementor-element-53cc65f elementor-widget elementor-widget-shortcode"
                                            data-id="53cc65f" data-element_type="widget"
                                            data-widget_type="shortcode.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-shortcode">
                                                    <div class="wpcf7 no-js" id="wpcf7-f5-p38-o1" lang="en-US"
                                                        dir="ltr">
                                                        <div class="screen-reader-response">
                                                            <p role="status" aria-live="polite" aria-atomic="true">
                                                            </p>
                                                            <ul></ul>
                                                        </div>
                                                        <form action="{{route("contact.store")}}" method="post"
                                                            class="wpcf7-form init" aria-label="Contact form"
                                                            novalidate="novalidate" data-status="init">
                                                            @csrf
                                                            <div style="display: none;">
                                                                <input type="hidden" name="_wpcf7"
                                                                    value="5" />
                                                                <input type="hidden" name="_wpcf7_version"
                                                                    value="5.8" />
                                                                <input type="hidden" name="_wpcf7_locale"
                                                                    value="en_US" />
                                                                <input type="hidden" name="_wpcf7_unit_tag"
                                                                    value="wpcf7-f5-p38-o1" />
                                                                <input type="hidden" name="_wpcf7_container_post"
                                                                    value="38" />
                                                                <input type="hidden" name="_wpcf7_posted_data_hash"
                                                                    value="" />
                                                            </div>
                                                            <div class="ova-ctform7">
                                                                <div class="two-column">
                                                                    <div class="name ova_wrap_input">
                                                                        <p><span class="wpcf7-form-control-wrap"
                                                                                data-name="your-name"><input
                                                                                    size="40"
                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                    aria-required="true"
                                                                                    aria-invalid="false"
                                                                                    placeholder="Họ và tên"
                                                                                    value="" type="text"
                                                                                    name="fullName" /></span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="email ova_wrap_input">
                                                                        <p><span class="wpcf7-form-control-wrap"
                                                                                data-name="your-email"><input
                                                                                    size="40"
                                                                                    class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email"
                                                                                    aria-required="true"
                                                                                    aria-invalid="false"
                                                                                    placeholder="Email"
                                                                                    value="" type="email"
                                                                                    name="email" /></span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="two-column">
                                                                    <div class="phone ova_wrap_input">
                                                                        <p><span class="wpcf7-form-control-wrap"
                                                                                data-name="your-phone"><input
                                                                                    size="40"
                                                                                    class="wpcf7-form-control wpcf7-tel wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-tel"
                                                                                    aria-required="true"
                                                                                    aria-invalid="false"
                                                                                    placeholder="Số điện thoại" value=""
                                                                                    type="tel"
                                                                                    name="phone" /></span>
                                                                        </p>
                                                                    </div>
                                                                    <div class="subject ova_wrap_input">
                                                                        <p><span class="wpcf7-form-control-wrap"
                                                                                data-name="Subject"><input
                                                                                    size="40"
                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                    aria-required="true"
                                                                                    aria-invalid="false"
                                                                                    placeholder="Tiêu đề"
                                                                                    value="" type="text"
                                                                                    name="title" /></span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="message ova_wrap_input">
                                                                    <p><span class="wpcf7-form-control-wrap"
                                                                            data-name="your-message">
                                                                            <textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                                                                aria-required="true" aria-invalid="false" placeholder="Viết bình luận..." name="content"></textarea>
                                                                        </span>
                                                                    </p>
                                                                </div>
                                                                <div class="ova-submit">
                                                                    <p><input
                                                                            class="wpcf7-form-control wpcf7-submit has-spinner"
                                                                            type="submit" value="Gửi" />
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="wpcf7-response-output" aria-hidden="true">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-3e5e475 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="3e5e475" data-element_type="section">
                            <div class="elementor-background-overlay"></div>
                            <div class="elementor-container elementor-column-gap-extended">
                                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-f7e58e9"
                                    data-id="f7e58e9" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-12ef2eb elementor-widget elementor-widget-aovis_elementor_contact_info"
                                            data-id="12ef2eb" data-element_type="widget"
                                            data-widget_type="aovis_elementor_contact_info.default">
                                            <div class="elementor-widget-container">
                                                <div class="ova-contact-info">
                                                    <div class="content">


                                                        <h3 class="title">About</h3>


                                                        <ul class="info">



                                                            <li class="item ">

                                                                <p>Morbi ut tellus ac leo mol stie luctus nec vehicula
                                                                    sed</p>


                                                            </li>


                                                        </ul>

                                                    </div>


                                                    <span class="icon"><i class="fa-regular fa-address-card"></i></span>

                                                    <div class="background"
                                                        style="background-image: url(https://demo.ovatheme.com/aovis/wp-content/uploads/2023/03/background-contact-info-1.png)">
                                                    </div>

                                                    <div class="overlay"></div>

                                                    <div class="border-wrapper"></div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-4bc0068"
                                    data-id="4bc0068" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-762c11c elementor-widget elementor-widget-aovis_elementor_contact_info"
                                            data-id="762c11c" data-element_type="widget"
                                            data-widget_type="aovis_elementor_contact_info.default">
                                            <div class="elementor-widget-container">
                                                <div class="ova-contact-info">
                                                    <div class="content">


                                                        <h3 class="title">Address</h3>


                                                        <ul class="info">



                                                            <li class="item ">
                                                                <a href="https://www.google.com/maps" target="_blank"
                                                                    title="68 Road Broklyn Street, New York, UnitedStates of America">68
                                                                    Road Broklyn Street, New York, UnitedStates of
                                                                    America</a>
                                                            </li>


                                                        </ul>

                                                    </div>


                                                    <span class="icon"><i class="fa-solid fa-location-crosshairs"></i></span>

                                                    <div class="background"
                                                        style="background-image: url(https://demo.ovatheme.com/aovis/wp-content/uploads/2023/03/background-contact-info-1.png)">
                                                    </div>

                                                    <div class="overlay"></div>

                                                    <div class="border-wrapper"></div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-8b4f8e0"
                                    data-id="8b4f8e0" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-c24b6f6 elementor-widget elementor-widget-aovis_elementor_contact_info"
                                            data-id="c24b6f6" data-element_type="widget"
                                            data-widget_type="aovis_elementor_contact_info.default">
                                            <div class="elementor-widget-container">
                                                <div class="ova-contact-info">
                                                    <div class="content">


                                                        <h3 class="title">Contact</h3>


                                                        <ul class="info">



                                                            <li class="item ">

                                                                <a href="tel:9288006780" title=" address ">+92 ( 8800
                                                                    ) - 6780</a>


                                                            </li>



                                                            <li class="item ">

                                                                <a href="/cdn-cgi/l/email-protection#711f14141519141d013100031e06155f121e1c51"
                                                                    title="address"><span class="__cf_email__"
                                                                        data-cfemail="4a242f2f2e222f263a0a3b38253d2e64292527">[email&#160;protected]</span></a>


                                                            </li>



                                                            <li class="item ">

                                                                <a href="/cdn-cgi/l/email-protection#7f161119103f0e0d10081b511c10125f"
                                                                    title="address"><span class="__cf_email__"
                                                                        data-cfemail="7910171f1639080b160e1d571a1614">[email&#160;protected]</span></a>


                                                            </li>


                                                        </ul>

                                                    </div>


                                                    <span class="icon"><i class="fa-solid fa-address-book"></i></span>

                                                    <div class="background"
                                                        style="background-image: url(https://demo.ovatheme.com/aovis/wp-content/uploads/2023/03/background-contact-info-1.png)">
                                                    </div>

                                                    <div class="overlay"></div>

                                                    <div class="border-wrapper"></div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-5aa8682 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="5aa8682" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b1dc425"
                                    data-id="b1dc425" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-10af393 elementor-widget elementor-widget-google_maps"
                                            data-id="10af393" data-element_type="widget"
                                            data-widget_type="google_maps.default">
                                            <div class="elementor-widget-container">
                                                <style>
                                                    /*! elementor - v3.15.0 - 20-08-2023 */
                                                    .elementor-widget-google_maps .elementor-widget-container {
                                                        overflow: hidden
                                                    }

                                                    .elementor-widget-google_maps .elementor-custom-embed {
                                                        line-height: 0
                                                    }

                                                    .elementor-widget-google_maps iframe {
                                                        height: 300px
                                                    }
                                                </style>
                                                <div class="elementor-custom-embed">
                                                    <iframe
                                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14895.45620275852!2d105.72735008715817!3d21.038124999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455e940879933%3A0xcf10b34e9f1a03df!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1695198952855!5m2!1svi!2s"
                                                        width="600" height="450" style="border:0;"
                                                        allowfullscreen="" loading="lazy"
                                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div> <!-- /Inside Content -->

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

<link rel='stylesheet' id='contact-form-7-css'
href='https://demo.ovatheme.com/aovis/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.8'
type='text/css' media='all' />
<link rel='stylesheet' id='mb_frontend-css'
href='https://demo.ovatheme.com/aovis/wp-content/plugins/movie-booking/assets/css/frontend/style.css?ver=6.3.1'
type='text/css' media='all' />
<link rel='stylesheet' id='event-frontend-css'
href='https://demo.ovatheme.com/aovis/wp-content/plugins/ova-events/assets/css/frontend/event.css' type='text/css'
media='all' />

<link rel='stylesheet' id='aovis-style-css'
href='https://demo.ovatheme.com/aovis/wp-content/themes/aovis/style.css?ver=1.0.1' type='text/css'
media='all' />

<style id='aovis-style-inline-css' type='text/css'>
:root {
    --primary: #d96c2c;
    --heading: #000000;
    --text: #737373;
    --light: #E0E0E0;
    --primary-font: Space Grotesk;
    --font-size: 16px;
    --line-height: 1.86em;
    --letter-spacing: 0px;
    --secondary-font: Space Grotesk;
    --width-sidebar: 370px;
    --main-content: calc(100% - 370px);
    --container-width: 1190px;
    --boxed-offset: 20px;
    --woo-layout: layout_1c;
    --woo-width-sidebar: 320px;
    --woo-main-content: calc(100% - 320px);
}

@media (min-width: 1024px) and (max-width: 1250px) {

    body .row_site,
    body .elementor-section.elementor-section-boxed>.elementor-container {
        max-width: 100%;
        padding-left: 30px;
        padding-right: 30px;
    }
}
</style>
<style id='elementor-frontend-inline-css' type='text/css'>
.elementor-kit-6 {
    --e-global-color-primary: #6EC1E4;
    --e-global-color-secondary: #54595F;
    --e-global-color-text: #7A7A7A;
    --e-global-color-accent: #61CE70;
    --e-global-typography-primary-font-family: "Roboto";
    --e-global-typography-primary-font-weight: 600;
    --e-global-typography-secondary-font-family: "Roboto Slab";
    --e-global-typography-secondary-font-weight: 400;
    --e-global-typography-text-font-family: "Roboto";
    --e-global-typography-text-font-weight: 400;
    --e-global-typography-accent-font-family: "Roboto";
    --e-global-typography-accent-font-weight: 500;
}

.elementor-section.elementor-section-boxed>.elementor-container {
    max-width: 1140px;
}

.e-con {
    --container-max-width: 1140px;
}

.elementor-widget:not(:last-child) {
    margin-bottom: 20px;
}

.elementor-element {
    --widgets-spacing: 20px;
}

    {}

h1.entry-title {
    display: var(--page-title-display);
}

@media(max-width:1024px) {
    .elementor-section.elementor-section-boxed>.elementor-container {
        max-width: 1024px;
    }

    .e-con {
        --container-max-width: 1024px;
    }
}

@media(max-width:767px) {
    .elementor-section.elementor-section-boxed>.elementor-container {
        max-width: 767px;
    }

    .e-con {
        --container-max-width: 767px;
    }
}

.elementor-38 .elementor-element.elementor-element-34407b9>.elementor-container {
    max-width: 790px;
}

.elementor-38 .elementor-element.elementor-element-34407b9 {
    margin-top: -10px;
    margin-bottom: 0px;
    padding: 0px 0px 65px 0px;
}

.elementor-38 .elementor-element.elementor-element-49147d5 .ova-heading {
    text-align: center;
}

.elementor-38 .elementor-element.elementor-element-49147d5>.elementor-widget-container {
    margin: 0px 0px 30px 0px;
}

.elementor-38 .elementor-element.elementor-element-3e5e475>.elementor-background-overlay {
    background-image: url("https://demo.ovatheme.com/aovis/wp-content/uploads/2023/03/background-map-contact-page.jpg");
    background-position: 0px 87px;
    background-repeat: no-repeat;
    background-size: cover;
    opacity: 0.1;
    mix-blend-mode: luminosity;
}

.elementor-38 .elementor-element.elementor-element-3e5e475 {
    padding: 0px 0px 110px 0px;
}

.elementor-38 .elementor-element.elementor-element-12ef2eb .ova-contact-info .overlay {
    background-color: #FFFFFF;
}

.elementor-38 .elementor-element.elementor-element-12ef2eb .ova-contact-info .background {
    opacity: 0.05;
}

.elementor-38 .elementor-element.elementor-element-762c11c .ova-contact-info .overlay {
    background-color: #FFFFFF;
}

.elementor-38 .elementor-element.elementor-element-762c11c .ova-contact-info .background {
    opacity: 0.05;
}

.elementor-38 .elementor-element.elementor-element-c24b6f6 .ova-contact-info .overlay {
    background-color: #FFFFFF;
}

.elementor-38 .elementor-element.elementor-element-c24b6f6 .ova-contact-info .background {
    opacity: 0.05;
}

.elementor-38 .elementor-element.elementor-element-10af393 iframe {
    height: 463px;
    filter: brightness(100%) contrast(100%) saturate(0%) blur(0px) hue-rotate(0deg);
}

@media(max-width:1024px) {
    .elementor-38 .elementor-element.elementor-element-34407b9 {
        margin-top: 0px;
        margin-bottom: 0px;
        padding: 10px 0px 20px 0px;
    }

    .elementor-38 .elementor-element.elementor-element-3e5e475>.elementor-background-overlay {
        background-position: top center;
        background-size: 0px auto;
    }

    .elementor-38 .elementor-element.elementor-element-3e5e475 {
        padding: 0px 0px 65px 0px;
    }

    .elementor-38 .elementor-element.elementor-element-10af393 iframe {
        height: 350px;
    }
}

@media(max-width:767px) {
    .elementor-38 .elementor-element.elementor-element-10af393 iframe {
        height: 300px;
    }
}

@media(max-width:1024px) and (min-width:768px) {
    .elementor-38 .elementor-element.elementor-element-f7e58e9 {
        width: 100%;
    }

    .elementor-38 .elementor-element.elementor-element-4bc0068 {
        width: 100%;
    }

    .elementor-38 .elementor-element.elementor-element-8b4f8e0 {
        width: 100%;
    }
}
</style> 
               