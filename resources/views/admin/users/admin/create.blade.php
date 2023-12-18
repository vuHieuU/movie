@extends('admin.layout.home')
@section('content')
<form action="/admin/store" method="POST" data-toggle="validator">
    @csrf
    <div class="wrapper">
        <div class="modal fade" id="new-order" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="popup text-left">
                            <h4 class="mb-3">New Order</h4>
                            <div class="content create-workform bg-body">
                                <div class="pb-3">
                                    <label class="mb-2">Email</label>
                                    <input type="text" class="form-control" placeholder="Enter Name or Email">
                                </div>
                                <div class="col-lg-12 mt-4">
                                    <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                                        <div class="btn btn-primary mr-4" data-dismiss="modal">Cancel</div>
                                        <div class="btn btn-outline-primary" data-dismiss="modal">Create</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-page">
            <div class="container-fluid add-form-list">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Thêm admin</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                  <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Tên người dùng *</label>
                                            <input required type="text" class="form-control" placeholder="name"
                                                name="name" value="{{ old('name') }}">
                                                @error('name')
                                                    
                                                <div class="help-block with-errors">{{ $message }}</div>

                                                @enderror
                                        </div>
                                    </div>
                                  </div>
                             
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email *</label>
                                                <input required type="text" class="form-control" placeholder="Enter email"
                                                    name="email" value="{{ old('email') }}">
                                                @error('email')
                                                    
                                                   <div class="help-block with-errors">{{ $message }}</div>

                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Số điện thoại</label>
                                                <input required type="text" class="form-control" placeholder="phone"
                                                    name="phone" value="{{ old('phone') }}">
                                                @error('phone')
                                                    
                                                   <div class="help-block with-errors">{{ $message }}</div>

                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Địa chỉ</label>
                                                <input required type="text" class="form-control" placeholder="address"
                                                    name="address" value="{{ old('address') }}">
                                                @error('address')
                                                    
                                                   <div class="help-block with-errors">{{ $message }}</div>

                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Giới tính</label>
                                                {{-- <input required type="text" class="form-control" placeholder="gender"
                                                    name="gender" value="{{ old('gender') }}"> --}}
                                                    <select name="gender" class="selectpicker form-control" data-style="py-0">
                                                        <option value="">Chọn giới tính</option>
                                                        <option value="Nam">Nam</option>
                                                        <option value="Nữ">Nữ</option>
                                                    </select>
                                                @error('gender')
                                                    
                                                   <div class="help-block with-errors">{{ $message }}</div>

                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Mật khẩu</label>
                                                <input required type="password" class="form-control" placeholder="password"
                                                    name="password" value="{{ old('password') }}">
                                                    @error('gender')
                                                    
                                                      <div class="help-block with-errors">{{ $message }}</div>
 
                                                    @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Phân quyền</label>
                                         <div class="row container m-auto">
                                                @foreach ($role as $groupName => $role)
                                                <div class="col-4 pb-3">
                                                        <h4><b>{{ $groupName }}</b></h4>
                                                        @foreach ($role as $item)
                                                        <div class="form-check">
                                                          <input required class="form-check-input" name="role_ids[]" type="radio" value="{{ $item->id }}" required>
                                                          <label class="form-check-label" for="flexCheckDefault">
                                                            {{ $item->display_name }}
                                                          </label>
                                                        </div>
                                                        @endforeach
                                                      </div>
                                                @endforeach
                                          </div>
                                      </div>
                                    <button type="submit" class="btn btn-primary mr-2">Thêm mới</button>
                                    <button type="reset" class="btn btn-danger mr-2">Reset</button>
                                    {{-- <a href="/user/index"><button type="submit" class="btn btn-danger">Back</button></a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page end  -->
            </div>
        </div>
    </div>
</form>

@endsection