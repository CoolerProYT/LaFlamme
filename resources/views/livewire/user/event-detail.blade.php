<div class="my-5 container">
    <a class="pointer h5" href="javascript:history.back()" style="text-decoration: none">
        <img style="height: 30px" src="{{ asset('icon/left-arrow.svg') }}">
        <span>back</span>
    </a>
    <div class="d-flex">
        <div class="event-image-box">
            <img src="{{ asset('storage/public/event/'.$event->image) }}">
        </div>
        <div class="event-info ps-3 d-flex flex-column justify-content-between">
            <div>
                <div>
                    <span class="h1">{{ $event->name }}</span>
                </div>
                <div class="my-2">
                    <pre class="h4" style="white-space: break-spaces;font-family: Arial"><b>Description: </b>{{ $event->description }}</pre>
                </div>
                <div class="mt-5">
                    <div class="my-2">
                        <span class="h4"><b>Date: </b>{{ $event->date }}</span>
                    </div>
                    <div class="my-2">
                        <span class="h4"><b>Time: </b>{{ $event->start }} - {{ $event->end }}</span>
                    </div>
                </div>
                <div class="mt-5 d-1440-block">
                    <span class="text-danger">There is no table with number 4*</span>
                    <table class="table table-dark bordered">
                        <thead>
                        <tr>
                            <th>Tier</th>
                            <th>Price (RM)</th>
                            <th>Tier</th>
                            <th>Price (RM)</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>S1 - S5</td>
                            <td>{{ $event->s_price }}</td>
                            <td>SDJ1 - SDJ8</td>
                            <td>{{ $event->sdj_price }}</td>
                        </tr>
                        <tr>
                            <td>VIP1 - VIP17</td>
                            <td>{{ $event->vip_price }}</td>
                            <td>VVIP1 - VVIP7</td>
                            <td>{{ $event->vvip_price }}</td>
                        </tr>
                        <tr>
                            <td>SVIP1 - SVIP9</td>
                            <td>{{ $event->svip_price }}</td>
                            <td>SVVIP1 - SVVIP2</td>
                            <td>{{ $event->svvip_price }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div>
                <button onclick="location.href='{{ route('event_book',['id' => $event->id]) }}'" class="booking-button">Book Now</button>
            </div>
        </div>
    </div>
    <div class="mt-5 d-1440-none d-none d-md-block">
        <span class="text-danger">There is no table with number 4*</span>
        <table class="table table-dark bordered">
            <thead>
            <tr>
                <th>Tier</th>
                <th>Price (RM)</th>
                <th>Tier</th>
                <th>Price (RM)</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>S1 - S5</td>
                <td>{{ $event->s_price }}</td>
                <td>SDJ1 - SDJ8</td>
                <td>{{ $event->sdj_price }}</td>
            </tr>
            <tr>
                <td>VIP1 - VIP17</td>
                <td>{{ $event->vip_price }}</td>
                <td>VVIP1 - VVIP7</td>
                <td>{{ $event->vvip_price }}</td>
            </tr>
            <tr>
                <td>SVIP1 - SVIP9</td>
                <td>{{ $event->svip_price }}</td>
                <td>SVVIP1 - SVVIP2</td>
                <td>{{ $event->svvip_price }}</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="mt-5 d-md-none">
        <span class="text-danger">There is no table with number 4*</span>
        <table class="table table-dark bordered">
            <thead>
            <tr>
                <th>Tier</th>
                <th>Price (RM)</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>S1 - S5</td>
                <td>{{ $event->s_price }}</td>
            </tr>
            <tr>
                <td>SDJ1 - SDJ8</td>
                <td>{{ $event->sdj_price }}</td>
            </tr>
            <tr>
                <td>VIP1 - VIP17</td>
                <td>{{ $event->vip_price }}</td>
            </tr>
            <tr>
                <td>VVIP1 - VVIP7</td>
                <td>{{ $event->vvip_price }}</td>
            </tr>
            <tr>
                <td>SVIP1 - SVIP9</td>
                <td>{{ $event->svip_price }}</td>
            </tr>
            <tr>
                <td>SVVIP1 - SVVIP2</td>
                <td>{{ $event->svvip_price }}</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="my-5">
        <div>
            <span class="h1">Floor Plan</span>
        </div>
        <img src="{{ asset('img/reserve.png') }}" class="col-12">
    </div>
</div>
