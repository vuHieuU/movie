@extends('admin.layout.home')
@section('content')
<form action="/showtime/update/{{ $showtime->id }}" method="POST" data-toggle="validator" enctype="multipart/form-data">
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
                                    <h4 class="card-title">Add Showtime</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                  <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Film</label>
                                                  <select name="film_id" class="form-control">
                                                         @if (!empty($film))

                                                            @foreach ($film as $item)
                                                                <option value="{{ $item->id }}"
                                                                    {{ $showtime->film_id == $item->id ? 'selected':'' }}>{{ $item->name }}</option>
                                                            @endforeach
                                                             
                                                         @endif
                                                  </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                  </div> 
                                  <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="value">Cinema *</label>
                                            <select class="form-control" name="cinema_id">
                                                @foreach ($cinema as $item)
                                                     <option value="{{$item->id}}" {{$item->id==$showtime->cinema_id ? "selected":""}}>{{$item->name}}</option>
                                                @endforeach
                                               
                                             
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
                                            <label>day</label>
                                            <input type="date" class="form-control"
                                                name="day" value="{{ $showtime->day }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                  </div> 
                                  <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>day</label>
                                            <input type="time" class="form-control"
                                                name="hour" value="{{ $showtime->hour }}">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                  </div> 
                                  <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Room</label>
                                                  <select name="room_id" class="form-control">
                                                         @if (!empty($room))

                                                            @foreach ($room as $item)
                                                                <option value="{{ $item->id }}"
                                                                    {{ $showtime->room_id == $item->id ? 'selected':'' }}>{{ $item->name }}</option>
                                                            @endforeach
                                                             
                                                         @endif
                                                  </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                  </div> 
                     


                                <div class="mt-5"style="max-width: 1100px;margin: auto">
                                    <img class="img-responsive w-100" src="{{ asset('storage/images/ic-screen.png') }}">
                                    <div class="form-group">
                                        <label>Seats</label>
                                        <input type="checkbox" class="checkbox mx-3" id="selectAll"
                                            data-master-checkbox>
                                        <div class="row container  "style="max-width: 1100px;">
                                            @foreach ($seats as $item)
                                                @if ($item->typeSeat_id == 1)
                                                    <div class="form-check col-md-1">
                                                        <div class="form-check">
                                                    <input class="form-check-input item" type="checkbox" name="id_seat[]" 
                                                           {{ $showtime->seats->contains('seat_number', $item->seat_number) ? 'checked' : '' }} 
                                                           value="{{ $item->id }}" id="seat_{{ $item->id }}">
                                                    <label class="form-check-label" for="seat_{{ $item->id }}">
                                                        {{ $item->seat_number }}
                                                    </label>
                                                </div>

                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                        <div class="row container " style="max-width: 1050px;">
                                            @foreach ($seats as $item)
                                                @if ($item->typeSeat_id == 2)
                                                    <div class="form-check col-md-1">
                                                        <div class="form-check">
                                                    <input class="form-check-input item" type="checkbox" name="id_seat[]" 
                                                           {{ $showtime->seats->contains('seat_number', $item->seat_number) ? 'checked' : '' }} 
                                                           value="{{ $item->id }}" id="seat_{{ $item->id }}">
                                                    <label class="form-check-label" for="seat_{{ $item->id }}">
                                                        {{ $item->seat_number }}
                                                    </label>
                                                </div>

                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                        <div class="row container " style="max-width: 1000px;">
                                            @foreach ($seats as $item)
                                                @if ($item->typeSeat_id == 3)
                                                    <div class="form-check col-md-1">
                                                        <div class="form-check">
                                                    <input class="form-check-input item" type="checkbox" name="id_seat[]" 
                                                           {{ $showtime->seats->contains('seat_number', $item->seat_number) ? 'checked' : '' }} 
                                                           value="{{ $item->id }}" id="seat_{{ $item->id }}">
                                                    <label class="form-check-label" for="seat_{{ $item->id }}">
                                                        {{ $item->seat_number }}
                                                    </label>
                                                </div>

                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                        <div class="row container " style="max-width: 1000px;">
                                            @foreach ($seats as $item)
                                                @if ($item->typeSeat_id == 4)
                                                    <div class="form-check col-md-1">
                                                        <div class="form-check">
                                                    <input class="form-check-input item" type="checkbox" name="id_seat[]" 
                                                           {{ $showtime->seats->contains('seat_number', $item->seat_number) ? 'checked' : '' }} 
                                                           value="{{ $item->id }}" id="seat_{{ $item->id }}">
                                                    <label class="form-check-label" for="seat_{{ $item->id }}">
                                                        {{ $item->seat_number }}
                                                    </label>
                                                </div>

                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    <script>
                                        document.getElementById("selectAll").addEventListener("click", function() {
                                            // Lấy tất cả các phần tử có class "item"
                                            var checkboxes = document.querySelectorAll(".item");

                                            // Xác định trạng thái mới để chọn hoặc bỏ chọn
                                            var newState = true;
                                            for (var i = 0; i < checkboxes.length; i++) {
                                                if (!checkboxes[i].checked) {
                                                    newState = true; // Nếu có ít nhất một checkbox chưa được chọn, chọn tất cả
                                                    break;
                                                }
                                                newState = false; // Nếu tất cả các checkbox đã được chọn, bỏ chọn tất cả
                                            }

                                            // Thiết lập trạng thái của tất cả các checkbox
                                            for (var i = 0; i < checkboxes.length; i++) {
                                                checkboxes[i].checked = newState;
                                            }
                                        });
                                    </script>
                                </div>

                                    <button type="submit" class="btn btn-primary mr-2">Save</button>
                                    <button type="reset" class="btn btn-danger mr-2">Reset</button>
                                    {{-- <a href="/user/index"><button type="submit" class="btn btn-danger">Back</button></a> --}}
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