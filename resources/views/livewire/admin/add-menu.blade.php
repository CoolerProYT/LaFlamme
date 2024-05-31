<div>
    <div class="px-md-5 px-3 py-4">
        <div wire:ignore>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="{{ route('admin.menu') }}" class="nav-link pointer {{ \Illuminate\Support\Facades\Route::currentRouteName() == 'admin.menu' ? 'bg-light text-dark' : 'text-light' }}">All Menu</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.menu.add') }}" class="nav-link pointer {{ \Illuminate\Support\Facades\Route::currentRouteName() == 'admin.menu.add' ? 'bg-light text-dark' : 'text-light' }}">Add Menu</a>
                </li>
            </ul>
        </div>

        <div class="text-light my-3">
            <form wire:submit.prevent="uploadMenu">
                <div class="my-3">
                    <label class="h4">Image:</label>
                    <input type="file" class="d-none" accept="image/*" id="image" wire:model="image">
                    <div>
                        <label for="image" class="pointer menu-image-label border {{ $image ? 'image-label-hover' : '' }}">
                            @if($image)
                                <img src="{{ $image->temporaryUrl() }}" alt="image">
                            @else
                                +
                            @endif
                        </label>
                    </div>
                    @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="my-3 col-lg-6 col-12">
                    <label for="name" class="h4">Name:</label>
                    <input type="text" class="form-control" id="name" wire:model="name">
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="my-3 col-lg-6 col-12">
                    <label for="price" class="h4">Price</label>
                    <input type="text" class="form-control" id="price" wire:model="price">
                    @error('price') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="my-3 col-lg-6 col-12">
                    <button type="submit" class="btn btn-primary col-12">Upload Menu</button>
                </div>
            </form>
        </div><div>

        </div>
    </div>
</div>
