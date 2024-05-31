<div class="container my-5">
    <div>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link pointer {{ $flag == 'pending' ? 'bg-light text-dark' : 'text-light' }}" wire:click="updateFlag('pending')">Pending</a>
            </li>
            <li class="nav-item">
                <a class="nav-link pointer {{ $flag == 'completed' ? 'bg-light text-dark' : 'text-light' }}" wire:click="updateFlag('completed')">Completed</a>
            </li>
        </ul>
    </div>
    <div class="my-5">
        <div class="table-responsive">
            <table class="table table-dark">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Event</th>
                    <th>Name</th>
                    <th>Pax</th>
                    <th>Table</th>
                    <th style="white-space: nowrap">Payment (RM)</th>
                    @if($flag == 'pending')
                        <th>Action</th>
                    @endif
                </tr>
                </thead>
                <tbody>
                @foreach($bookings as $booking)
                    <tr>
                        <td>{{ $booking->id }}</td>
                        <td style="white-space: nowrap">{{ $booking->event->name }}</td>
                        <td style="white-space: nowrap">{{ $booking->name }}</td>
                        <td>{{ $booking->pax }}</td>
                        <td>{{ $booking->table }}</td>
                        <td>{{ $booking->total_payment }}</td>
                        @if($flag == 'pending')
                            <th>
                                <button class="btn btn-success" wire:click="completeBooking({{ $booking->id }})">Complete</button>
                            </th>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
