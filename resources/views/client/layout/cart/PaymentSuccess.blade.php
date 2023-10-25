<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="alert alert-success text-center">
            <h1 class="display-6 ">Đặt Vé Thành Công</h1>
            <p>Cảm ơn bạn đã đặt vé thành công. Dưới đây là thông tin chi tiết về vé và phim:</p>
        </div>
        
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <h2>Thông Tin Phim</h2>
                    </div>
                    <div class="card-body">
                        <p><strong>Tên Phim:</strong> {{ $ticket->film_name }}</p>
                        <p><strong>Thời gian:</strong> {{Carbon\Carbon::parse($ticket->selected_date)->format("d/n/Y") }}</p>
                        <p><strong>Giờ chiếu:</strong> {{ $ticket->selected_hour }} </p>
                        <p><strong>Thể Loại:</strong>
                        {{-- @foreach ($categories as $item)
                        {{ $item->name }}
                        @endforeach --}}
                        </p>
                        <p><strong>Đồ Ăn:</strong> Popcorn</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h2>Thông Tin Vé</h2>
                    </div>
                    <div class="card-body">
                        <p><strong>Mã đơn: </strong>{{ $ticket->code }}</p>
                        <p><strong>Rạp:</strong> {{ $ticket->cinema }}</p>
                        <p><strong>Phòng:</strong> {{ $ticket->selected_room }}</p>
                        <p><strong>Vị trí ghế:</strong> {{ $ticket->selected_seats }}</p>
                        <p><strong>Tổng Vé:</strong> {{ number_format($ticket->total) }} VND</p>
                    </div>
                </div>
            </div>
        </div>

        <a href="/" class="btn btn-primary mt-4">Quay lại Trang Chủ</a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
