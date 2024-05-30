<div>
    <div class="px-md-5 px-3 py-4">
        <div class="d-none d-md-block" wire:ignore>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="{{ route('admin.event') }}" class="nav-link pointer {{ \Illuminate\Support\Facades\Route::currentRouteName() == 'admin.event' ? 'bg-light text-dark' : 'text-light' }}">All Event</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.event.add') }}" class="nav-link pointer {{ \Illuminate\Support\Facades\Route::currentRouteName() == 'admin.event.add' ? 'bg-light text-dark' : 'text-light' }}">Add Event</a>
                </li>
            </ul>
        </div>

        <div class="d-flex flex-wrap">
            @foreach($events as $event)
                <div class="event-card border d-flex">
                    <div class="event-image-box">
                        <img src="{{ asset('storage/public/event/' . $event->image) }}">
                    </div>
                    <div class="p-2 d-flex flex-column justify-content-between event-info">
                        <div>
                            <div>
                                <span class="h5 m-0">{{ $event->name }}</span>
                            </div>
                            <div>
                                <span class="truncate">Description: {{ $event->description }}</span>
                            </div>
                            <div>
                                <span>Date: {{ $event->date }}</span>
                            </div>
                            <div>
                                <span>Time: {{ $event->start }} - {{ $event->end }}</span>
                            </div>
                        </div>
                        <div>
                            <a href="{{ route('admin.event.edit', $event->id) }}" class="btn btn-primary col-3">Edit</a>
                            <button wire:click="deleteEvent({{ $event->id }})" class="btn btn-danger ms-2 col-3">Delete</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
