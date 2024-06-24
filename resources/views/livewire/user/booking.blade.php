<div class="container my-5">
    <a class="pointer h5" href="{{ route('landing') }}" style="text-decoration: none">
        <img style="height: 30px" src="{{ asset('icon/left-arrow.svg') }}">
        <span>back</span>
    </a>
    @if($qrCode != '')
        <div class="pop-up justify-content-center align-items-center d-flex">
            <div class="col-xxl-2 col-10 col-md-6 col-lg-4 container pop-up-content p-3">
                <div class="d-flex justify-content-center bg-white p-4">
                    <img src="{{ $qrCode }}" class="col-12">
                </div>
                <div class="text-dark mt-4">
                    <div><b>Name: </b>{{ $qr_booking->name }}</div>
                    <div><b>Pax: </b>{{ $qr_booking->pax }}</div>
                    <div><b>Table: </b>{{ $qr_booking->table }}</div>
                </div>
                <div class="mt-4 text-center">
                    <button class="btn btn-dark" wire:click="closeQrCode">X</button>
                </div>
            </div>
        </div>
    @endif

    <div class="mt-3">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link pointer {{ $flag == 'pending' ? 'bg-light text-dark' : 'text-light' }}" wire:click="updateFlag('pending')">Unused</a>
            </li>
            <li class="nav-item">
                <a class="nav-link pointer {{ $flag == 'completed' ? 'bg-light text-dark' : 'text-light' }}" wire:click="updateFlag('completed')">Used</a>
            </li>
        </ul>
    </div>

    <div class="d-flex flex-wrap">
        @foreach($bookings as $booking)
            @php
                $event_id = $booking->event_id;
                $event = \App\Models\Event::find($event_id);
            @endphp
            <div class="booking-card d-flex rounded">
                <div class="col-1 booking-card-border"></div>
                <div class="ps-2 d-flex text-dark">
                    <div class="booking-card-image">
                        <img src="{{ asset('storage/public/event/'.$event->image) }}" alt="">
                    </div>
                    <div class="px-2 d-flex flex-column justify-content-between booking-card-content">
                        <div>
                            <div><b>Booking ID: {{ $booking->booking_id }}</b></div>
                            <div><span class="h5 truncate"><b>Event Name: </b>{{ $event->name }}</span></div>
                            <div><b>Event Date: </b>{{ $event->date }}</div>
                            <div><b>Event Time: </b>{{ $event->start }} - {{ $event->end }}</div>
                            <div><b>Name: </b>{{ $booking->name }}</div>
                            <div><b>Pax: </b>{{ $booking->pax }}</div>
                            <div><b>Table: </b>{{ $booking->table }}</div>
                            <div><b>Total Payment: </b>RM{{ $booking->total_payment }}</div>
                        </div>
                        <div class="pb-2 text-end">
                            <button class="btn btn-dark {{ $flag == 'completed' ? 'd-none' : '' }}" wire:click="showQrCode('{{ $booking->id }}')">Show QR Code</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
