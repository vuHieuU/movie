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
                        <h4 class="mb-0">Invoice</h4>
                        <p class="mb-0">Invoice Number - {{ $tickit->id }}</p>
                    </div>
                </div>
                <hr>
            </header>

            <!-- Main Content -->
            <main>
                <div class="row">
                    <div class="col-sm-6 mb-3"> <strong>Guest Name:</strong> <span>{{ $tickit->user->name }}</span>
                    </div>
                    <div class="col-sm-6 mb-3 text-sm-end"> <strong>Booking Date:</strong>
                        <span>{{Carbon\Carbon::parse( $tickit->created_at)->format('d/m/Y') }}</span> </div>
                </div>
                <hr class="mt-0">
                <div class="row">
                    <div class="col-sm-5"> <strong>Cinema ticket details:</strong>
                        <address>

                            {{ $tickit->cinema }}<br />
                            {{ $tickit->film_name }}<br />
                        </address>
                    </div>
                    <div class="col-sm-7">
                        <div class="row">
                            <div class="col-sm-4"> <strong>Date:</strong>
                              <p>{{ Carbon\Carbon::parse($tickit->selected_date)->format('d/m/Y') }}</p>

                            </div>
                            <div class="col-sm-4"> <strong>Time:</strong>
                                <p>{{ $tickit->selected_hour }}</p>
                            </div>
                            <div class="col-sm-4"> <strong>Rooms:</strong>
                                <p>{{ $tickit->selected_room }}</p>
                            </div>
                            <div class="col-sm-4"> <strong>Booking ID:</strong>
                                <p>{{ $tickit->id }}</p>
                            </div>
                            <div class="col-sm-4"> <strong>Payment Mode:</strong>
                                <p>{{ $tickit->selected_date }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">

                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="card-header">
                                    <tr>
                                        <td class="col-6"><strong>Description</strong></td>
                                        <td class="col-4 text-end"><strong>Rate</strong></td>
                                        <td class="col-2 text-end"><strong>Amount</strong></td>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>Seat</td>
                                        <td class="text-end">{{ $tickit->selected_seats }}</td>
                                        {{-- <td class="text-end">{{ $selectedPriceSeatsValue}}</td> --}}
                                    </tr>
                                    <tr>
                                        <td>Food</td>
                                        <td class="text-end">SUMMERFUN - <span class="text-1">20.00% One Time
                                                Discount</span></td>
                                        {{-- <td class="text-end">{{$totalPriceFoodValue}}</td> --}}
                                    </tr>
                                    <tr>
                                        <td>Other Charges</td>
                                        <td class="text-end">0</td>
                                        <td class="text-end">0</td>
                                    </tr>
                                    <tr>
                                        <td>Promotional Code</td>
                                        <td class="text-end">SUMMERFUN - <span class="text-1">20.00% One Time
                                                Discount</span></td>
                                        <td class="text-end">-$100.00</td>
                                    </tr>
                                </tbody>
                                <tfoot class="card-footer">
                                    <tr>
                                        <td colspan="2" class="text-end"><strong>Sub Total:</strong></td>
                                        <td class="text-end">$400.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-end"><strong>Promotion:</strong></td>
                                        <td class="text-end">$400.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-end border-bottom-0"><strong>Total:</strong></td>
                                        <td class="text-end border-bottom-0">{{ number_format($tickit->total) }} VND</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <br>
                <p class="text-1 text-muted"><strong>Please Note:</strong> . Please ask Hotel for invoice at the time of
                    check-out.</p>
            </main>
            <!-- Footer -->
            <footer class="text-center">
                <hr>
                <p><strong>Koice Inc.</strong><br>
                   Tòa nhà FPT Polytechnic, Phố Trịnh Văn Bô, Nam Từ Liêm, Hà Nội. </p>
                <hr>
                <p class="text-1"><strong>NOTE :</strong> This is computer generated receipt and does not require
                    physical signature.</p>
                <div class="btn-group btn-group-sm d-print-none"> <a href="javascript:window.print()"
                        class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-print"></i> Print</a> <a
                        href="" class="btn btn-light border text-black-50 shadow-none"><i
                            class="fa fa-download"></i> Download</a> </div>
            </footer>
       
        <!-- Back to My Account Link -->
        <p class="text-center d-print-none py-4"><a href="{{ route('tickit.index') }}">&laquo; Back to Tickit</a></p>
     </div>
 </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    </body>

</html>
