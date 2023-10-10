<header id="masthead" class="site-header header-default  light">
    <div class="container">
        <div class="amy-inner">
            <div class="amy-left">
                <div id="amy-site-logo " style="width: 70%;">
                    <a href="/" >
                        <img src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_66.png"
                            alt="Elementor Single Cinema" />
                    </a>

                </div>


            </div>
            <div style="margin: 0 30px">
                <style>
                    .rap-selection {
                        position: relative;
                        display: inline-block;
                        font-family: Arial, sans-serif;
                    }

                    .selected-rap {
                        background-color: #eee;
                        padding: 10px 15px;
                        cursor: pointer;
                        border: 1px solid #ccc;
                        border-radius: 5px 5px 0 0;
                        user-select: none;
                    }

                    .caret {
                        border-left: 5px solid transparent;
                        border-right: 5px solid transparent;
                        border-top: 5px solid #333;
                        margin-left: 10px;
                    }

                    .rap-list {
                        display: none;
                        list-style-type: none;
                        margin: 0;
                        padding: 0;
                        position: absolute;
                        top: 100%;
                        left: 0;
                        background-color: #fff;
                        border: 1px solid #ccc;
                        border-radius: 0 0 5px 5px;
                        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
                        max-height: 200px;
                        overflow-y: auto;
                        z-index: 1;
                    }

                    .rap-list li {
                        padding: 10px 15px;
                        cursor: pointer;
                        user-select: none;
                        width: 159px;
                        background-color: #f8f3f3;
                    }

                    .rap-list li:hover {
                        background-color: #ffffff;
                    }
                </style>

                <div class="rap-selection " style="width: 160px;">
                    <div class="selected-rap" onclick="toggleRapList()">
                        <span id="selected-rap">Chọn rạp</span>

                    </div>
                    <ul id="rap-list" class="rap-list">
                        @foreach (\App\Models\cinema::get() as $cinema)
                        <a href="{{ route('homeCinema',[$cinema->id]) }}"> <li onclick="selectRap('{{ $cinema->name }}')"> {{ $cinema->name }} </li></a>
                        @endforeach
                       
                    </ul>
                </div>

                <script>
                    // Kiểm tra nếu đã có một lựa chọn trước đó trong Local Storage
                    var selectedRap = localStorage.getItem("selectedRap");
                    if (selectedRap) {
                        document.getElementById("selected-rap").textContent = selectedRap;
                    }

                    function toggleRapList() {
                        var rapList = document.getElementById("rap-list");
                        if (rapList.style.display === "block") {
                            rapList.style.display = "none";
                        } else {
                            rapList.style.display = "block";
                        }
                    }

                    function selectRap(selectedRap) {
                        var selectedRapSpan = document.getElementById("selected-rap");
                        selectedRapSpan.textContent = selectedRap;
                        var selectedRapInfo = document.getElementById("selected-rap-info");

                        toggleRapList();

                        // Lưu lựa chọn vào Local Storage
                        localStorage.setItem("selectedRap", selectedRap);
                    }
                </script>
            </div>
            <div class="amy-right">

                <nav id="amy-site-nav" class="amy-site-navigation amy-primary-navigation ">
                    <div class="menu-mainnav-container">
                        <ul id="menu-mainnav" class="nav-menu">
                            <li id="menu-item-121"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-84 current_page_item menu-item-121">
                                <a href="/" aria-current="page">Home</a>
                            </li>
                            <li id="menu-item-276"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-276">
                                <a href="/film">Movie</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-143"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-143">
                                        <a href="/dang-phat">Now
                                            Playing</a>
                                    </li>
                                    <li id="menu-item-134"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-134">
                                        <a href="/sap-ra-mat">Coming
                                            Soon</a>
                                    </li>
                                </ul>
                            </li>
                            <li id="menu-item-278"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-278">
                                <a href="/weeklyshowtime">Showtime</a>
                            </li>
                            <li id="menu-item-146"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-146">
                                <a href="http://demo.amytheme.com/movie/demo/elementor-single-cinema/top-rated/">Top
                                    rated</a>
                            </li>
                            <li id="menu-item-146"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-146">
                                <a href="contact">Contact</a>
                            </li>
@if (Auth()->check())
<li id="menu-item-278 "
class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-278">
<a href="/myaccount"><i class="fa-solid fa-user"></i></a>
<ul class="sub-menu">
    <li id="menu-item-140"
        class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-140">
        <a href="/admin">Trang quản trị</a>
    </li>
    
</ul>
</li> 
@else
 <li id="menu-item-278 "
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-278">
                                <a href="login"><i class="fa-solid fa-user"></i></a>
                                <ul class="sub-menu">
                                    <li id="menu-item-140"
                                        class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-140">
                                        <a href="/login">Login</a>
                                    </li>
                                    <li id="menu-item-140"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-140">
                                        <a href="/register">Register</a>
                                    </li>
                                </ul>
                            </li>   
@endif
                            
                        </ul>

                    </div>
                </nav>
                <div id="amy-menu-toggle"><a><span></span></a></div>
            </div>
        </div>
    </div>
    <div id="amy-site-header-shadow"></div>
</header>
