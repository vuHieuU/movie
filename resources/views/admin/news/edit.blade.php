@extends('admin.layout.home')
@section('content')
    <form action="{{ route('news.update', $new->id) }}" method="POST" data-toggle="validator" enctype="multipart/form-data">
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
                                        <h4 class="card-title">Edit News</h4>
                                    </div>
                                </div>
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tiêu đề *</label>
                                                <input type="text" class="form-control" placeholder="Nhập tiêu đề"
                                                    data-errors="Please Enter Name." name="title" value="{{ $new->title }}">
                                                <div class="help-block with-errors"></div>
                                                @if ($errors->has('title'))
                                                    <span class="text-danger">{{ $errors->first('title') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="formFile" class="form-label">Ảnh Thumbnail</label>
                                                <input class="form-control" type="file" id="formFile" name="thumbnail">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="expiry_date">Thời gian đăng *</label>
                                                <input type="date" class="form-control" placeholder="Expiry Date"
                                                    name="news_date" required value="{{ $new->news_date }}">
                                                @if ($errors->has('news_date'))
                                                    <span class="text-danger">{{ $errors->first('news_date') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-floating">
                                                    <label for="floatingTextarea">Nội dung</label>
                                                    <input type="text" class="form-control" placeholder="Nhập nội dung..." data-errors="Nhập nội dung..." name="content" value="{{ $new->content }}">
                                                    @if ($errors->has('content'))
                                                    <span class="text-danger">{{ $errors->first('content') }}</span>
                                                @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary mr-2">Update News</button>
                                    <button type="reset" class="btn btn-danger mr-2">Reset</button>
                                    <a href="/role/index"><button type="submit" class="btn btn-danger">Back</button></a>
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
