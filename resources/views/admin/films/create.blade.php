@extends('admin.layout.home')
@section('content')
    <form action="{{ route('films.store') }}" method="POST" data-toggle="validator" enctype="multipart/form-data">
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
                                        <h4 class="card-title">Thêm phim</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tên phim *</label>
                                                <input type="text" class="form-control" placeholder="Enter Name"
                                                    data-errors="Please Enter Name." name="name">
                                                <div class="help-block with-errors"></div>
                                                @if ($errors->has('name'))
                                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Thời lượng phim (Phút) *</label>
                                                <input type="text" class="form-control" placeholder="Enter Duration"
                                                    data-errors="Please Enter Name." name="duration">
                                                <div class="help-block with-errors"></div>
                                                @if ($errors->has('duration'))
                                                    <span class="text-danger">{{ $errors->first('duration') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="expiry_date">Thời gian chiếu *</label>
                                                <input type="date" class="form-control" placeholder="Expiry Date"
                                                    name="premiere_date">
                                                @if ($errors->has('premiere_date'))
                                                    <span class="text-danger">{{ $errors->first('premiere_date') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                 

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Đạo diễn *</label>
                                                <input type="text" class="form-control" placeholder="Enter Name"
                                                    data-errors="Please Enter Name." name="director">
                                                <div class="help-block with-errors"></div>
                                                @if ($errors->has('director'))
                                                    <span class="text-danger">{{ $errors->first('director') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Diễn viên *</label>
                                                <input type="text" class="form-control" placeholder="Enter Name"
                                                    data-errors="Please Enter Name." name="actor">
                                                <div class="help-block with-errors"></div>
                                                @if ($errors->has('actor'))
                                                    <span class="text-danger">{{ $errors->first('actor') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Ngôn ngữ chính *</label>
                                                <input type="text" class="form-control" placeholder="Enter Name"
                                                    data-errors="Please Enter Name." name="language">
                                                <div class="help-block with-errors"></div>
                                                @if ($errors->has('language'))
                                                    <span class="text-danger">{{ $errors->first('language') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Quốc gia *</label>
                                                <input type="text" class="form-control" placeholder="Enter Name"
                                                    data-errors="Please Enter Name." name="country">
                                                <div class="help-block with-errors"></div>
                                                @if ($errors->has('country'))
                                                    <span class="text-danger">{{ $errors->first('country') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Trailer phim *</label>
                                                <input type="text" class="form-control" placeholder="Enter Name"
                                                    data-errors="Please Enter Name." name="trailer">
                                                <div class="help-block with-errors"></div>
                                                @if ($errors->has('trailer'))
                                                    <span class="text-danger">{{ $errors->first('trailer') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Trạng thái *</label>
                                                <input type="text" class="form-control" placeholder="Enter Name"
                                                    data-errors="Please Enter Name." name="status">
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
                                                <label for="formFile" class="form-label">Ảnh Thumbnail</label>
                                                <input class="form-control" type="file" id="formFile" name="thumb">
                                                @if ($errors->has('thumb'))
                                                <span class="text-danger">{{ $errors->first('thumb') }}</span>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-floating">
                                                    <label for="floatingTextarea">Mô tả phim</label>
                                                    <textarea name="description" id="mySummernote" class="form-control" rows="5"></textarea>
                                                    @if ($errors->has('description'))
                                                    <span class="text-danger">{{ $errors->first('description') }}</span>
                                                @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Thể Loại</label>
                                            {{-- <input type="checkbox" class="checkbox mx-3" id="checkbox1" data-master-checkbox> --}}
                                            <div class="row container m-auto">
                        
                                                @foreach ($cate as $item)
                                                <div class="form-check mx-3 d-flex align-items-center">
                                                    <input class="checkbox form-check-input" name="id_cate[]" type="checkbox" value="{{ $item->id }}">
                                                    <label class="form-check-label mx-1">
                                                      {{ $item->name }}
                                                    </label>
                                                  </div>
                                              @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Thêm</button>
                                    <button type="reset" class="btn btn-danger mr-2">Reset</button>
                                    <a href="{{route("films.index")}}" class="btn btn-danger text-white">Back</a>
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
