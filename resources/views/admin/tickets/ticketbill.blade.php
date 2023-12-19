<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="images/favicon.png" rel="icon" />
    <title>General Invoice - Koice</title>
    <meta name="author" content="harnishdesign.net">

    <!-- Web Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900"
        type="text/css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="">
    <!-- Container -->

    <body>
        <div style="background-color: #E7E9ED">


            <!-- Container -->
            <div class="w-75 container-fluid invoice-container p-5" style=";background-color: #FFFFFF">
                <!-- Header -->
                <header>
                    <div class="row align-items-center">
                        <div class="col-sm-7 text-center text-sm-start mb-3 mb-sm-0"> <img
                                src="http://demo.amytheme.com/movie/demo/elementor-single-cinema/wp-content/uploads/sites/2/2022/05/img_66.png"
                                alt="Elementor Single Cinema" /> </div>
                        <div class="col-sm-5 text-center text-sm-end">
                            <h4 class="mb-0">Hóa đơn</h4>
                            <p class="mb-0">Mã hóa đơn - {{ $ticket->code }}</p>
                        </div>
                    </div>
                    <hr>
                </header>

                <!-- Main Content -->
                <main>
                    <div class="row">
                        <div class="col-sm-6 mb-3"> <strong>Người đặt:</strong> <span>{{ $ticket->user->name }}</span>
                        </div>
                        <div class="col-sm-6 mb-3 text-sm-end"> <strong>Thời gian đặt:</strong>
                            <span>{{ Carbon\Carbon::parse($ticket->created_at)->format('d/m/Y') }}</span>
                        </div>
                    </div>
                    <hr class="mt-0">
                    <div class="row">
                        <div class="col-sm-4"> <strong>Chi tiết vé phim:</strong>
                            <address>

                                {{ $ticket->cinema }}<br />
                                {{ $ticket->film_name }}<br />
                                {{-- {{ $ticket->selected_room }} --}}
                            </address>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-5"> <strong>Ngày:</strong>
                                    <p>{{ Carbon\Carbon::parse($ticket->selected_date)->format('d/m/Y') }}</p>

                                </div>
                                <div class="col-sm-5"> <strong>Thời gian:</strong>
                                    <p>{{ $ticket->selected_hour }}</p>
                                </div>
                                <!-- <div class="col-sm-4"> <strong>Phòng:</strong>
                                    <p>{{ $ticket->selected_room }}</p>
                                </div> -->
                                <div class="col-sm-5"> <strong>Mã hóa đơn:</strong>
                                    <p>{{ $ticket->code }}</p>
                                </div>
                                <div class="col-sm-5"> <strong>Thanh toán:</strong>
                                    <p>{{ $ticket->payment }}</p>
                                </div>
                                {{-- <form id="paymentForm" method="post" action="{{ route('updatePaymentStatus', ['id' => $ticket->id]) }}">
                                    @csrf
                                    <div class="col-sm-5">
                                        <strong>Thanh toán:</strong>
                                        <select name="status" id="payment_status" {{ $ticket->status == 'Đã thanh toán' ? 'disabled' : '' }}>
                                            <option value="Đã thanh toán" {{ $ticket->status == 'Đã thanh toán' ? 'selected':'' }}>Đã thanh toán</option>
                                            <option value="Chưa thanh toán" {{ $ticket->status == 'Chưa thanh toán' ? 'selected':'' }}>Chưa thanh toán</option>
                                        </select>
                                    </div>
                                </form>                                 --}}
                                <script>
                                    document.getElementById('payment_status').addEventListener('change', function() {
                                        document.getElementById('paymentForm').submit();
                                    });
                                </script>
                                
                            </div> 
                        </div>
                        <div class="col-sm-2" style="margin-top: -15px;">
                                <p>{!! DNS2D::getBarcodeHTML("$ticket->code",'QRCODE',5,5)!!}</p>
                            </div>
                    </div>
                    <div class="card">

                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead class="card-header">
                                        <tr>
                                            <td class="col-6"><strong>Loại </strong></td>
                                            <td class="col-4 text-end"><strong>Tỉ lệ</strong></td>
                                            <td class="col-2 text-end"><strong>Giá</strong></td>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>Ghế</td>
                                            <td class="text-end">{{ $ticket->selected_seats }}</td>
                                            @php
                                                $array = explode(', ', $ticket->selected_seats);
                                                $totalPrice = 0;
                                                foreach ($array as $item) {
                                                    $seats = \App\Models\seats::where('seat_number',$item)->select('typeSeat_id')->first();
                                                    $typeseats = \App\Models\typeseats::where('id',$seats->typeSeat_id)->select('price')->first();
                                                    if ($typeseats) {
                                                            $totalPrice += $typeseats->price;
                                                        }
                                                    }
                                            @endphp
                                                
                                            <td class="text-end">{{ $totalPrice }}</td>
                                        </tr> 
                                        @foreach ($ticket->ticketFoods as $item)
                                        <tr>
                                            <td>Đồ ăn</td>
                                            @php
                                                $foods = \App\Models\food::where('name',$item->name)->select('price')->first();
                                            @endphp
                                           
                                            <td class="text-end">{{ $item->name }} * {{ $item->quantity }}</td>
                                            
                                            <td class="text-end">
                                                 {{ $foods->price * $item->quantity }}
                                            </td>
                                            
                                        </tr>
                                        @endforeach
                                        <tr>
                                            <td>Điểm</td>
                                            <td class="text-end"></td>
                                            <td class="text-end">{{ $ticket->point }}</td>
                                        </tr>

                                    </tbody>
                                    <tfoot class="card-footer">
                                        
                                        <tr>
                                            <td colspan="2" class="text-end border-bottom-0"><strong>Tổng tiền:</strong>
                                            </td>
                                            <td class="text-end border-bottom-0">{{ number_format($ticket->total) }}
                                                VND</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <br>
                    {{-- <p class="text-1 text-muted"><strong>Xin lưu ý:</strong>  . Vui lòng yêu cầu Khách sạn xuất hóa đơn khi trả phòng.</p> --}}
                </main>
                <!-- Footer -->
                <footer class="text-center">
                    <hr>
                    <p><strong>Địa chỉ.</strong><br>
                        Tòa nhà FPT Polytechnic, Phố Trịnh Văn Bô, Nam Từ Liêm, Hà Nội. </p>
                    <hr>
                    <p class="text-1"><strong>LƯU Ý:</strong>  Đây là biên nhận do máy tính tạo ra và không yêu cầu chữ ký thực.</p>
                    <div class="btn-group btn-group-sm d-print-none"> <a href="javascript:window.print()"
                            class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-print"></i> Print</a>
                        <a href="" class="btn btn-light border text-black-50 shadow-none"><i
                                class="fa fa-download"></i> Download</a> </div>
                </footer>

                <!-- Back to My Account Link -->
                <p class="text-center d-print-none py-4"><a href="{{ route('ticket.index') }}">&laquo; Quay lại</a></p>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    </body>

</html>
