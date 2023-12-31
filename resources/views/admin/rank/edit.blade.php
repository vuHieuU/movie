@extends('admin.layout.home')
@section('content')
  <form action="{{ route('rank.update',$rank->id) }}" method="POST" data-toggle="validator">
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
                                        <h4 class="card-title">Sửa cấp bậc</h4>
                                    </div>
                                </div>
                                
                                <div class="card-body">
                                   
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tên cấp bậc *</label>
                                                <input type="text" class="form-control" placeholder="Enter Name"
                                                    data-errors="Please Enter Name." name="name" value="{{ $rank->name }}" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="form-group">
                                                <label>điểm tối thiểu *</label>
                                                <input type="text" class="form-control" placeholder="Enter score"
                                                    data-errors="Please Enter Name." name="minium_score" value="{{ $rank->minium_score }}" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Cập nhật</button>
                                    <button type="reset" class="btn btn-danger mr-2">Reset</button>
                                    <button type="reset" class="btn btn-danger"><a class="text-white" href="/rank/index">Back</a></button>

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
