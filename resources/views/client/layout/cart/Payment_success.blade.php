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
                        <p><strong>Tên Phim:</strong> Những Chú Vượn Tinh Nghịch</p>
                        <p><strong>Thời gian:</strong> 11/2/2022</p>
                        <p><strong>Giờ chiếu:</strong> 8:00 AM</p>
                        <p><strong>Thể Loại:</strong> Hài hước</p>
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
                        <p><strong>Mã đơn:</strong><img class="w-25" src="images/MoMo_logo-1.png" alt=""></p>
                        <p><strong>Phòng:</strong> A1</p>
                        <p><strong>Vị trí ghế:</strong> A1, A2, A3, A4, A5, A6, A7, A8</p>
                        <p><strong>Tổng Vé:</strong> Nợ</p>
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
