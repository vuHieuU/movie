<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Laralink">
    <!-- Site Title -->
    <title>General Purpose Invoice</title>
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
                            Total invoice </h1>
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
        <div class="container">
            <div class="cs-invoice cs-style1">
                <div class="cs-invoice_in" id="download_section">
                    {{-- <div class="cs-invoice_head cs-type1 cs-mb25 column border-bottom-none">
                        <div class="cs-invoice_left w-70 display-flex">
                            <div class="cs-logo cs-mb5 cs-mr20"><img src="assets/img/logo.svg" alt="Logo"></div>
                            <div class="cs-ml22">
                                <div class="cs-invoice_number cs-primary_color cs-mb0 cs-f16">
                                    <b class="cs-primary_color">Ivonne Invoice</b>
                                </div>
                                <div
                                    class="cs-invoice_number cs-primary_color cs-mb0 cs-f16 display-flex space-between  gap-20">
                                    <p class="cs-mb0 cs-primary_color cs-mr15"><b>GSTIN:</b></p>
                                    <p class="cs-mb0">4828E9B55BD92X6</p>
                                </div>
                                <div class="cs-invoice_number cs-primary_color cs-mb0 cs-f16  display-flex space-between ">
                                    <p class="cs-primary_color cs-mb0"><b>State:</b></p>
                                    <p class="cs-mb0 cs-mr28">Ontario, Toronto</p>
                                </div>
                                <div class="cs-invoice_number cs-primary_color cs-mb0 cs-f16  display-flex space-between">
                                    <p class="cs-primary_color cs-mb0"><b>PAN:</b></p>
                                    <p class="cs-mb0 cs-mr15">BSDFA07ERPCRM</p>
                                </div>
                            </div>
                        </div>
                        <div class="cs-invoice_right cs-text_right">
                            <div
                                class="cs-invoice_number cs-primary_color cs-mb0 cs-f16  display-flex justify-content-flex-end">
                                <p class="cs-primary_color"><b>Total: </b></p>
                                <p class="cs-mb0"> {{ number_format($total) }} VND</p>
                            </div>
                            <div
                                class="cs-invoice_number cs-primary_color cs-mb0 cs-f16  display-flex justify-content-flex-end">
                                <p class="cs-primary_color cs-mb0"><b>Invoice Date:</b></p>
                                <p class="cs-mb0">12.09.2023</p>
                            </div>
                            <div
                                class="cs-invoice_number cs-primary_color cs-mb0 cs-f16  display-flex justify-content-flex-end">
                                <p class="cs-primary_color cs-mb0"><b>Invoice No:</b></p>
                                <p class="cs-mb0">#SM75692</p>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="display-flex cs-text_center">
                        <div class="cs-border-1"></div>
                        <h5 class="cs-width_10 cs-dip_green_color"></h5>
                        <div class="cs-border-1"></div>
                    </div> --}}

                    <div class="cs-invoice_head cs-mb10 ">
                        <div class="cs-invoice_left cs-mr97">
                            <b class="cs-primary_color">Customer Name:</b>
                            <p class="cs-mb8">{{ Auth::user()->name }}</p>
                            <p><b class="cs-primary_color cs-semi_bold">Email:</b> <br>{{ Auth::user()->name }}</p>
                        </div>
                        <div class="cs-invoice_right">
                            <b class="cs-primary_color">Informational film: </b>
                            <p>
                            <p class="fs-4"><strong class="fs-5 "> Rạp: </strong>{{ $cinemaName }}</p>
                            <p class="fs-4"><strong class="fs-5 "> Phim: </strong>{{ $ShowTime->film->name }}
                            </p>

                        </div>
                        <div class="cs-invoice_right">
                            {{-- <b class="cs-primary_color">Informational:</b>
                            <p>
                                <p class="fs-4"><strong class="fs-2 "> Ngày xem: </strong> 
                                    {{ Carbon\Carbon::parse($selectedDate)->format('d/n/Y') }}
                                    <br>
                                </p>
                                <p class="fs-4"><strong class="fs-2 "> Giờ xem: </strong>  
                                    {{ $selectedHour }}
                                    <br> 
                                </p>
                                <p class="fs-4"><strong class="fs-2 "> Thời gian chiếu: </strong> 
                                    {{ $ShowTime->film->duration }} Phút 
                                </p>
    
                                </p>
                            </p> --}}
                        </div>
                    </div>
                    <div class="cs-border"></div>
                    <ul class="cs-grid_row cs-col_3 cs-mb0 cs-mt20">
                        <li>
                            <p class="cs-mb20"><b class="cs-primary_color">Ngày xem:</b> <span
                                    class="cs-primary_color">{{ Carbon\Carbon::parse($selectedDate)->format('d/n/Y') }}</span>
                            </p>
                        </li>
                        <li>
                            <p class="cs-mb20"><b class="cs-primary_color">Giờ xem:</b> <span
                                    class="cs-primary_color">{{ $selectedHour }}</span></p>
                        </li>
                        <li>
                            <p class="cs-mb20"><b class="cs-primary_color">Thời gian chiếu:</b> <span
                                    class="cs-primary_color">{{ $ShowTime->film->duration }} Phút</span></p>
                        </li>
                    </ul>
                    <div class="cs-border cs-mb30"></div>




                    <div class="cs-table cs-style2">
                        <div>
                            <div class="cs-table_responsive">
                                <table>
                                    <thead>
                                        <tr class="cs-focus_bg">
                                            <th class="cs-width_1 cs-semi_bold cs-primary_color">STT</th>
                                            <th class="cs-width_3 cs-semi_bold cs-primary_color">Service</th>
                                            <th class="cs-width_2 cs-semi_bold cs-primary_color">Hour</th>
                                            <th class="cs-width_2 cs-semi_bold cs-primary_color cs-text_right ">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>Food</td>
                                            <td>
                                            @foreach ($FoodValueName as $item) 
                                                 {{ $item['name'] }} * {{ $item['quantity'] }}
                                            @endforeach
                                            </td>
                                            <td class="cs-text_right cs-primary_color">
                                                {{ number_format($totalPriceFoodValue) }} VNĐ</td>
                                        </tr>
                                        <tr class="cs-focus_bg">
                                            <td>02</td>
                                            <td>Seat</td>
                                            <td>{{ $selectedSeatsValue }}</td>
                                            <td class="cs-text_right cs-primary_color">
                                                {{ number_format($selectedPriceSeatsValue) }} VND</td>
                                        </tr>
                                        <tr>
                                            <td>03</td>
                                            <td>Coupon</td>
                                            <td></td>
                                            @if (session('success'))
                                                <div class="alert alert-success">
                                                    {{ session('success') }}
                                                    @if ($discountType === 'amount')
                                                        <td>Giảm: {{ $discountAmount }} Vnđ</td>
                                                    @elseif ($discountType === 'percent')
                                                        <td class="cs-text_right cs-primary_color">Giảm:
                                                            {{ $discountAmount }} % </td>
                                                    @endif

                                                </div>
                                            @endif

                                            @if (session('error'))
                                                <div class="alert alert-danger">
                                                    {{ session('error') }}
                                                </div>
                                            @endif

                                            {{-- <td>$100.00</td> --}}
                                            {{-- <td>&nbsp;1</td> --}}

                                        </tr>
                                        {{-- <tr class="cs-focus_bg">
                                            <td>04</td>
                                            <td>Servicing</td>
                                            <td>2 Hour</td>
                                            <td>$300.00</td>
                                            <td>&nbsp;1</td>
                                            <td class="cs-text_right cs-primary_color">$300.00</td>
                                        </tr> --}}
                                    </tbody>

                                </table>


                                <div class="cs-border cs-mb30"></div>
                                <div class="col-md-12 mx-0 px-0 ">
                                    <div class="card">

                                        <div class="card-body">
                                            <form action="{{ route('applyCoupon') }}" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <strong for="coupon_code">Mã giảm giá:</strong>
                                                    <input type="text" class="form-control " name="coupon_code"
                                                        placeholder="Nhập mã giảm giá">
                                                </div>
                                                <button type="submit" class="btn  mt-3" style="background-color: #FE7900;color: aliceblue">Áp dụng</button>
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






<form action="{{ url('/vnpay_payment/' . $ShowTime->id ) }}" method="post">

    @csrf
   
    <div class="mb-5 " >
        <input type="hidden" name="total" value="{{ $total }}">
        <button  class="btn btn-outline-primary  fs-3 px-5 py-2 w-25" value="thanh toán vnpay" name="redirect"
            type="submit">Thanh toán bằng Vnpay </button>
    </div>
   
</form>


        

<div class="mb-5">
    <input type="checkbox" class="d-none" id="paymentCheckbox">
    <label class="btn btn-outline-primary paymentMethod fs-3 px-5 py-2 w-25" for="paymentCheckbox">Thanh toán tại quầy</label>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        var paymentCheckbox = $('#paymentCheckbox');
        var paymentLabel = $('label[for="paymentCheckbox"]');

        paymentCheckbox.change(function () {
            if (paymentCheckbox.is(':checked')) {
                paymentLabel.addClass('active');
            } else {
                paymentLabel.removeClass('active');
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
                                            <p class="cs-mb5 cs-mb5 cs-f15 cs-primary_color cs-semi_bold">Sub Total:</p>
                                            <p class="cs-primary_color cs-bold cs-f16 cs-mb5 ">Discount:</p>

                                            <p class="cs-border border-none"></p>
                                            <p class="cs-primary_color cs-bold cs-f16 cs-mb5 ">Total:</p>
                                        </td>
                                        <td class="cs-width_3 cs-text_rightcs-f16">
                                            <p class="cs-mb5 cs-mb5 cs-text_right cs-f15 cs-primary_color cs-semi_bold">
                                                {{ number_format($total) }} VND
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

                                                @if (session('error'))
                                                    <div class="alert alert-danger">
                                                        {{ session('error') }}
                                                    </div>
                                                @endif

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
                                                    <form action="{{ route('payment_success', ['film_id' => $ShowTime->id]) }}" method="post">
                                                        @csrf
                                                        <button type="submit" style="background-color: #FE7900;"
                                                            class="btn text-white btn-block px-5 py-2 fs-3"> Thanh
                                                            toán</button>
                                                        <input type="hidden" name="total"
                                                            value="{{ $total }}">
                                                    </form>
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
    @endsection
    