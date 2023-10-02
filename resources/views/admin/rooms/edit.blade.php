@extends('admin.layout.home')
@section('content')
<style>
    #formFileSm{
        line-height: 25px;
    }
</style>
<form action="{{ route('rooms.update',$room->id) }}" method="POST" data-toggle="validator" enctype="multipart/form-data">
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
                                                name="name" value="{{ $room->name }}">
                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="expiry_date">Max *</label>
                                            <input type="number" class="form-control" placeholder="Max"
                                                name="max" value="{{ $room->max }}">
                                         
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="value">Cinema *</label>
                                            <select class="form-control" name="cinema_id">
                                                @foreach ($cinema as $item)
                                                     <option value="{{$item->id}}" {{($item->id==$room->cinema_id)?"selected":""}}>{{$item->name}}</option>
                                                @endforeach
                                               
                                             
                                            </select>
                                            @if ($errors->has('status'))
                                                <span class="text-danger">{{ $errors->first('status') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Add Size</button>
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
