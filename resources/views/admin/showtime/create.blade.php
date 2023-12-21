@extends('admin.layout.home')
@section('content')
    <form action="/showtime/store" method="POST" data-toggle="validator" enctype="multipart/form-data">
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
                                        <h4 class="card-title">Thêm lịch chiếu</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Phim</label>
                                                <select name="film_id" class="form-control" required>
                                                    @if (!empty($film))
                                                        @foreach ($film as $item)
                                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
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
                                                <label for="value">Rạp phim *</label>
                                                <select class="form-control" name="cinema_id" required>
                                                    @foreach ($cinemas as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
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
                                                <label>Ngày</label>
                                                <input type="date" class="form-control" name="day" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Giờ</label>
                                                <input type="time" class="form-control" name="hour" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Phòng chiếu</label>
                                                <select name="room_id" class="form-control" required>
                                                    @if (!empty($room))
                                                        @foreach ($room as $item)
                                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div> --}} 
                                    <h5 style="font-weight: bold" class="mt-5">Số lượng ghế</h5>
                                    <div class="mt-4"style="max-width: 1100px;margin: auto">
                                        {{-- <img class="img-responsive w-100" src="{{ asset('storage/images/ic-screen.png') }}"> --}}
                                        <div class="form-group">
                                           
                                            <div class="d-flex">
                                                    {{-- <h6>Tất cả<input type="checkbox" class="check-all mx-3" id="selectAll"
                                                        data-master-checkbox></h6>
                                                    <h6>A<input type="checkbox" class="checkboxA mx-3"></h6>
                                                    <h6>B<input type="checkbox" class="checkboxB mx-3"></h6>
                                                    <h6>C<input type="checkbox" class="checkboxC mx-3"></h6>
                                                    <h6>D<input type="checkbox" class="checkboxD mx-3"></h6> --}}
                                                
                                                    <div><h6>88 Ghế <input type="checkbox" class="check-all mx-3" id="chec96k"
                                                        data-master-checkbox></h6></div>
                                                    <div><h6>63 Ghế <input type="checkbox" class="check-63 mx-3" id="check63"
                                                            data-master-checkbox></h6></div>
                                            </div>
                                            <div class="d-none" id="type1">
                                                <div class="row container  " style="max-width: 1050px;">
                                                    @foreach ($f96_1 as $item)
                                                        {{-- @if ($item->typeSeat_id == 2) --}}
                                                            <div class="form-check col-md-1">
                                                                <div class="form-check d-flex align-items-center">
                                                                    <input class="form-check-input item check-box-all check-box-B" 
                                                                        type="checkbox" name="id_seat[]"
                                                                        value="{{ $item->id }}"
                                                                        id="seat_{{ $item->id }}">
                                                                    <p class="form-check-label"
                                                                        for="seat_{{ $item->id }}">{{ $item->seat_number }}</p>
                                                                </div>
    
                                                            </div>
                                                        {{-- @endif --}}
                                                    @endforeach
                                                </div>
                                                <div class="row container " style="max-width: 1050px;">
                                                    @foreach ($f96_2 as $item)
                                                        {{-- @if ($item->typeSeat_id == 2) --}}
                                                            <div class="form-check col-md-1">
                                                                <div class="form-check d-flex align-items-center">
                                                                    <input class="form-check-input item check-box-all check-box-B" 
                                                                        type="checkbox" name="id_seat[]"
                                                                        value="{{ $item->id }}"
                                                                        id="seat_{{ $item->id }}">
                                                                    <p class="form-check-label"
                                                                        for="seat_{{ $item->id }}">{{ $item->seat_number }}</p>
                                                                </div>
    
                                                            </div>
                                                        {{-- @endif --}}
                                                    @endforeach
                                                </div>
                                                
                                                <div class="row container " style="max-width: 1000px;">
                                                    @foreach ($f96_3 as $item)
                                                    
                                                            <div class="form-check col-md-1">
                                                                <div class="form-check d-flex align-items-center">
                                                                    <input class="form-check-input item check-box-all check-box-C" 
                                                                        type="checkbox" name="id_seat[]"
                                                                        value="{{ $item->id }}"
                                                                        id="seat_{{ $item->id }}">
                                                                    <p class="form-check-label"
                                                                        for="seat_{{ $item->id }}">{{ $item->seat_number }}</p>
                                                                </div>
    
                                                            </div>
                                                    
                                                    @endforeach
                                                </div>
                                                <div class="row container " style="max-width: 1000px;">
                                                    @foreach ($f96_4 as $item)
                                                    
                                                            <div class="form-check col-md-1">
                                                                <div class="form-check d-flex align-items-center">
                                                                    <input class="form-check-input item check-box-all check-box-D" 
                                                                        type="checkbox" name="id_seat[]"
                                                                        value="{{ $item->id }}"
                                                                        id="seat_{{ $item->id }}">
                                                                    <p class="form-check-label"
                                                                        for="seat_{{ $item->id }}">{{ $item->seat_number }}</p>
                                                                </div>
    
                                                            </div>
                                                    
                                                    @endforeach
                                                </div>
                                                <div class="row container " style="max-width: 1000px;">
                                                    @foreach ($f96_5 as $item)
                                                    
                                                            <div class="form-check col-md-1">
                                                                <div class="form-check d-flex align-items-center">
                                                                    <input class="form-check-input item check-box-all check-box-D" 
                                                                        type="checkbox" name="id_seat[]"
                                                                        value="{{ $item->id }}"
                                                                        id="seat_{{ $item->id }}">
                                                                    <p class="form-check-label"
                                                                        for="seat_{{ $item->id }}">{{ $item->seat_number }}</p>
                                                                </div>
    
                                                            </div>
                                                    
                                                    @endforeach
                                                </div>
                                                <div class="row container " style="max-width: 1000px;">
                                                    @foreach ($f96_6 as $item)
                                                    
                                                            <div class="form-check col-md-1">
                                                                <div class="form-check d-flex align-items-center">
                                                                    <input class="form-check-input item check-box-all check-box-D" 
                                                                        type="checkbox" name="id_seat[]"
                                                                        value="{{ $item->id }}"
                                                                        id="seat_{{ $item->id }}">
                                                                    <p class="form-check-label"
                                                                        for="seat_{{ $item->id }}">{{ $item->seat_number }}</p>
                                                                </div>
    
                                                            </div>
                                                    
                                                    @endforeach
                                                </div>
                                                <div class="row container " style="max-width: 1000px;">
                                                    @foreach ($f96_7 as $item)
                                                    
                                                            <div class="form-check col-md-1">
                                                                <div class="form-check d-flex align-items-center">
                                                                    <input class="form-check-input item check-box-all check-box-D" 
                                                                        type="checkbox" name="id_seat[]"
                                                                        value="{{ $item->id }}"
                                                                        id="seat_{{ $item->id }}">
                                                                    <p class="form-check-label"
                                                                        for="seat_{{ $item->id }}">{{ $item->seat_number }}</p>
                                                                </div>
    
                                                            </div>
                                                    
                                                    @endforeach
                                                </div>
                                                <div class="row container " style="max-width: 1000px;">
                                                    @foreach ($f96_8 as $item)
                                                    
                                                            <div class="form-check col-md-1">
                                                                <div class="form-check d-flex align-items-center">
                                                                    <input class="form-check-input item check-box-all check-box-D" 
                                                                        type="checkbox" name="id_seat[]"
                                                                        value="{{ $item->id }}"
                                                                        id="seat_{{ $item->id }}">
                                                                    <p class="form-check-label"
                                                                        for="seat_{{ $item->id }}">{{ $item->seat_number }}</p>
                                                                </div>
    
                                                            </div>
                                                    
                                                    @endforeach
                                                </div>
                                            
                                            </div>
                                            {{-- Form 2 --}}
                                        <div class="d-none" id="type1">
                                            <div class="row container " style="max-width: 1050px;">
                                                @foreach ($f2_1 as $item)
                                                    {{-- @if ($item->typeSeat_id == 2) --}}
                                                        <div class="form-check col-md-1">
                                                            <div class="form-check d-flex align-items-center">
                                                                <input class="form-check-input item check-box-63 check-box-B" 
                                                                    type="checkbox" name="id_seat[]"
                                                                    value="{{ $item->id }}"
                                                                    id="seat_{{ $item->id }}">
                                                                <p class="form-check-label"
                                                                    for="seat_{{ $item->id }}">{{ $item->seat_number }}</p>
                                                            </div>

                                                        </div>
                                                    {{-- @endif --}}
                                                @endforeach
                                            </div>
                                            <div class="row container " style="max-width: 1050px;">
                                                @foreach ($f2_2 as $item)
                                                    {{-- @if ($item->typeSeat_id == 2) --}}
                                                        <div class="form-check col-md-1">
                                                            <div class="form-check d-flex align-items-center">
                                                                <input class="form-check-input item check-box-63 check-box-B" 
                                                                    type="checkbox" name="id_seat[]"
                                                                    value="{{ $item->id }}"
                                                                    id="seat_{{ $item->id }}">
                                                                <p class="form-check-label"
                                                                    for="seat_{{ $item->id }}">{{ $item->seat_number }}</p>
                                                            </div>

                                                        </div>
                                                    {{-- @endif --}}
                                                @endforeach
                                            </div>
                                            
                                            <div class="row container " style="max-width: 1000px;">
                                                @foreach ($f2_3 as $item)
                                                
                                                        <div class="form-check col-md-1">
                                                            <div class="form-check d-flex align-items-center">
                                                                <input class="form-check-input item check-box-63 check-box-C" 
                                                                    type="checkbox" name="id_seat[]"
                                                                    value="{{ $item->id }}"
                                                                    id="seat_{{ $item->id }}">
                                                                <p class="form-check-label"
                                                                    for="seat_{{ $item->id }}">{{ $item->seat_number }}</p>
                                                            </div>

                                                        </div>
                                                
                                                @endforeach
                                            </div>
                                            <div class="row container " style="max-width: 1000px;">
                                                @foreach ($f2_4 as $item)
                                                
                                                        <div class="form-check col-md-1">
                                                            <div class="form-check d-flex align-items-center">
                                                                <input class="form-check-input item check-box-63 check-box-D" 
                                                                    type="checkbox" name="id_seat[]"
                                                                    value="{{ $item->id }}"
                                                                    id="seat_{{ $item->id }}">
                                                                <p class="form-check-label"
                                                                    for="seat_{{ $item->id }}">{{ $item->seat_number }}</p>
                                                            </div>

                                                        </div>
                                                
                                                @endforeach
                                            </div>
                                            <div class="row container " style="max-width: 1000px;">
                                                @foreach ($f2_5 as $item)
                                                
                                                        <div class="form-check col-md-1">
                                                            <div class="form-check d-flex align-items-center">
                                                                <input class="form-check-input item check-box-63 check-box-D" 
                                                                    type="checkbox" name="id_seat[]"
                                                                    value="{{ $item->id }}"
                                                                    id="seat_{{ $item->id }}">
                                                                <p class="form-check-label"
                                                                    for="seat_{{ $item->id }}">{{ $item->seat_number }}</p>
                                                            </div>

                                                        </div>
                                                
                                                @endforeach
                                            </div>
                                            <div class="row container " style="max-width: 1000px;">
                                                @foreach ($f2_6 as $item)
                                                
                                                        <div class="form-check col-md-1">
                                                            <div class="form-check d-flex align-items-center">
                                                                <input class="form-check-input item check-box-63 check-box-D" 
                                                                    type="checkbox" name="id_seat[]"
                                                                    value="{{ $item->id }}"
                                                                    id="seat_{{ $item->id }}">
                                                                <p class="form-check-label"
                                                                    for="seat_{{ $item->id }}">{{ $item->seat_number }}</p>
                                                            </div>

                                                        </div>
                                                
                                                @endforeach
                                            </div>
                                            <div class="row container " style="max-width: 1000px;">
                                                @foreach ($f2_7 as $item)
                                                
                                                        <div class="form-check col-md-1">
                                                            <div class="form-check d-flex align-items-center">
                                                                <input class="form-check-input item check-box-63 check-box-D" 
                                                                    type="checkbox" name="id_seat[]"
                                                                    value="{{ $item->id }}"
                                                                    id="seat_{{ $item->id }}">
                                                                <p class="form-check-label"
                                                                    for="seat_{{ $item->id }}">{{ $item->seat_number }}</p>
                                                            </div>

                                                        </div>
                                                
                                                @endforeach
                                            </div>
                                            <div class="row container " style="max-width: 1000px;">
                                                @foreach ($f2_8 as $item)
                                                
                                                        <div class="form-check col-md-1">
                                                            <div class="form-check d-flex align-items-center">
                                                                <input class="form-check-input item check-box-63 check-box-D" 
                                                                    type="checkbox" name="id_seat[]"
                                                                    value="{{ $item->id }}"
                                                                    id="seat_{{ $item->id }}">
                                                                <p class="form-check-label"
                                                                    for="seat_{{ $item->id }}">{{ $item->seat_number }}</p>
                                                            </div>

                                                        </div>
                                                
                                                @endforeach
                                            </div>
                                            </div>
                                        </div>
                                   
                                    </div>




                                    <button type="submit" class="btn btn-primary mr-2">Thêm mới</button>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
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
        $(document).on("change", ".check-63", function() {
            if(this.checked) {
                // Iterate each checkbox
                $('.check-box-63:checkbox').each(function() {
                    this.checked = true;
                });
            } else {
                $('.check-box-63:checkbox').each(function() {
                    this.checked = false;
                });
            }

        });
</script>