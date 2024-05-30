<div>
    <div class="px-md-5 px-3 py-4">
        <div class="d-none d-md-block" wire:ignore>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="{{ route('admin.menu') }}" class="nav-link pointer {{ \Illuminate\Support\Facades\Route::currentRouteName() == 'admin.menu' ? 'bg-light text-dark' : 'text-light' }}">All Menu</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.menu.add') }}" class="nav-link pointer {{ \Illuminate\Support\Facades\Route::currentRouteName() == 'admin.menu.add' ? 'bg-light text-dark' : 'text-light' }}">Add Menu</a>
                </li>
            </ul>
        </div>

        <div class="table-responsive my-5">
            <table class="table table-dark">
                <thead>
                <tr>
                    <th class="col-2 text-center">Image</th>
                    <th class="col-5">Name</th>
                    <th class="col-3 text-center">Price</th>
                    <th class="col-2 text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($menus as $menu)
                    <tr>
                        <td class="d-flex justify-content-center">
                            <div class="menu-list-image-label">
                                <img src="{{ asset('storage/public/menu/'.$menu->image) }}">
                            </div>
                        </td>
                        <td style="vertical-align: middle">
                            {{ $menu->name }}
                        </td>
                        <td class="text-center" style="vertical-align: middle">RM{{ number_format($menu->price,2) }}</td>
                        <td class="text-center" style="vertical-align: middle">
                            <a href="{{ route('admin.menu.edit', $menu->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm" wire:click="deleteMenu({{ $menu->id }})">Delete</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
