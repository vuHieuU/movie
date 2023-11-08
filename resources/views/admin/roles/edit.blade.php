@extends('admin.layout.home')
@section('content')
<form action="/role/update/{{ $role->id }}" method="POST" data-toggle="validator">
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
                                    <h4 class="card-title">Cập nhật quyền</h4>
                                </div>
                            </div>
                            <div class="card-body">
                             
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tên quyền *</label>
                                                <input type="text" class="form-control" placeholder="Enter Name"
                                                    data-errors="Please Enter Name." name="name" value="{{ $role->name }}">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Display Name *</label>
                                                <input type="text" class="form-control" placeholder="display_name"
                                                    data-errors="Please Enter Name." name="display_name" value="{{ $role->display_name }}">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Bên</label>
                                                <select name="group" class="selectpicker form-control" data-style="py-0">
                                                    <option value="Admin" {{ $role->group == 'Admin' ? "selected" : "" }}>Admin</option>
                                                    <option value="User" {{ $role->group == 'User' ? "selected" : "" }}>User</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Phân quyền <input type="checkbox" class="check-all" style="margin-left: 7px"></label>
                                                <div class="row container m-auto">
                                                  @foreach ($permissions as $groupName=>$permission)
                                                  <div class="col-4 pb-3">
                                                    <h4><b>{{ $groupName }}</b> <input type="checkbox" class="check-one-name" style="margin-left: 7px"></h4>
                                                    @foreach ($permission as $item)
                                                    <div class="form-check">
                                                        <input class="form-check-input check-box-all check-one-{{ $groupName }}" name="permission_ids[]" type="checkbox" 
                                                        {{ $role->permissions->contains('name', $item->name) ? 'checked':''}} value="{{ $item->id }}">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                          {{ $item->display_name }}
                                                        </label>
                                                      </div>
                                                    @endforeach
                                                  </div>
                                                  
                                                  @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Cập nhật</button>
                                    <button type="reset" class="btn btn-danger mr-2">Reset</button>
                                    <a href="/role/index"><button type="submit" class="btn btn-danger">Back</button></a>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).on("change", ".check-one-name", function() {
        var groupName = $(this).closest(".col-4").find("b").text();

        if (this.checked) {
            // Iterate over checkboxes within the specific group
            $('.check-one-' + groupName).each(function() {
                this.checked = true;
            });
        } else {
            $('.check-one-' + groupName).each(function() {
                this.checked = false;
            });
        }
    });

    $(document).on("change", ".check-all", function() {
            if(this.checked) {
                // Iterate each checkbox
                $('.check-box-all:checkbox').each(function() {
                    this.checked = true;
                });
            } else {
                $('.check-box-all:checkbox').each(function() {
                    this.checked = false;
                });
            }

        });
</script>