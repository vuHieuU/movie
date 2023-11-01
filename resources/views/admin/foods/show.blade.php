@extends('admin.layout.home')
@section('content')
<style>
    #formFileSm{
        line-height: 25px;
    }
</style>
<form action="{{ route('food.update', $food->id) }}"method="POST" data-toggle="validator" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="wrapper">
        <div class="content-page">
            <div class="container-fluid add-form-list">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Chi tiết đồ ăn</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Tên đồ ăn *</label>
                                            <input type="text" class="form-control" placeholder="Name" name="name" value="{{ $food->name }}" disabled>
                                            @if ($errors->has('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="price">Giá *</label>
                                            <input type="text" class="form-control" placeholder="Price" name="price" value="{{ $food->price }}" disabled>
                                            @if ($errors->has('price'))
                                                <span class="text-danger">{{ $errors->first('price') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="status">Trạng thái *</label>
                                            <select class="form-control" name="status" disabled>
                                                <option value="0">ON</option>
                                                <option value="1" selected>OF</option>
                                            </select>
                                            @if ($errors->has('status'))
                                                <span class="text-danger">{{ $errors->first('status') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                            <label for="formFileSm" class="form-label">Hình ảnh *</label>
                                            <div>
                                                <img src="{{asset('storage/images/'.$food->thumb)}}" width="240" height="240" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="expiry_date">Số lượng *</label>
                                            <input type="text" class="form-control" placeholder="Số lượng"
                                                name="qty" value="{{ $food->qty }}" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Nội dung </label>
                                              <textarea class="form-control" name="content" cols="10" rows="5" disabled>{{ $food->content }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="row">
                                <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Thumb *</label>
                                            <img src="{{ asset('storage/images/'.$food->thumb)}}" style="width: 50px" />
                                            <input type="text" class="form-control" value="{{ $food->thumb }}" disabled>
                                        </div>
                                    </div>
                                </div> --}}
                                
                                {{-- <button type="submit" class="btn btn-primary mr-2">Cập nhật</button>
                                <button type="reset" class="btn btn-danger mr-2">Reset</button> --}}
                                <a href="{{route("food.index")}}" class="btn btn-danger">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page end  -->
        </div>
    </div>
</form>
@endsection
