<div class="px-2">
    <div class="container my-4">
        <div class="d-md-flex justify-content-between">
            <div class="dashboard-card p-3 rounded">
                <div>
                    <b class="h3">Total Booking</b>
                </div>
                <div>
                    <span class="h4">{{ $totalBooking }}</span>
                </div>
            </div>
            <div class="dashboard-card p-3 rounded">
                <div>
                    <b class="h3">Total Pending</b>
                </div>
                <div>
                    <span class="h4">{{ $totalPending }}</span>
                </div>
            </div>
            <div class="dashboard-card p-3 rounded">
                <div>
                    <b class="h3">Total Completed</b>
                </div>
                <div>
                    <span class="h4">{{ $totalCompleted }}</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5 bg-dark">
        <div class="py-2 d-flex justify-content-between">
            <span class="h3">10 Latest Booking</span>
            <a href="" class="text-primary" style="text-decoration: none">View All</a>
        </div>
        <div class="table-responsive">
            <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">User</th>
                    <th scope="col">Event</th>
                    <th scope="col">Date</th>
                    <th scope="col">Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($bookings as $booking)
                    <tr>
                        <th scope="row">{{ $booking->booking_id }}</th>
                        <td>{{ $booking->user->name }}</td>
                        <td>{{ $booking->event->name }}</td>
                        <td>{{ $booking->event->date }}</td>
                        <td>
                            @if ($booking->status == 'pending')
                                <span class="badge bg-warning text-dark">{{ $booking->status }}</span>
                            @else
                                <span class="badge bg-success">{{ $booking->status }}</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
