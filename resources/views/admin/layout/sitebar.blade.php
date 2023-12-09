<div class="iq-sidebar  sidebar-default ">
    <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
        {{-- <a href="../backend/index.html" class="header-logo">
            <img src="../storage/images/img_66.png" class="img-fluid rounded-normal light-logo w-100" alt="logo">
        </a> --}}
        {{-- <div class="iq-menu-bt-sidebar ml-0">
            <i class="las la-bars wrapper-menu"></i> 
        </div> --}}
    </div>
    <div class="data-scrollbar" data-scroll="1">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li class="active">
                    <a href="/admin" class="svg-icon">
                        <svg class="svg-icon" id="p-dash1" width="20" height="20"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                            </path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                        <span class="ml-4">Trang quản trị</span>
                    </a>
                </li>
                {{-- film --}}
                <li class=" ">
                    <a href="#film" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <i class="fa-solid fa-film"></i>
                        <span class="ml-4">Phim</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline>
                            <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="film" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="">
                            <a href="{{ route('films.index') }}">
                                <i class="las la-minus"></i><span>Danh sách phim</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/categories/index">
                                <i class="las la-minus"></i><span>Danh sách danh mục</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/coupon/index">
                                <i class="las la-minus"></i><span>Danh sách mã giảm giá</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/comment/index">
                                <i class="las la-minus"></i><span>Danh sách bình luận</span>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- User --}}
                {{-- @can('show-user') --}}
                <li class=" ">
                    <a href="#user" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <i class="fa-solid fa-user"></i>
                        <span class="ml-4">Người dùng</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline>
                            <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="user" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="">
                            <a href="{{ route('index_user') }}">
                                <i class="las la-minus"></i><span>Danh sách người dùng</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ route('index_admin') }}">
                                <i class="las la-minus"></i><span>Danh sách Admin</span>
                            </a>
                        </li>
                        @can('show-role')
                        <li class="">
                            <a href="/role/index">
                                <i class="las la-minus"></i><span>Danh sách phân quyền</span>
                            </a>
                        </li>  
                        @endcan
                    </ul>
                </li>


                {{-- News --}}
                <li class=" ">
                    <a href="#news" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <i class="fa-solid fa-newspaper"></i>
                        <span class="ml-4">Tin tức</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline>
                            <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="news" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="">
                            <a href="{{ route('news.index') }}">
                                <i class="las la-minus"></i><span>Danh sách tin tức</span>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- Hội viên --}}
                <li class=" ">
                    <a href="#rank" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <i class="fa-solid fa-newspaper"></i>
                        <span class="ml-4">Hội viên</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline>
                            <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="rank" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="">
                            <a href="{{ route('rank.index') }}">
                                <i class="las la-minus"></i><span>Cấp bậc hội viên</span>
                            </a>
                        </li>
                    </ul>
                </li>


                {{-- Cinemas --}}
                <li class="">
                    <a href="#cinemas" class="collapse" data-toggle="collapse" aria-expanded="false">
                        <i class="fa-solid fa-city"></i>
                        <span class="ml-4">Rạp phim</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline>
                            <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="cinemas" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="">
                            <a href="/cinemas/index">
                                <i class="las la-minus"></i><span>Danh sách rạp phim</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/city/index">
                                <i class="las la-minus"></i><span>Thành phố</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/food/index">
                                <i class="las la-minus"></i><span>Danh sách đồ ăn</span>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- @endcan --}}
                {{-- showtime --}}
                <li class=" ">
                    <a href="#showtime" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <i class="fa-solid fa-calendar"></i>
                        <span class="ml-4">Lịch chiếu</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline>
                            <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="showtime" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="">
                            <a href="/showtime/index">
                                <i class="las la-minus"></i><span>Danh sách chiếu phim</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/typeseats/index">
                                <i class="las la-minus"></i><span>Danh sách loại ghế</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/seats/index">
                                <i class="las la-minus"></i><span>Danh sách ghế</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/rooms/index">
                                <i class="las la-minus"></i><span>Danh sách phòng</span>
                            </a>
                        </li>
                    </ul>
                </li>


                {{-- @endcan --}}


                {{-- @endcan --}}
                {{-- showtime --}}
                <li class=" ">
                    <a href="#Ticket" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <i class="fa-solid fa-ticket"></i>
                        <span class="ml-4">Đặt vé</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline>
                            <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="Ticket" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="">
                            <a href="{{ route('ticket.index') }}">
                                <i class="las la-minus"></i><span>Danh sách đặt vé</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class=" ">
                    <a href="#Natification" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <i class="fa-solid fa-earth-americas"></i>
                        <span class="ml-4">Thông báo</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline>
                            <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="Natification" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="">
                            <a href="/NotificationList">
                                <i class="las la-minus"></i><span>Danh sách thông báo</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="#statistical" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <i class="fa-solid fa-earth-americas"></i>
                        <span class="ml-4">Thống kê</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline>
                            <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="statistical" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="">
                            {{-- <a href="{{ route('statistical.index') }}">
                                <i class="las la-minus"></i><span>Thống kê</span>
                            </a> --}}
                            <a href="{{ route('allCinema') }}">
                                <i class="las la-minus"></i><span>Rạp</span>
                            </a>
                            <a href="{{ route('allFilm') }}">
                                <i class="las la-minus"></i><span>Phim</span>
                            </a>
                            <a href="{{ route('statistical.indexFood') }}">
                                <i class="las la-minus"></i><span>Đồ ăn</span>
                            </a>
                            {{-- <a href="{{ route('statistical.indexFilm') }}">
                                <i class="las la-minus"></i><span>Film</span>
                            </a> --}}
                        </li>

                    </ul>
                </li>
                <li class=" ">
                    <a href="#setting" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <i class="fa-solid fa-gear"></i>
                        <span class="ml-4">Cài đặt</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline>
                            <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="setting" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="">
                            <a href="{{ route('smtp_settings.index') }}">
                                <i class="las la-minus"></i><span>Cài đặt SMTP</span>
                            </a>
                            <a href="{{ route('sliders.index') }}">
                                <i class="las la-minus"></i><span>Cài đặt Banner</span>
                            </a>
                        </li>

                    </ul>
                </li>
                {{-- @endcan --}}
            </ul>
        </nav>

        <div class="p-3"></div>
    </div>
</div>
<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                <i class="ri-menu-line wrapper-menu"></i>
                <a href="../backend/index.html" class="header-logo">
                    <img src="/template/assets/images/logo.png" class="img-fluid rounded-normal" alt="logo">
                    <h5 class="logo-title ml-3">POSDash</h5>

                </a>
            </div>
            <div class="iq-search-bar device-search">

            </div>
            <div class="d-flex align-items-center">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-label="Toggle navigation">
                    <i class="ri-menu-3-line"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-list align-items-center">

                        <li>
                            <a href="/" class="btn border add-btn shadow-none mx-2 d-none d-md-block">Trang
                                chủ</a>
                        </li>
                        <li class="nav-item nav-icon search-content">
                            <a href="#" class="search-toggle rounded" id="dropdownSearch"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-search-line"></i>
                            </a>
                            <div class="iq-search-bar iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownSearch">
                                <form action="#" class="searchbox p-2">
                                    <div class="form-group mb-0 position-relative">
                                        <input type="text" class="text search-input font-size-12"
                                            placeholder="type here to search...">
                                        <a href="#" class="search-link"><i class="las la-search"></i></a>
                                    </div>
                                </form>
                            </div>
                        </li>
                        {{-- <li class="nav-item nav-icon dropdown">
                            <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                    <path
                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                    </path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                                <span class="bg-primary"></span>
                            </a>
                            <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <div class="card shadow-none m-0">
                                    <div class="card-body p-0 ">
                                        <div class="cust-title p-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h5 class="mb-0">All Messages</h5>
                                                <a class="badge badge-primary badge-card" href="#">3</a>
                                            </div>
                                        </div>
                                        <div class="px-3 pt-0 pb-0 sub-card">
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center cust-card py-3 border-bottom">
                                                    <div class="">
                                                        <img class="avatar-50 rounded-small"
                                                            src="/template/assets/images/user/01.jpg" alt="01">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-0">Emma Watson</h6>
                                                            <small class="text-dark"><b>12 : 47 pm</b></small>
                                                        </div>
                                                        <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center cust-card py-3 border-bottom">
                                                    <div class="">
                                                        <img class="avatar-50 rounded-small"
                                                            src="/template/assets/images/user/02.jpg" alt="02">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-0">Ashlynn Franci</h6>
                                                            <small class="text-dark"><b>11 : 30 pm</b></small>
                                                        </div>
                                                        <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center cust-card py-3">
                                                    <div class="">
                                                        <img class="avatar-50 rounded-small"
                                                            src="/template/assets/images/user/03.jpg" alt="03">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-0">Kianna Carder</h6>
                                                            <small class="text-dark"><b>11 : 21 pm</b></small>
                                                        </div>
                                                        <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <a class="right-ic btn btn-primary btn-block position-relative p-2"
                                            href="#" role="button">
                                            View All
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li> --}}
                        <li class="nav-item nav-icon dropdown">
                            <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                <span class="notification-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                        <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                    </svg>
                                    <span
                                        class="notification-count">{{ \App\Models\Notification::where('status', 1)->count() }}</span>
                                </span>

                           

                            </a>
                            <style>
                                .search-toggle {
                                    position: relative;
                                    display: flex;
                                    align-items: center;
                                    text-decoration: none;
                                    color: #333;
                                    /* Màu chữ */
                                }

                                .notification-icon {
                                    position: relative;
                                    margin-right: 10px;
                                    /* Khoảng cách giữa biểu tượng và số thông báo */
                                }

                                .notification-icon svg {
                                    width: 20px;
                                    height: 20px;
                                    stroke: #333;
                                    /* Màu biểu tượng */
                                }

                                .notification-count {
                                    position: absolute;
                                    top: -8px;
                                    /* Điều chỉnh vị trí số thông báo */
                                    right: -8px;
                                    /* Điều chỉnh vị trí số thông báo */
                                    background-color: red;
                                    /* Màu nền của số thông báo */
                                    color: #fff;
                                    /* Màu chữ số thông báo */
                                    border-radius: 50%;
                                    /* Kích thước góc bo tròn */
                                    width: 20px;
                                    height: 40px;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    font-size: 12px;
                                }
                            </style>
                            <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <div class="card shadow-none m-0">
                                    <div class="card-body p-0 ">
                                        <div class="cust-title p-3">
                                            <div class="d-flex align-items-center justify-content-between">

                                                <h5 class="mb-0">Thông báo</h5>
                                                <a class="badge badge-primary badge-card"
                                                    href="#">{{ \App\Models\Notification::where('status', 1)->count() }}</a>

                                                
                                            </div>
                                        </div>
                                        <div class="px-3 pt-0 pb-0 sub-card">
                                            @foreach (\App\Models\Notification::where('status', 1)->orderBy('created_at', 'desc')->take(3)->get() as $item)
                                                <div class="px-3 pt-0 pb-0 sub-card">
                                                    <a href="{{ route('show.index', $item->tickets_id) }}"
                                                        class="iq-sub-card">
                                                        <div
                                                            class="media align-items-center cust-card py-3 border-bottom">
                                                            <div class="media-body ml-3">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between">
                                                                    <p class="mb-0">Đã có phim được đặt vé vào lúc
                                                                    </p>

                                                                </div>
                                                                <small class="mb-0">{{ $item->created_at }}</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach
                                            {{-- <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center cust-card py-3">
                                                    <div class="">
                                                        <img class="avatar-50 rounded-small"
                                                            src="/template/assets/images/user/03.jpg" alt="03">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h6 class="mb-0">Kianna Carder</h6>
                                                            <small class="text-dark"><b>11 : 21 pm</b></small>
                                                        </div>
                                                        <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                    </div>
                                                </div>
                                            </a> --}}
                                        </div>
                                        <a class="right-ic btn btn-primary btn-block position-relative p-2"
                                            href="/NotificationList" role="button">
                                            View All
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item nav-icon dropdown caption-content">
                            <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton4"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="/template/assets/images/user/1.png" class="img-fluid rounded"
                                    alt="user">
                            </a>
                            <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <div class="card shadow-none m-0">
                                    <div class="card-body p-0 text-center">
                                        <div class="media-body profile-detail text-center">
                                            <img src="/template/assets/images/page-img/profile-bg.jpg"
                                                alt="profile-bg" class="rounded-top img-fluid mb-4">
                                            <img src="/template/assets/images/user/1.png" alt="profile-img"
                                                class="rounded profile-img img-fluid avatar-70">
                                        </div>
                                        <div class="p-3">
                                            <h5 class="mb-1">{{ Auth::User()->name }}</h5>
                                            <p class="mb-0">Since 10 march, 2020</p>
                                            <div class="d-flex align-items-center justify-content-center mt-3">
                                                <a href="../app/user-profile.html" class="btn border mr-2">Profile</a>
                                                <a href="{{ route('logout') }}" class="btn border">Sign Out</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
