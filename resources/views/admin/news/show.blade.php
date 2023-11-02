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
                                        <h4 class="card-title">Chi tiết tin tức</h4>
                                    </div>
                                </div>
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tiêu đề *</label>
                                                <input type="text" class="form-control" placeholder="Nhập tiêu đề"
                                                    data-errors="Please Enter Name." name="title" value="{{ $new->title }}" disabled>
                                                <div class="help-block with-errors"></div>
                                                @if ($errors->has('title'))
                                                    <span class="text-danger">{{ $errors->first('title') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Đường dẫn *</label>
                                                <input type="text" class="form-control" placeholder="Đường dẫn..." disabled
                                                    data-errors="Please Enter Name." name="slug" value="{{ $new->slug }}">
                                                <div class="help-block with-errors"></div>
                                                @if ($errors->has('slug'))
                                                    <span class="text-danger">{{ $errors->first('slug') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="formFile" class="form-label">Ảnh Thumbnail</label>
                                                {{-- <input class="form-control" type="file" id="formFile" name="thumbnail"> --}}

                                                <div>
                                                    <img src="{{asset('/storage/images/'.$new->thumbnail)}}" style="height: 200px;width:150px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Trạng thái</label>
                                                <div>
                                                    <input type="checkbox" name="status" {{ $new->status == "1" ? "checked" : ""}} style="width: 60px; height: 60px;" disabled>
                                                </div>
                                                <div class="help-block with-errors"></div>
                                                @if ($errors->has('status'))
                                                    <span class="text-danger">{{ $errors->first('status') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-floating">
                                                    <label for="floatingTextarea">Nội dung</label>
                                                    <textarea name="content" id="mySummernote" class="form-control" rows="5">{{ $new->content }}</textarea>
                                                    @if ($errors->has('content'))
                                                    <span class="text-danger">{{ $errors->first('content') }}</span>
                                                @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <h3>Seo Tags</h3>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="formFile" class="form-label">Meta Title</label>
                                                <input class="form-control" type="text" name="meta_title" value="{{ $new->meta_title }}" disabled>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="formFile" class="form-label">Meta Keyword</label>
                                                <input class="form-control" type="text" name="meta_keyword" value="{{ $new->meta_keyword }}" disabled>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="formFile" class="form-label">Meta Description</label>
                                                <textarea name="meta_description" id="" rows="4" class="form-control" disabled>{{ $new->meta_description }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <a href="{{route("news.index")}}"><button type="submit" class="btn btn-danger">Back</button></a>
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
