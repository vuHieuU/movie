<div class="row">
    @php
         $ticket_id = \App\Models\ticket::where('code', $ticket->code)->value('id');
    @endphp
    
<p>Bạn đã đặt vé xem phim {{ $ticket->film_name }} thành công</p>
    
<p>Mã hóa đơn của bạn : {{ $ticket->code }}</p>
<p>Bạn có thể xem chi tiết hóa đơn của bạn bằng cách nhấp vào liên kết sau:</p>
<a href="{{ route('detail.show', $ticket_id) }}">Xem chi tiết</a>
</div>