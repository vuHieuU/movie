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
                                    <h4 class="card-title">Update Food</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Name *</label>
                                            <input type="text" class="form-control" placeholder="Name" name="name" value="{{ $food->name }}">
                                            @if ($errors->has('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="price">Price *</label>
                                            <input type="text" class="form-control" placeholder="Price" name="price" value="{{ $food->price }}">
                                            @if ($errors->has('price'))
                                                <span class="text-danger">{{ $errors->first('price') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="status">Status *</label>
                                            <select class="form-control" name="status">
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
                                    <div class="col-md-12">
                                    <div class="form-group">
                                            <label for="formFileSm" class="form-label">Thumb *</label>
                                            <input class="form-control" id="formFileSm" name="thumb" type="file" accept="image/*">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Thumb *</label>
                                            <img src="{{ asset('storage/images/'.$food->thumb)}}" style="width: 50px" />
                                            <input type="text" class="form-control" value="{{ $food->thumb }}" disabled>
                                        </div>
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-primary mr-2">Update Food</button>
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
