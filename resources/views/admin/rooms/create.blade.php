@extends('admin.layout.home')
@section('content')
<style>
    #formFileSm{
        line-height: 25px;
    }
</style>
<form action="{{ route('rooms.store') }}" method="POST" data-toggle="validator" enctype="multipart/form-data">
    @csrf
    <div class="wrapper">
        <div class="content-page">
            <div class="container-fluid add-form-list">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Thêm phòng</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Tên phòng *</label>
                                            <input type="text" class="form-control" placeholder="Name"
                                                name="name" required>
                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="expiry_date">Tối đa *</label>
                                            <input type="number" class="form-control" placeholder="Max"
                                                name="max" required>
                                         
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="value">Rạp chiếu *</label>
                                            <select class="form-control" name="cinema_id" required>
                                                @foreach ($cinemas as $item)
                                                     <option value="{{$item->id}}">{{$item->name}}</option>
                                                @endforeach
                                               
                                             
                                            </select>
                                            @if ($errors->has('status'))
                                                <span class="text-danger">{{ $errors->first('status') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-primary mr-2">Thêm mới</button>
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
