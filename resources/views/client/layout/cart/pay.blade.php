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
            if (session()->has('applied_coupon')) {
                $appliedCoupon = session('applied_coupon');
                $discountAmount = $appliedCoupon->value;
                $discountType = $appliedCoupon->type;
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

                                            <div class="d-flex justify-content-between border mt-3 rounded-2" style="height: 70px">
                
                                                   <div class="d-flex">
                                                          <img src="data:image/png;base64,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" alt="">
                                                    <div class="ms-5 mt-3">
                                                        <h5>
                                                            {{ $not_used->name }}
                                                        </h5>
                                                        <h5>
                                                            Giảm: {{ $not_used->value }}
                                                            @if ($not_used->type === 'amount')Vnđ@elseif($not_used->type === 'percent')%@endif
                                                        </h5>
                                        
                                                    </div>
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
                                <div class="btn btn-primary fs-3 px-5 py-2 w-25" id="vnpay-div">Thanh toán bằng Vnpay</div>
                                <input type="radio" class="ms-4" style="transform: scale(1.5);" name="redirect" value="vnpay">
                            </div>
                        </form>
                        
                        <form id="quay-form" action="{{ route('payment_success', ['film_id' => $ShowTime->id]) }}" method="post">
                            @csrf
                            <div class="mb-5 d-flex align-items-center">
                                <input type="hidden" name="total" value="{{ $total }}">
                                <input type="hidden" name="payment" value="Thanh Toán tại quầy">
                                <div class="btn btn-primary fs-3 px-5 py-2 w-25" id="quay-div">Thanh toán tại quầy</div>
                                <input type="radio" class="ms-4" style="transform: scale(1.5);" name="redirect" value="quay">
                            </div>
                        </form>
                        

                                        
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
                                                {{ number_format($total) }} VND</p>

                                            <div class="row text-center  gap-2" style="margin-top: 70px">
                                                <div class="col-md-4">

                                                    <a href="{{ route('chair', [$ShowTime->id]) }}"
                                                        style="background-color: #FE7900;"
                                                        class="btn text-white btn-block px-5 py-2 fs-3"> Quay lại</a>
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
