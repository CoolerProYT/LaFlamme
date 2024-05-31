<div class="my-5 container">
    <a class="pointer h5" href="javascript:history.back()" style="text-decoration: none">
        <img style="height: 30px" src="{{ asset('icon/left-arrow.svg') }}">
        <span>back</span>
    </a>
    <div class="d-flex">
        <div class="event-book-image-box">
            <img src="{{ asset('storage/public/event/'.$event->image) }}">
        </div>
        <div class="event-book-info ps-3 d-flex flex-column justify-content-between">
            <div>
                <div>
                    <span class="h1">{{ $event->name }}</span>
                </div>
                <div class="mt-3">
                    <div class="my-2">
                        <span class="h4"><b>Date: </b>{{ $event->date }}</span>
                    </div>
                    <div class="my-2">
                        <span class="h4"><b>Time: </b>{{ $event->start }} - {{ $event->end }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <div>
            <span class="h1">Choose Your Table</span>
        </div>
        <div class="d-lg-flex">
            <div>
                <div class="mt-3">
                    <span class="text-danger">Payment will be 50% of the price as deposit</span>
                    <table class="table table-dark bordered">
                        <thead>
                        <tr>
                            <th>Tier</th>
                            <th>Price (RM)</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>S1 - S5 (Standing)</td>
                            <td>{{ $event->s_price }}</td>
                        </tr>
                        <tr>
                            <td>SDJ1 - SDJ8 (Sofa)</td>
                            <td>{{ $event->sdj_price }}</td>
                        </tr>
                        <tr>
                            <td>VIP1 - VIP17 (Sofa)</td>
                            <td>{{ $event->vip_price }}</td>
                        </tr>
                        <tr>
                            <td>VVIP1 - VVIP7 (Sofa)</td>
                            <td>{{ $event->vvip_price }}</td>
                        </tr>
                        <tr>
                            <td>SVIP1 - SVIP9 (Sofa)</td>
                            <td>{{ $event->svip_price }}</td>
                        </tr>
                        <tr>
                            <td>SVVIP1 - SVVIP2 (Sofa)</td>
                            <td>{{ $event->svvip_price }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="ms-md-3">
                <div class="d-flex justify-content-center">
                    <div class="d-flex align-items-center">
                        <div class="display bg-secondary"></div>
                        <span class="ms-2">Available</span>
                    </div>
                    <div class="d-flex align-items-center mx-md-5 mx-2">
                        <div class="display bg-success"></div>
                        <span class="ms-2">Selected</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="display bg-danger"></div>
                        <span class="ms-2">Occupied</span>
                    </div>
                </div>
                <div class="table-responsive mt-3 d-flex justify-content-center">
                    <table class="table-bordered text-center select-table">
                        <tbody>
                        <tr>
                            <td></td>
                            <td class="@if(!in_array('SDJ8',$bookedSeats)) @if($sdj8) bg-success @else bg-secondary @endif @else bg-danger @endif">
                                <input type="checkbox" wire:model.live="sdj8" value="sdj8" id="sdj8" {{ in_array('SDJ8',$bookedSeats) ? 'disabled' : '' }}>
                                <label for="sdj8">SDJ8</label>
                            </td>
                            <td class="@if(!in_array('SDJ7',$bookedSeats)) @if($sdj7) bg-success @else bg-secondary @endif @else bg-danger @endif">
                                <input type="checkbox" wire:model.live="sdj7" value="sdj7" id="sdj7" {{ in_array('SDJ7',$bookedSeats) ? 'disabled' : '' }}>
                                <label for="sdj7">SDJ7</label>
                            </td>
                            <td class="@if(!in_array('SDJ6',$bookedSeats)) @if($sdj6) bg-success @else bg-secondary @endif @else bg-danger @endif">
                                <input type="checkbox" wire:model.live="sdj6" value="sdj6" id="sdj6" {{ in_array('SDJ6',$bookedSeats) ? 'disabled' : '' }}>
                                <label for="sdj6">SDJ6</label>
                            </td>
                            <td class="@if(!in_array('SDJ5',$bookedSeats)) @if($sdj5) bg-success @else bg-secondary @endif @else bg-danger @endif">
                                <input type="checkbox" wire:model.live="sdj5" value="sdj5" id="sdj5" {{ in_array('SDJ5',$bookedSeats) ? 'disabled' : '' }}>
                                <label for="sdj5">SDJ5</label>
                            </td>
                            <td class="@if(!in_array('SDJ3',$bookedSeats)) @if($sdj3) bg-success @else bg-secondary @endif @else bg-danger @endif">
                                <input type="checkbox" wire:model.live="sdj3" value="sdj3" id="sdj3" {{ in_array('SDJ3',$bookedSeats) ? 'disabled' : '' }}>
                                <label for="sdj3">SDJ3</label>
                            </td>
                            <td class="@if(!in_array('SDJ2',$bookedSeats)) @if($sdj2) bg-success @else bg-secondary @endif @else bg-danger @endif">
                                <input type="checkbox" wire:model.live="sdj2" value="sdj2" id="sdj2" {{ in_array('SDJ2',$bookedSeats) ? 'disabled' : '' }}>
                                <label for="sdj2">SDJ2</label>
                            </td>
                            <td class="@if(!in_array('SDJ1',$bookedSeats)) @if($sdj1) bg-success @else bg-secondary @endif @else bg-danger @endif">
                                <input type="checkbox" wire:model.live="sdj1" value="sdj1" id="sdj1" {{ in_array('SDJ1',$bookedSeats) ? 'disabled' : '' }}>
                                <label for="sdj1">SDJ1</label>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td colspan="3">
                                <img src="{{ asset('img/dj.png') }}" class="table-img">
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="@if(!in_array('VIP17',$bookedSeats)) @if($vip17) bg-success @else bg-secondary @endif @else bg-danger @endif">
                                <input type="checkbox" wire:model.live="vip17" value="vip17" id="vip17" {{ in_array('VIP17',$bookedSeats) ? 'disabled' : '' }}>
                                <label for="vip17">VIP17</label>
                            </td>
                            <td></td>
                            <td class="@if(!in_array('VVIP7',$bookedSeats)) @if($vvip7) bg-success @else bg-secondary @endif @else bg-danger @endif">
                                <input type="checkbox" wire:model.live="vvip7" value="vvip7" id="vvip7" {{ in_array('VVIP7',$bookedSeats) ? 'disabled' : '' }}>
                                <label for="vvip7">VVIP7</label>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="@if(!in_array('VVIP1',$bookedSeats)) @if($vvip1) bg-success @else bg-secondary @endif @else bg-danger @endif">
                                <input type="checkbox" wire:model.live="vvip1" value="vvip1" id="vvip1" {{ in_array('VVIP1',$bookedSeats) ? 'disabled' : '' }}>
                                <label for="vvip1">VVIP1</label>
                            </td>
                            <td></td>
                            <td class="@if(!in_array('VIP1',$bookedSeats)) @if($vip1) bg-success @else bg-secondary @endif @else bg-danger @endif">
                                <input type="checkbox" wire:model.live="vip1" value="vip1" id="vip1" {{ in_array('VIP1',$bookedSeats) ? 'disabled' : '' }}>
                                <label for="vip1">VIP1</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="@if(!in_array('VIP16',$bookedSeats)) @if($vip16) bg-success @else bg-secondary @endif @else bg-danger @endif">
                                <input type="checkbox" wire:model.live="vip16" value="vip16" id="vip16" {{ in_array('VIP16',$bookedSeats) ? 'disabled' : '' }}>
                                <label for="vip16">VIP16</label>
                            </td>
                            <td></td>
                            <td class="@if(!in_array('VVIP6',$bookedSeats)) @if($vvip6) bg-success @else bg-secondary @endif @else bg-danger @endif">
                                <input type="checkbox" wire:model.live="vvip6" value="vvip6" id="vvip6" {{ in_array('VVIP6',$bookedSeats) ? 'disabled' : '' }}>
                                <label for="vvip6">VVIP6</label>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="@if(!in_array('VVIP2',$bookedSeats)) @if($vvip2) bg-success @else bg-secondary @endif @else bg-danger @endif">
                                <input type="checkbox" wire:model.live="vvip2" value="vvip2" id="vvip2" {{ in_array('VVIP2',$bookedSeats) ? 'disabled' : '' }}>
                                <label for="vvip2">VVIP2</label>
                            </td>
                            <td></td>
                            <td class="@if(!in_array('VIP2',$bookedSeats)) @if($vip2) bg-success @else bg-secondary @endif @else bg-danger @endif">
                                <input type="checkbox" wire:model.live="vip2" value="vip2" id="vip2" {{ in_array('VIP2',$bookedSeats) ? 'disabled' : '' }}>
                                <label for="vip2">VIP2</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="@if(!in_array('VIP15',$bookedSeats)) @if($vip15) bg-success @else bg-secondary @endif @else bg-danger @endif">
                                <input type="checkbox" wire:model.live="vip15" value="vip15" id="vip15" {{ in_array('VIP15',$bookedSeats) ? 'disabled' : '' }}>
                                <label for="vip15">VIP15</label>
                            </td>
                            <td></td>
                            <td class="@if(!in_array('VVIP5',$bookedSeats)) @if($vvip5) bg-success @else bg-secondary @endif @else bg-danger @endif">
                                <input type="checkbox" wire:model.live="vvip5" value="vvip5" id="vvip5" {{ in_array('VVIP5',$bookedSeats) ? 'disabled' : '' }}>
                                <label for="vvip5">VVIP5</label>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="@if(!in_array('VVIP3',$bookedSeats)) @if($vvip3) bg-success @else bg-secondary @endif @else bg-danger @endif">
                                <input type="checkbox" wire:model.live="vvip3" value="vvip3" id="vvip3" {{ in_array('VVIP3',$bookedSeats) ? 'disabled' : '' }}>
                                <label for="vvip3">VVIP3</label>
                            </td>
                            <td></td>
                            <td class="@if(!in_array('VIP3',$bookedSeats)) @if($vip3) bg-success @else bg-secondary @endif @else bg-danger @endif">
                                <input type="checkbox" wire:model.live="vip3" value="vip3" id="vip3" {{ in_array('VIP3',$bookedSeats) ? 'disabled' : '' }}>
                                <label for="vip3">VIP3</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="@if(!in_array('VIP13',$bookedSeats)) @if($vip13) bg-success @else bg-secondary @endif @else bg-danger @endif">
                                <input type="checkbox" wire:model.live="vip13" value="vip13" id="vip13"> {{ in_array('VIP13',$bookedSeats) ? 'disabled' : '' }}
                                <label for="vip13">VIP13</label>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="@if(!in_array('VIP5',$bookedSeats)) @if($vip5) bg-success @else bg-secondary @endif @else bg-danger @endif">
                                <input type="checkbox" wire:model.live="vip5" value="vip5" id="vip5" {{ in_array('VIP5',$bookedSeats) ? 'disabled' : '' }}>
                                <label for="vip5">VIP5</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="@if(!in_array('VIP12',$bookedSeats)) @if($vip12) bg-success @else bg-secondary @endif @else bg-danger @endif">
                                <input type="checkbox" wire:model.live="vip12" value="vip12" id="vip12" {{ in_array('VIP12',$bookedSeats) ? 'disabled' : '' }}>
                                <label for="vip12">VIP12</label>
                            </td>
                            <td></td>
                            <td class="@if(!in_array('SVIP7',$bookedSeats)) @if($svip7) bg-success @else bg-secondary @endif @else bg-danger @endif">
                                <input type="checkbox" wire:model.live="svip7" value="svip7" id="svip7" {{ in_array('SVIP7',$bookedSeats) ? 'disabled' : '' }}>
                                <label for="svip7">SVIP7</label>
                            </td>
                            <td></td>
                            <td class="@if(!in_array('SVVIP1',$bookedSeats)) @if($svvip1) bg-success @else bg-secondary @endif @else bg-danger @endif">
                                <input type="checkbox" wire:model.live="svvip1" value="svvip1" id="svvip1" {{ in_array('SVVIP1',$bookedSeats) ? 'disabled' : '' }}>
                                <label for="svvip1">SVVIP1</label>
                            </td>
                            <td></td>
                            <td class="@if(!in_array('SVIP1',$bookedSeats)) @if($svip1) bg-success @else bg-secondary @endif @else bg-danger @endif">
                                <input type="checkbox" wire:model.live="svip1" value="svip1" id="svip1" {{ in_array('SVIP1',$bookedSeats) ? 'disabled' : '' }}>
                                <label for="svip1">SVIP1</label>
                            </td>
                            <td></td>
                            <td class="@if(!in_array('VIP6',$bookedSeats)) @if($vip6) bg-success @else bg-secondary @endif @else bg-danger @endif">
                                <input type="checkbox" wire:model.live="vip6" value="vip6" id="vip6" {{ in_array('VIP6',$bookedSeats) ? 'disabled' : '' }}>
                                <label for="vip6">VIP6</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="@if(!in_array('VIP10',$bookedSeats)) @if($vip10) bg-success @else bg-secondary @endif @else bg-danger @endif">
                                <input type="checkbox" wire:model.live="vip10" value="vip10" id="vip10" {{ in_array('VIP10',$bookedSeats) ? 'disabled' : '' }}>
                                <label for="vip10">VIP10</label>
                            </td>
                            <td></td>
                            <td class="@if(!in_array('SVIP6',$bookedSeats)) @if($svip6) bg-success @else bg-secondary @endif @else bg-danger @endif">
                                <input type="checkbox" wire:model.live="svip6" value="svip6" id="svip6" {{ in_array('SVIP6',$bookedSeats) ? 'disabled' : '' }}>
                                <label for="svip6">SVIP6</label>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="@if(!in_array('SVIP2',$bookedSeats)) @if($svip2) bg-success @else bg-secondary @endif @else bg-danger @endif">
                                <input type="checkbox" wire:model.live="svip2" value="svip2" id="svip2" {{ in_array('SVIP2',$bookedSeats) ? 'disabled' : '' }}>
                                <label for="svip2">SVIP2</label>
                            </td>
                            <td></td>
                            <td class="@if(!in_array('VIP7',$bookedSeats)) @if($vip7) bg-success @else bg-secondary @endif @else bg-danger @endif">
                                <input type="checkbox" wire:model.live="vip7" value="vip7" id="vip7" {{ in_array('VIP7',$bookedSeats) ? 'disabled' : '' }}>
                                <label for="vip7">VIP7</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="@if(!in_array('VIP9',$bookedSeats)) @if($vip9) bg-success @else bg-secondary @endif @else bg-danger @endif">
                                <input type="checkbox" wire:model.live="vip9" value="vip9" id="vip9" {{ in_array('VIP9',$bookedSeats) ? 'disabled' : '' }}>
                                <label for="vip9">VIP9</label>
                            </td>
                            <td></td>
                            <td class="@if(!in_array('SVIP5',$bookedSeats)) @if($svip5) bg-success @else bg-secondary @endif @else bg-danger @endif">
                                <input type="checkbox" wire:model.live="svip5" value="svip5" id="svip5" {{ in_array('SVIP5',$bookedSeats) ? 'disabled' : '' }}>
                                <label for="svip5">SVIP5</label>
                            </td>
                            <td></td>
                            <td class="@if(!in_array('SVVIP2',$bookedSeats)) @if($svvip2) bg-success @else bg-secondary @endif @else bg-danger @endif">
                                <input type="checkbox" wire:model.live="svvip2" value="svvip2" id="svvip2" {{ in_array('SVVIP2',$bookedSeats) ? 'disabled' : '' }}>
                                <label for="svvip2">SVVIP2</label>
                            </td>
                            <td></td>
                            <td class="@if(!in_array('SVIP3',$bookedSeats)) @if($svip3) bg-success @else bg-secondary @endif @else bg-danger @endif">
                                <input type="checkbox" wire:model.live="svip3" value="svip3" id="svip3" {{ in_array('SVIP3',$bookedSeats) ? 'disabled' : '' }}>
                                <label for="svip3">SVIP3</label>
                            </td>
                            <td></td>
                            <td class="@if(!in_array('VIP8',$bookedSeats)) @if($vip8) bg-success @else bg-secondary @endif @else bg-danger @endif">
                                <input type="checkbox" wire:model.live="vip8" value="vip8" id="vip8" {{ in_array('VIP8',$bookedSeats) ? 'disabled' : '' }}>
                                <label for="vip8">VIP8</label>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="@if(!in_array('SVIP9',$bookedSeats)) @if($svip9) bg-success @else bg-secondary @endif @else bg-danger @endif">
                                <input type="checkbox" wire:model.live="svip9" value="svip9" id="svip9" {{ in_array('SVIP9',$bookedSeats) ? 'disabled' : '' }}>
                                <label for="svip9">SVIP9</label>
                            </td>
                            <td></td>
                            <td class="@if(!in_array('SVIP8',$bookedSeats)) @if($svip8) bg-success @else bg-secondary @endif @else bg-danger @endif">
                                <input type="checkbox" wire:model.live="svip8" value="svip8" id="svip8" {{ in_array('SVIP8',$bookedSeats) ? 'disabled' : '' }}>
                                <label for="svip8">SVIP8</label>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="@if(!in_array('S5',$bookedSeats)) @if($s5) bg-success @else bg-secondary @endif @else bg-danger @endif">
                                <input type="checkbox" wire:model.live="s5" value="s5" id="s5" {{ in_array('S5',$bookedSeats) ? 'disabled' : '' }}>
                                <label for="s5">S5</label>
                            </td>
                            <td class="@if(!in_array('S3',$bookedSeats)) @if($s3) bg-success @else bg-secondary @endif @else bg-danger @endif">
                                <input type="checkbox" wire:model.live="s3" value="s3" id="s3" {{ in_array('S3',$bookedSeats) ? 'disabled' : '' }}>
                                <label for="s3">S3</label>
                            </td>
                            <td></td>
                            <td class="@if(!in_array('S2',$bookedSeats)) @if($s2) bg-success @else bg-secondary @endif @else bg-danger @endif">
                                <input type="checkbox" wire:model.live="s2" value="s5" id="s2" {{ in_array('S2',$bookedSeats) ? 'disabled' : '' }}>
                                <label for="s2">S2</label>
                            </td>
                            <td class="@if(!in_array('S1',$bookedSeats)) @if($s1) bg-success @else bg-secondary @endif @else bg-danger @endif">
                                <input type="checkbox" wire:model.live="s1" value="s1" id="s1" {{ in_array('S1',$bookedSeats) ? 'disabled' : '' }}>
                                <label for="s1">S1</label>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="{{ asset('img/toilet.png') }}" class="table-img">
                            </td>
                            <td></td>
                            <td></td>
                            <td colspan="3">
                                <img src="{{ asset('img/bar.png') }}" class="table-img">
                            </td>
                            <td></td>
                            <td colspan="2">
                                <img src="{{ asset('img/entrance.png') }}" class="table-img">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                @error('table') <div class="text-center"><span class="text-danger">{{ $message }}</span></div>  @enderror
                <div class="my-4 d-md-flex justify-content-center">
                    <div class="text-center">
                        <div>
                            <label for="name">Name</label>
                        </div>
                        <input id="name" type="text" wire:model.live="name" class="text-center">
                        @error('name') <div><span class="text-danger">{{ $message }}</span></div>  @enderror
                    </div>
                    <div class="ps-md-3 text-center">
                        <div>
                            <label for="pax">Pax</label>
                        </div>
                        <input id="pax" type="number" class="text-center" wire:model.live="pax" min="1">
                        @error('pax') <div><span class="text-danger">{{ $message }}</span></div>  @enderror
                    </div>
                </div>
                <div class="text-center my-4">
                    <button wire:click="checkout" class="booking-button">Checkout</button>
                </div>
            </div>
        </div>
    </div>

    <div class="my-5">
        <div>
            <span class="h1">Floor Plan</span>
        </div>
        <img src="{{ asset('img/reserve.png') }}" class="col-12">
    </div>
    <script src="https://js.pusher.com/8.0.1/pusher.min.js"></script>
    <script>
        var pusher = new Pusher("{{ env("PUSHER_APP_KEY") }}", {
            cluster: "ap1",
        });

        var channel = pusher.subscribe("booking");

        channel.bind("booking-placed", (data) => {
            @this.call('updateTable')
        });
    </script>
</div>
