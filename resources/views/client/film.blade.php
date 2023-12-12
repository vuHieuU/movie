



<!DOCTYPE html>
<html lang="en-US">


        @extends('client.layout.main.main')
        @section('contact')



            <div id="main">
                <div id="content" class="site-content">


                    <section id="amy-page-header" class="amy-page-header">
                        <div class="amy-page-title amy-center">
                            <div class="amy-inner container">
                                <h1 class="page-title">
                                   Movie </h1>
                            </div>
                        </div>
                        <span class="amy-section-overlay"></span>
                    </section>

                    <section class="main-content page-layout-">

                        <div class="container">
                            <div class="row">


                                <div class="col-md-12">

                                    <div class="page-content">

                                        <div data-elementor-type="wp-page" data-elementor-id="142"
                                            class="elementor elementor-142">
                                            <div class="filter-mv style1">
                                                <style>
                                                    .category-selection {
                                                        position: relative;
                                                        display: inline-block;
                                                        font-family: Arial, sans-serif;
                                                    }

                                                    .selected-category {
                                                        background-color: #eee;
                                                        padding: 10px 15px;
                                                        cursor: pointer;
                                                        border: 1px solid #ccc;
                                                        border-radius: 5px;
                                                        user-select: none;
                                                    }

                                                    .caret {
                                                        border-left: 5px solid transparent;
                                                        border-right: 5px solid transparent;
                                                        border-top: 5px solid #333;
                                                        margin-left: 10px;
                                                    }

                                                    .category-list {
                                                        display: none;
                                                        list-style-type: none;
                                                        margin: 0;
                                                        padding: 0;
                                                        position: absolute;
                                                        top: 100%;
                                                        left: 0;
                                                        background-color: #fff;
                                                        border: 1px solid #ccc;
                                                        border-top: none;
                                                        border-radius: 0 0 5px 5px;
                                                        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
                                                        max-height: 200px;
                                                        overflow-y: auto;
                                                        z-index: 1;
                                                    }

                                                    .category-list li {
                                                        padding: 10px 15px;
                                                        cursor: pointer;
                                                        user-select: none;
                                                    }

                                                    .category-list li:hover {
                                                        background-color: #f0f0f0;
                                                    }
                                                </style>

                                                <div class="category-selection" style="width: 150px">
                                                    <div class="selected-category" onclick="toggleCategoryList()">
                                                        <span id="selected-category">Chọn category</span>

                                                    </div>
                                                    <ul id="category-list" class="category-list">
                                                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                                                        <script>
                                                            $(document).ready(function() {
                                                                $("a.li").click(function(event) {
                                                                    event.preventDefault(); // Ngăn chuyển trang khi nhấn vào liên kết.
                                                                    var categoryId = $(this).data('category-id'); // Lấy id của rạp từ thuộc tính data
                                                                    $.ajax({
                                                                        url: "/movie/" + categoryId,
                                                                        success: function(result) {
                                                                            $("#div1").html(result);
                                                                        }
                                                                    });
                                                                });
                                                            });
                                                        </script>

                                                        
                                                        <a href="/movie">
                                                            <li onclick="selectCategory('Tất cả ')">Tất cả </li>
                                                        </a>
                                                            @foreach ($category as $item)
                                                                <a 
                                                                class="li" 
                                                                {{-- href="{{ route('movie', [$item->id]) }}" --}}
                                                                    data-category-id="{{ $item->id }}">
                                                                    <li onclick="selectCategory('{{ $item->name }}')">
                                                                        {{ $item->name }}</li>
                                                                </a>
                                                            @endforeach
                                                    </ul>
                                                </div>

                                                <script>
                                                    // Lấy giá trị đã lưu từ localStorage và gán cho selectedCategorySpan
                                                    var selectedCategorySpan = document.getElementById("selected-category");
                                                    var selectedCategoryValue = localStorage.getItem("selectedCategory");
                                                    if (selectedCategoryValue) {
                                                        selectedCategorySpan.textContent = selectedCategoryValue;
                                                    }

                                                    function toggleCategoryList() {
                                                        var categoryList = document.getElementById("category-list");
                                                        if (categoryList.style.display === "block") {
                                                            categoryList.style.display = "none";
                                                        } else {
                                                            categoryList.style.display = "block";
                                                        }
                                                    }

                                                    function selectCategory(selectedCategory) {
                                                        // Lưu trạng thái đã chọn vào localStorage
                                                        localStorage.setItem("selectedCategory", selectedCategory);

                                                        var selectedCategorySpan = document.getElementById("selected-category");
                                                        selectedCategorySpan.textContent = selectedCategory;
                                                        toggleCategoryList();
                                                    }
                                                </script>


                                            </div>
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
                                                                        

                                                                        <div id="div1">
                                                                            @include('client.layout.session.Movie')
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