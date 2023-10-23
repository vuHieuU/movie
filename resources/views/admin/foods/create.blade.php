@extends('admin.layout.home')
@section('content')
    <style>
        #formFileSm {
            line-height: 25px;
        }
    </style>
    <form action="{{ route('food.store') }}" method="POST" data-toggle="validator" enctype="multipart/form-data">
        @csrf
        <div class="wrapper">
            <div class="content-page">
                <div class="container-fluid add-form-list">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Add Food</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="name">Name *</label>
                                                <input type="text" class="form-control" placeholder="Name"
                                                    name="name">
                                                @if ($errors->has('name'))
                                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="formFileSm" class="form-label">Thumb *</label>
                                                <input class="form-control" id="formFileSm" name="thumb" type="file"
                                                    accept="image/*" required>
                                                @if ($errors->has('thumb'))
                                                    <span class="text-danger">{{ $errors->first('thumb') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="expiry_date">Price *</label>
                                                <input type="price" class="form-control" placeholder="Price"
                                                    name="price">
                                                @if ($errors->has('price'))
                                                    <span class="text-danger">{{ $errors->first('price') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="value">Status *</label>
                                                <select class="form-control" name="status">
                                                    <option value="1">ON</option>
                                                    <option value="0">OF</option>
                                                </select>
                                                @if ($errors->has('status'))
                                                    <span class="text-danger">{{ $errors->first('status') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="expiry_date">Quantity *</label>
                                                <input type="text" class="form-control" placeholder="Số lượng"
                                                    name="qty">
                                                @if ($errors->has('qty'))
                                                    <span class="text-danger">{{ $errors->first('qty') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="name">content </label>
                                                  <textarea class="form-control" name="content" cols="10" rows="5"></textarea>

                                            </div>
                                        </div>
                                    </div>

                                    


                                    <button type="submit" class="btn btn-primary mr-2">Add Food</button>
                                    <button type="reset" class="btn btn-danger mr-2">Reset</button>
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
