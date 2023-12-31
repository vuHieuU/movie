@extends('admin.layout.home')
@section('content')
    <form action="{{ route('categories.update', $cate->id) }}" method="POST" data-toggle="validator">
        @csrf
        @method("PUT")
        
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
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
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
                                        <h4 class="card-title">Cập nhật danh mục</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tên danh mục *</label>
                                                <input type="text" class="form-control" placeholder="Tên danh mục..."
                                                    data-errors="Please Enter Name." name="name"
                                                    value="{{ $cate->name }}">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Trạng thái</label>
                                                <div>
                                                    <input type="checkbox" name="status" {{ $cate->status == "1" ? "checked" : ""}} style="width: 60px; height: 60px;">
                                                </div>
                                                <div class="help-block with-errors"></div>
                                                @if ($errors->has('status'))
                                                    <span class="text-danger">{{ $errors->first('status') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div> --}}

                                    <button type="submit" class="btn btn-primary mr-2">Cập nhật</button>
                                    <button type="reset" class="btn btn-danger mr-2">Reset</button>
                                    <a href="{{route("categories.index")}}" class="btn btn-danger text-white">Back</a>
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
