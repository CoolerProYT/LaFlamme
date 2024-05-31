<div class="d-flex justify-content-center align-items-center" style="height: 100vh">
    <div class="bg-dark p-3 col-lg-3 col-md-4 col-10">
        <div class="image-box">
            <img src="{{ asset('storage/public/event/'.$booking->event->image) }}" alt="">
        </div>
        <div class="mt-3">
            <div><b>Booking ID: {{ $booking->booking_id }}</b></div>
            <div><span class="h5 truncate"><b>Event Name: </b>{{ $booking->event->name }}</span></div>
            <div><b>Event Date: </b>{{ $booking->event->date }}</div>
            <div><b>Event Time: </b>{{ $booking->event->start }} - {{ $booking->event->end }}</div>
            <div><b>Table: </b>{{ $booking->table }}</div>
            <div><b>Name: </b>{{ $booking->name }}</div>
            <div><b>Pax: </b>{{ $booking->pax }}</div>
            <div><b>Total Payment: </b>RM{{ $booking->total_payment }}</div>
        </div>
        <div class="my-3">
            <button class="btn btn-success col-12" wire:click="completeBooking">Complete</button>
        </div>
    </div>
</div>
