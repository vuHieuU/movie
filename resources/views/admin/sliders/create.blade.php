@extends('admin.layout.home')
@section('content')
<form action="/sliders/store" method="POST" data-toggle="validator" enctype="multipart/form-data">
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
                                    <h4 class="card-title">Thêm Banner</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                  <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Tên tiêu đề *</label>
                                            <input type="text" class="form-control" name="title" value="{{ old('title') }}" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Mô tả</label>
                                            <textarea name="description" id="" rows="3" class="form-control">{{ old('description') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Ảnh *</label>
                                            <input type="file" class="form-control" name="image" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Vị trí</label>
                                            <select name="position" class="form-control">
                                                        <option value="1">Logo</option>
                                                        <option value="2">Banner</option>
                                                        <option value="3">Banner trang chi tiết</option>
                                                        <option value="4">Banner nhỏ trang chi tiết</option>
                                                        <option value="5">Banner top</option>
                                                        <option value="6">Banner footer</option>
                                                        <option value="7">Ảnh trang home</option>
                                                        <option value="8">Ảnh title trang home</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Trạng thái *</label><br>
                                            <input type="checkbox" name="status" style="width:30px; height:30px;">
                                        </div>
                                    </div>
                                  </div>
                             
                                    <button type="submit" class="btn btn-primary mr-2">Thêm mới</button>
                                    <button type="reset" class="btn btn-danger mr-2">Reset</button>
                                    <a href="/sliders/index"><button type="submit" class="btn btn-danger">Back</button></a>
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