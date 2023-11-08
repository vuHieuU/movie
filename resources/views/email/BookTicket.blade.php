<div class="row">
    @php
         $ticket_id = \App\Models\ticket::where('code', $ticket->code)->value('id');
    @endphp
    <div class="col-6">
        <h1>Bạn đã đặt vé</h1>
        <p>Bạn có thể xem thông tin vé của mình tại đây :<a href="{{ route('detail.show', $ticket_id) }}"> {{ $ticket->code }}</a> </p>
        
    </div>
</div>