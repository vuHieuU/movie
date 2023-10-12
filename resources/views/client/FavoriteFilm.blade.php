@extends('client.layout.main.main')				
@section('contact')
    <table class="table w-75">
        <tr>
            <th>Tên phim</th>
            <th>Hình ảnh</th>
            <th>Thời lượng phim</th>
            <th>Miêu tả</th>
            <th>Hành Động</th>
        </tr>
        @foreach ($film as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td><img  class=""
                    src="{{ asset('storage/images/'.$item->thump) }}"
                    alt="" /></td>
                <td>{{$item->duration}}</td>
                <td>{{$item->description}}</td>
                <td><a href="/detail_film/{{$item->id}}">Xem chi tiết</a>
                    <a href="/deleteFavoFilm/{{$item->id}}">Xóa</a>
                </td>
            </tr>
    @endforeach
    </table>
@endsection