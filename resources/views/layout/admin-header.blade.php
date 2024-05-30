<div class="sticky-top col-12 px-4 py-2 d-flex justify-content-between border-bottom border-dark align-items-center" style="background-color: #030303">
    <div>
        <span class="h1">
            @switch(\Illuminate\Support\Facades\Route::currentRouteName())
                @case('admin.dashboard')
                    Dashboard
                    @break
                @case('admin.home')
                    Home Page Management
                    @break
                @case('admin.event')
                @case('admin.event.add')
                @case('admin.event.edit')
                    Event Management
                    @break
                @case('admin.booking')
                    Booking Management
                    @break
                @case('admin.menu')
                @case('admin.menu.add')
                @case('admin.menu.edit')
                    Menu Management
                    @break
            @endswitch
        </span>
    </div>
    <div class="dropdown">
        <button type="button" class="btn dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
            <div>
                <img class="rounded-circle" src="{{ asset('img/defaultProfile.jpeg') }}" style="width: 30px">
                <span class="ms-1 text-light">{{ \Illuminate\Support\Facades\Auth::guard('admin')->name }}</span>
            </div>
        </button>
        <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="{{ route('admin.logout') }}">Logout</a></li>
        </ul>
    </div>
</div>
