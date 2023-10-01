@extends('admin.layout.home')
@section('content')
<style>
    #formFileSm{
        line-height: 25px;
    }
</style>
<form action="{{ route('combo.store') }}" method="POST" data-toggle="validator" enctype="multipart/form-data">
    @csrf
    <div class="wrapper">
        <div class="content-page">
            <div class="container-fluid add-form-list">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Add ComBo</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Name *</label>
                                            <input type="text" class="form-control" placeholder="Name"
                                                name="name">
                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="expiry_date">Price *</label>
                                            <input type="text" class="form-control" placeholder="Price"
                                                name="price">
                                         
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="expiry_date">Size *</label>
                                            <input type="text" class="form-control" placeholder="Size"
                                                name="size">
                                         
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Food</label>
                                        <div class="row container m-auto">
                    
                                            @foreach ($food as $item)
                                            <div class="form-check mx-3 d-flex align-items-center">
                                                <input class="checkbox form-check-input" name="id_food[]" type="checkbox" value="{{ $item->id }}">
                                                <label class="form-check-label mx-1">
                                                  {{ $item->name }}
                                                </label>
                                              </div>
                                          @endforeach
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
