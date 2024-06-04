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
                        <td class="py-3" style="vertical-align: middle">{{ $booking->id }}</td>
                        <td class="py-3" style="white-space: nowrap;vertical-align: middle">{{ $booking->event->name }}</td>
                        <td class="py-3" style="white-space: nowrap;vertical-align: middle">{{ $booking->name }}</td>
                        <td class="py-3" style="vertical-align: middle">{{ $booking->pax }}</td>
                        <td class="py-3" style="vertical-align: middle">{{ $booking->table }}</td>
                        <td class="py-3" style="vertical-align: middle">{{ $booking->total_payment }}</td>
                        @if($flag == 'pending')
                            <td class="py-3">
                                <button class="btn btn-success" wire:click="completeBooking({{ $booking->id }})">Complete</button>
                            </td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
