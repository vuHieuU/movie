<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Laralink">
    <!-- Site Title -->
    <title>Hóa đơn</title>
    <link rel="stylesheet" href="/template/assets/css/pay.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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

</head>

<body style="font-family: roboto; border: 0">
    @extends('client.layout.main.main')

    @section('contact')
        <div id="content" class="site-content">


            <section id="amy-page-header" class="amy-page-header">
                <div class="amy-page-title amy-center">
                    <div class="amy-inner container">
                        <h1 class="page-title">
                            Tổng hóa đơn </h1>
                    </div>
                </div>
                <span class="amy-section-overlay"></span>
            </section>
        </div>
        @php
            $total = 0;
            $total = $selectedPriceSeatsValue + $totalPriceFoodValue;
            $total_not_coupon = $selectedPriceSeatsValue + $totalPriceFoodValue;
            if (session()->has('applied_coupon')) {
                $appliedCoupon = session('applied_coupon');
                $discountAmount = $appliedCoupon->value;
                $discountType = $appliedCoupon->type;
                $discountName = $appliedCoupon->name;
                if ($discountType === 'amount') {
                    $total = $total - $discountAmount;
                } elseif ($discountType === 'percent') {
                    $total = $total - ($total * $discountAmount) / 100;
                }
            }
        @endphp
        <div style="max-width: 85%; margin:0 auto">
            <div class="cs-invoice cs-style1">
                <div class="cs-invoice_in" id="download_section">
                    <div class="cs-invoice_head cs-mb10 ">
                        <div class="cs-invoice_left cs-mr97">
                            <b class="cs-primary_color fs-5">Tên người dùng:</b>
                            <p class="cs-mb8 fs-5">{{ Auth::user()->name }}</p>
                            <p class="fs-5"><b class="cs-primary_color cs-semi_bold fs-5">Email:</b> <br>{{ Auth::user()->email }}</p>
                        </div>
                        <div class="cs-invoice_right">
                            <b class="cs-primary_color fs-5">Thông tin phim: </b>
                            <p>
                            <p class="fs-4"><strong class="fs-5 "> Rạp: </strong>{{ $cinemaName }}</p>
                            <p class="fs-4"><strong class="fs-5 "> Phim: </strong>{{ $ShowTime->name }}
                            </p>

                        </div>
                        <div class="cs-invoice_right">
                        </div>
                    </div>
                    <div class="cs-border"></div>
                    <ul class="cs-grid_row cs-col_3 cs-mb0 cs-mt20">
                        <li>
                            <p class="cs-mb20"><b class="cs-primary_color fs-5">Ngày xem:</b> <span
                                    class="cs-primary_color fs-5">{{ Carbon\Carbon::parse($selectedDate)->format('d/n/Y') }}</span>
                            </p>
                        </li>
                        <li>
                            <p class="cs-mb20"><b class="cs-primary_color fs-5">Giờ xem:</b> <span
                                    class="cs-primary_color fs-5">{{ $selectedHour }}</span></p>
                        </li>
                        <li>
                            <p class="cs-mb20"><b class="cs-primary_color fs-5">Thời gian chiếu:</b> <span
                                    class="cs-primary_color fs-5">{{ $ShowTime->duration }} Phút</span></p>
                        </li>
                    </ul>
                    <div class="cs-border cs-mb30"></div>




                    <div class="cs-table cs-style2">
                        <div>
                            <div class="cs-table_responsive">
                                <table>
                                    <thead>
                                        <tr class="cs-focus_bg">
                                            <th class="cs-width_1 cs-semi_bold cs-primary_color fs-5">STT</th>
                                            <th class="cs-width_3 cs-semi_bold cs-primary_color fs-5">Dịch vụ</th>
                                            <th class="cs-width_2 cs-semi_bold cs-primary_color fs-5">Giờ</th>
                                            <th class="cs-width_2 cs-semi_bold cs-primary_color fs-5 cs-text_right ">Thành tiền
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="fs-5">01</td>
                                            <td class="fs-5">Food</td>
                                            <td class="fs-5">
                                                @if ($FoodValueName)
                                                    @foreach ($FoodValueName as $item)
                                                        {{ $item['name'] }} * {{ $item['quantity'] }}
                                                    @endforeach
                                                @endif
                                            </td class="fs-5">
                                            <td class="cs-text_right cs-primary_color fs-5">
                                                {{ number_format($totalPriceFoodValue) }} VNĐ</td>
                                        </tr>
                                        <tr class="cs-focus_bg">
                                            <td fs-5>02</td>
                                            <td fs-5>Seat</td>
                                            <td fs-5>{{ $selectedSeatsValue }}</td>
                                            <td class="cs-text_right cs-primary_color fs-5">
                                                {{ number_format($selectedPriceSeatsValue) }} VND</td>
                                        </tr>
                                        <tr class="cs-focus_bg">
                                            <td fs-5>03</td>
                                            <td fs-5>Mã giảm giá</td>
                                            <td fs-5>
                                               
                                                @if (isset($discountType))
                                                {{ $discountName }}
                
                                            @endif</td>
                                            <td class="cs-text_right cs-primary_color fs-5">
                                                @if (session('success'))
                                                <div class="">

                                                    @if ($discountType === 'amount')
                                                        <p
                                                            class="cs-primary_color cs-mb5 cs-text_right">
                                                            Giảm: {{ $discountAmount }} Vnđ</p>
                                                    @elseif ($discountType === 'percent')
                                                        <p
                                                            class="cs-primary_color cs-mb5 cs-text_right">
                                                            Giảm: {{ $discountAmount }} %</p>
                                                    @endif

                                                </div>
                                            @endif</td>
                                        </tr>
                                    </tbody>

                                </table>                                
                                <div class="col-md-12 mx-0 px-0 ">
                                         <div class="d-flex justify-content-between" style="background-color: rgb(250, 246, 246)">
                                               <div class="ps-5 py-3 d-flex">
                                                <i class='fas fa-tags' style='font-size:27px; color:red'></i>
                                                     <h3 class="ms-3" style="font-weight: 700">Mã giảm giá</h3>
                                               </div>
                                               <div class="pe-5 py-3">
                                                     <a data-toggle="modal" data-target="#exampleModalCenter"><h4 style="color: violet">Chọn mã giảm giá</h4></a>
                                               </div>
                                         </div>
                                </div>
  
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle" style='font-weight:600; font-size: 18px; color:red'>Chọn mã giảm giá</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="col-md-12 mt-3">
                                        <form action="{{ route('applyCoupon') }}" method="POST">
                                            @csrf
                                            <div class="d-flex align-items-center">
                                                        <input type="text" class="form-control" name="coupon_code"
                                                            placeholder="Nhập mã giảm giá">
                                                            <button type="submit" class="btn ms-3 px-4" id="applyButton" 
                                                            disabled style="background-color: #FE7900; color: aliceblue">Áp dụng</button>
                                            </div>
                                        </form>
                            </div>
                            <form action="{{ route('applyCoupon') }}" method="POST">
                                @csrf
                            <div class="modal-body">
                                <div>
                                         <h5>Mã giảm giá có sẵn bạn chỉ có thể chọn 1</h5>
                                         @foreach ($not_useds as $not_used)

                                            <div class="d-flex justify-content-between border mt-3 rounded-2">
                
                                                       
                                                    <div class="ms-5 mt-3 d-flex py-2">
                                                        <h5>
                                                            {{ $not_used->name }} : 
                                                        </h5>
                                                        <h5>
                                                            Giảm: {{ $not_used->value }}
                                                            @if ($not_used->type === 'amount')Vnđ@elseif($not_used->type === 'percent')%@endif
                                                        </h5>
                                        
                                                    </div>

                                                 <input type="radio" name="coupon_code" value="{{ $not_used->name }}" class="me-3">
                                            </div>
                                        @endforeach
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Ok</button>
                                </div>
                            </div>
                        </form>
                        </div>
                        </div>
                    </div>
                            </div>
                        </div>
                    </div>

                    <div class="cs-border cs-mb30 mt-5"></div>

                    <h5 class="display-6 display-md-3 display-lg-2 fw-bold mb-5 mt-5">Phương thức thanh
                        toán :</h5>





                        <form id="vnpay-form" action="{{ url('/vnpay_payment/' . $ShowTime->id) }}" method="post">
                            @csrf
                            <div class="mb-5 d-flex align-items-center">
                                <input type="hidden" name="total" value="{{ $total }}">
                                <input type="hidden" name="total_not_coupon" value="{{ $total_not_coupon }}">
                                <div class="btn btn-primary fs-3 px-5 py-2 w-25" id="vnpay-div">Thanh toán bằng Vnpay</div>
                                <input type="radio" class="ms-4" style="transform: scale(1.5);" name="redirect" value="vnpay">
                            </div>
                        </form>
                        {{-- {{$selectedShowTimeId}} --}}
                        {{-- {{$check}} --}}
                        @if ($check == 0)
                        <form id="quay-form" action="{{ route('payment_success', ['film_id' => $ShowTime->id]) }}" method="post">
                            @csrf
                           
                            <div class="mb-5 d-flex align-items-center">
                                <input type="hidden" name="total" value="{{ $total }}">
                                <input type="hidden" name="total_not_coupon" value="{{ $total_not_coupon }}">
                                <input type="hidden" name="payment" value="Thanh Toán tại quầy">
                                <div class="btn btn-primary fs-3 px-5 py-2 w-25" id="quay-div">Thanh toán tại quầy</div>
                                <input type="radio" class="ms-4" style="transform: scale(1.5);" name="redirect" value="quay">
                            </div>
                        </form>
                        @else
                        {{-- <form id="quay-form" action="{{ route('payment_success', ['film_id' => $ShowTime->id]) }}" method="post">
                            @csrf
                           
                            <div class="mb-5 d-flex align-items-center">
                                <input type="hidden" name="total" value="{{ $total }}">
                                <input type="hidden" name="payment" value="Thanh Toán tại quầy">
                                <div class="btn btn-primary fs-3 px-5 py-2 w-25" id="quay-div">Thanh toán tại quầy</div>
                                <input type="radio" class="ms-4" style="transform: scale(1.5);" name="redirect" value="quay">
                            </div>
                        </form>  --}}
                        @endif
                      
                        

                                        
                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                     $(document).ready(function() {
                            $('input[name="redirect"]').click(function() {
                                // Uncheck other radio buttons in the same group
                                $('input[name="redirect"]').not(this).prop('checked', false);
                            });

                            $("#thanh-toan-button").click(function() {
                                var selectedPaymentMethod = $('input[name="redirect"]:checked').val();

                                if (selectedPaymentMethod === "vnpay") {
                                    $("#vnpay-form").submit();
                                } else if (selectedPaymentMethod === "quay") {
                                    $("#quay-form").submit();
                                } else {
                                    alert("Mày chưa chọn phương thức thanh toán kìa!");
                                }
                            });
                        });
                        </script>
                    <div class="cs-border cs-mb30 mt-5"></div>
                    <div class="cs-table cs-style2 cs-mt20">
                        <div class="cs-table_responsive">
                            <table class="border-0">
                                <tbody>
                                    <tr class="cs-table_baseline">

                                        <td class="cs-width_3 cs-text_right">
                                            <p class="cs-mb5 cs-mb5 cs-f15 cs-primary_color cs-semi_bold">Tiền:</p>
                                            <p class="cs-primary_color cs-bold cs-f16 cs-mb5 ">Giảm giá:</p>
                                            <p class="cs-mb5 cs-mb5 cs-f15 cs-primary_color cs-semi_bold">Điểm:</p>

                                            <p class="cs-border border-none"></p>
                                            <p class="cs-primary_color cs-bold cs-f16 cs-mb5 ">Tổng tiền:</p>
                                        </td>
                                        <td class="cs-width_3 cs-text_rightcs-f16">
                                            <p class="cs-mb5 cs-mb5 cs-text_right cs-f15 cs-primary_color cs-semi_bold">
                                                {{ number_format($totalPriceFoodValue + $selectedPriceSeatsValue) }} VND
                                            </p>
                                            <p>
                                                @if (session('success'))
                                                    <div class="">

                                                        @if ($discountType === 'amount')
                                                            <p
                                                                class="cs-primary_color cs-bold cs-f16 cs-mb5 cs-text_right">
                                                                Giảm: {{ $discountAmount }} Vnđ</p>
                                                        @elseif ($discountType === 'percent')
                                                            <p
                                                                class="cs-primary_color cs-bold cs-f16 cs-mb5 cs-text_right">
                                                                Giảm: {{ $discountAmount }} %</p>
                                                        @endif

                                                    </div>
                                                @endif

                                                {{-- @if (session('error'))
                                                    <div class="alert alert-danger">
                                                        {{ session('error') }}
                                                    </div>
                                                @endif --}}

                                            </p>
                                            <p class="cs-border"></p>

                                            <p class="cs-primary_color cs-bold cs-f16 cs-mb5 cs-text_right">
                                                {{ number_format($total_not_coupon/100) }} Điểm</p>
                                            <p class="cs-primary_color cs-bold cs-f16 cs-mb5 cs-text_right">
                                                {{ number_format($total) }} VND</p>

                                            <div class="row text-center  gap-2" style="margin-top: 70px">
                                                <div class="col-md-4">
{{-- 
                                                    <a href="{{ route('chair', [$ShowTime->id]) }}"
                                                        style="background-color: #FE7900;"
                                                        class="btn text-white btn-block px-5 py-2 fs-3"> Quay lại</a> --}}
                                                </div>
                                                <div class="col-md-5"> 
                                                        <button type="button" id="thanh-toan-button" style="background-color: #FE7900;" class="btn text-white btn-block px-5 py-2 fs-3"> Thanh toán</button>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>

                        </div>

                    </div>

                </div>

            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
    @endsection
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function () {
        // Chọn input và nút "Áp dụng"
        var input = $('input[name="coupon_code"]');
        var applyButton = $('#applyButton');

        // Khi input thay đổi
        input.on('input', function () {
            if (input.val().trim() !== '') {
                applyButton.prop('disabled', false); // Kích hoạt nút khi có nội dung
            } else {
                applyButton.prop('disabled', true); // Vô hiệu hóa nút khi không có nội dung
            }
        });
    });
    </script>
