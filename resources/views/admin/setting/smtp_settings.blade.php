@extends('admin.layout.home')
@section('content')
       <div style="padding-right: 15px">
        <div class="row">
            <div class="col-7">
                <div class="wrapper">
    
                    <div class="content-page">
                        <div class="container-fluid add-form-list">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between">
                                            <div class="header-title">
                                                <h4 class="card-title">SMTP</h4>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <form class="form-horizontal" action="{{ route('smtp_settings.update') }}"
                                                method="POST">
                                                @csrf
                                                <div>
                                                    <div class="form-group row">
                                                        <input type="hidden" name="types[]" value="MAIL_MAILER">
                                                        <div class="col-md-3">
                                                            <label class="col-from-label"
                                                                style="font-size: 12px">{{ 'MAIL MAILER' }}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" name="MAIL_MAILER"
                                                                value="{{ env('MAIL_MAILER') }}"
                                                                placeholder="{{ 'MAIL HOST' }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <input type="hidden" name="types[]" value="MAIL_HOST">
                                                        <div class="col-md-3">
                                                            <label class="col-from-label"
                                                                style="font-size: 12px">{{ 'MAIL HOST' }}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" name="MAIL_HOST"
                                                                value="{{ env('MAIL_HOST') }}"
                                                                placeholder="{{ 'MAIL HOST' }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <input type="hidden" name="types[]" value="MAIL_PORT">
                                                        <div class="col-md-3">
                                                            <label class="col-from-label"
                                                                style="font-size: 12px">{{ 'MAIL PORT' }}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" name="MAIL_PORT"
                                                                value="{{ env('MAIL_PORT') }}"
                                                                placeholder="{{ 'MAIL PORT' }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <input type="hidden" name="types[]" value="MAIL_USERNAME">
                                                        <div class="col-md-3">
                                                            <label class="col-from-label"
                                                                style="font-size: 12px">{{ 'MAIL USERNAME' }}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" name="MAIL_USERNAME"
                                                                value="{{ env('MAIL_USERNAME') }}"
                                                                placeholder="{{ 'MAIL USERNAME' }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <input type="hidden" name="types[]" value="MAIL_PASSWORD">
                                                        <div class="col-md-3">
                                                            <label class="col-from-label"
                                                                style="font-size: 12px">{{ 'MAIL PASSWORD' }}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" name="MAIL_PASSWORD"
                                                                value="{{ env('MAIL_PASSWORD') }}"
                                                                placeholder="{{ 'MAIL PASSWORD' }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <input type="hidden" name="types[]" value="MAIL_ENCRYPTION">
                                                        <div class="col-md-3">
                                                            <label class="col-from-label"
                                                                style="font-size: 12px">{{ 'MAIL ENCRYPTION' }}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" name="MAIL_ENCRYPTION"
                                                                value="{{ env('MAIL_ENCRYPTION') }}"
                                                                placeholder="{{ 'MAIL ENCRYPTION' }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <input type="hidden" name="types[]" value="MAIL_FROM_ADDRESS">
                                                        <div class="col-md-3">
                                                            <label class="col-from-label"
                                                                style="font-size: 12px">{{ 'MAIL FROM ADDRESS' }}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="email" class="form-control"
                                                                name="MAIL_FROM_ADDRESS"
                                                                value="{{ env('MAIL_FROM_ADDRESS') }}"
                                                                placeholder="{{ 'MAIL FROM ADDRESS' }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <input type="hidden" name="types[]" value="MAIL_FROM_NAME">
                                                        <div class="col-md-3">
                                                            <label class="col-from-label"
                                                                style="font-size: 12px">{{ 'MAIL FROM NAME' }}</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" name="MAIL_FROM_NAME"
                                                                value="{{ env('MAIL_FROM_NAME') }}"
                                                                placeholder="{{ 'MAIL FROM NAME' }}">
                                                        </div>
                                                    </div>
                                                </div>
    
                                                <div class="form-group mb-0 text-right">
                                                    <button type="submit"
                                                        class="btn btn-primary">{{ 'Save Configuration' }}</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Page end  -->
                        </div>
                    </div>
                </div>
    
    
            </div>
            <div class="col-5   " style="margin-top:105px ">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">{{('Hướng dẫn')}}</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-danger">{{ ('Hãy cẩn thận khi bạn đang định cấu hình SMTP. Đối với cấu hình không chính xác, bạn sẽ gặp lỗi tại thời điểm đặt hàng, đăng ký mới, gửi bản tin.') }}</p>
                        <h6 class="text-muted">{{ ('Đối với tls') }}</h6>
                        <ul class="list-group">
                            <li class="list-group-item text-dark">{{ ('Đặt TÀI KHOẢN MAIL là tên email và MẬT KHẨU MAIL là mật khẩu mã hóa của bạn') }}</li>
                            <li class="list-group-item text-dark">{{ ('Đặt cổng mail là 587') }}</li>
                            <li class="list-group-item text-dark">{{ ('Đặt Mã hóa mail là ssl nếu bạn gặp sự cố với tls') }}</li>
                            <li class="list-group-item text-dark">{{ ('Đối với ssl thì cổng mail của bạn là 465') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
    
        </div>
       </div>
@endsection
