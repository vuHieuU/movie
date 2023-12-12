@extends('admin.layout.home')
@section('content')
<form action="{{ route('coupon.update', $coupon->id) }}"method="POST" data-toggle="validator">
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
                                    <h4 class="card-title">Cập nhật mã giảm giá</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Mã *</label>
                                            <input type="text" class="form-control" placeholder="Name" name="name" value="{{ $coupon->name }}" required>
                                            @if ($errors->has('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Kiểu</label>
                                            <select name="type" class="selectpicker form-control" data-style="py-0">
                                                <option value="amount" {{ $coupon->type == 'amount' ? "selected" : "" }}>Vnđ</option>
                                                <option value="percent" {{ $coupon->type == 'percent' ? "selected" : "" }}>%</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="expiry_date">Ngày hết hạn *</label>
                                            <input type="date" class="form-control" placeholder="Expiry Date" name="expiry_date" value="{{ $coupon->expiry_date }}" required>
                                            @if ($errors->has('expiry_date'))
                                                <span class="text-danger">{{ $errors->first('expiry_date') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="value">Giá trị *</label>
                                            <input type="text" class="form-control" placeholder="Value" name="value" value="{{ $coupon->value}}" required
                                                name="value" required>
                                            @if ($errors->has('value'))
                                                <span class="text-danger">{{ $errors->first('value') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="type">Cấp bậc sử dụng</label>
                                            <select name="rank_id" class="selectpicker form-control" data-style="py-0">
                                                    @foreach ($ranks as $rank) 
                                                       <option value="{{ $rank->id }}" {{ $coupon->rank_id == $rank->id ? 'selected':'' }}>{{ $rank->name }}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Cập nhật</button>
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
