<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>POS Dash | Responsive Bootstrap 4 Admin Dashboard Template</title>
    <link rel="stylesheet" href="/template/assets/css/backend-plugin.min.css">
    <link rel="stylesheet" href="/template/assets/css/backend.css?v=1.0.0">
    <link rel="stylesheet"href="/template/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
     <link rel="stylesheet" href="/template/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
      <link rel="stylesheet" href="/template/assets/vendor/remixicon/fonts/remixicon.css">  
      <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/bd9a701ba3.js" crossorigin="anonymous"></script>
    </head>
  <body class="  ">
    <div class="wrapper mt-5">
      
     
            
      <div class="container">
         <div class="row">
            <div class="col-xl-3 col-lg-4">
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title text-center">
                           <h4 class="card-title">Ảnh đại diện</h4>
                        </div>
                     </div>
                     <div class="card-body">
                      
                           <div class="form-group">
                            @if (Auth::user()->logo)
                            <div class="crm-profile-img-edit position-relative">
                                <img src="{{ asset(Auth::user()->logo) }}" class="img-fluid rounded"
                                alt="IMG">
                                {{-- <div class="crm-p-image bg-primary">
                                   <i class="las la-pen upload-button"></i>
                                </div> --}}
                             </div>  
                            @else
                            <div class="crm-profile-img-edit position-relative text-center">
                                <i style="font-size:50px" class="fa-solid fa-user"></i>
                                {{-- <div class="crm-p-image bg-primary">
                                   <i class="las la-pen upload-button"></i>
                                </div> --}}
                             </div>  
                            @endif
                            
                           </div>
                         
                    
                       
                     </div>
                  </div>
            </div>
            <div class="col-xl-9 col-lg-8">
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Cập nhật thông tin cá nhân</h4>
                        </div>
                     </div>
                     <div class="card-body">
                        <div class="new-user-info">
                           <form method="POST" data-toggle="validator" id="profile-form" action="{{ route('profile') }}" enctype="multipart/form-data">
                             @csrf
                            <div class="row">
                                 <div class="form-group col-md-12">
                                    <label for="fname">Tên người dùng:</label>
                                    <input type="text" class="py-3   rounded-4 border form-control" placeholder="Enter Name"
                                                        data-errors="Please Enter Name." name="name" value="{{ Auth::User()->name }}">
                                                    <div class="help-block with-errors">
                                                    @if ($errors->has('name'))
                                                    <span class="text-danger">{{ $errors->first('name') }}</span> @endif
                                                </div>
                                 </div>   
    <div class="form-group col-md-6">
        <label for="add1">Số điện thoại:</label>
        <input type="text" class="py-3  rounded-4 border form-control" placeholder="Enter Duration"
                                                        data-errors="Please Enter Name." name="phone" value="{{ Auth::User()->phone }}">
                                                    <div class="help-block with-errors">
                                                    @if ($errors->has('phone'))
                                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                                @endif
                                            </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="gender">Giới tính *</label>
            <br>
            <select class="py-3  rounded-4 border form-control-lg col-md-12" id="gender" data-errors="Please Select Gender." name="gender">
                <option value="Nam" {{ Auth::User()->gender === 'male' ? 'selected' : '' }}>Nam</option>
                <option value="Nữ" {{ Auth::User()->gender === 'female' ? 'selected' : '' }}>Nữ</option>
                <option value="Khác" {{ Auth::User()->gender === 'other' ? 'selected' : '' }}>Khác</option>
            </select>
            <div class="help-block with-errors">
            </div>
        </div> 
    </div>
    <div class="form-group col-md-12">
        <label for="cname">Hình ảnh:</label>
        <input type="file" class="  rounded-4 border form-control" placeholder="Enter Name"
                                                        data-errors="Please Enter Name." name="logo" value="{{ Auth::User()->logo }}">
                                                    <div class="help-block with-errors">
                                                    @if ($errors->has('logo'))
                                                    <span class="text-danger">{{ $errors->first('logo') }}</span>
                                                @endif
                                            </div>
    </div>

    <div class="form-group col-md-12">
        <label for="mobno">Địa chỉ:</label>
        <input type="text" class="py-3  rounded-4 border form-control" placeholder="Enter Name"
                                                        data-errors="Please Enter Name." name="address" value="{{ Auth::User()->address }}">
                                                    <div class="help-block with-errors">
                                                    @if ($errors->has('address'))
                                                    <span class="text-danger">{{ $errors->first('address') }}</span> @endif
                                            </div>
    </div>


        <div class="mt-5
        px-3">
    <button type="submit" class="btn btn-primary mr-2 fs-3 rounded-4">Cập Nhật</button>
    <button type="reset" class="btn btn-danger mr-2 fs-3 rounded-4">Reset</button>
    <a href="/myaccount" class="btn btn-danger mr-2 fs-3 rounded-4">Back</a>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#change_password').change(function() {
                if ($(this).is(':checked')) {
                    $('#old_passwords').show();
                    $('#new_passwords').show();
                    $('#confim_passwords').show();
                } else {
                    $('#old_passwords').hide();
                    $('#new_passwords').hide();
                    $('#confim_passwords').hide();
                }
            });
        });
    </script>