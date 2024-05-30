<div class="container my-5">
    <div class="col-12 d-flex flex-wrap">
        @foreach($menus as $menu)
            <div class="menu-card border rounded p-2">
                <div class="menu-card-image-box">
                    <img src="{{ asset('storage/public/menu/'.$menu->image) }}">
                </div>
                <div class="my-2">
                    <span class="h4 truncate-2">{{ $menu->name }}</span>
                </div>
                <div>
                    <span class="h5">RM {{ number_format($menu->price, 2) }}</span>
                </div>
            </div>
        @endforeach
    </div>
</div>
