<div>
    <div class="px-md-5 px-3 py-4">
        <div class="text-light my-3">
            <form wire:submit.prevent="updateMenu">
                <div class="my-3">
                    <label class="h4">Image:</label>
                    <input type="file" class="d-none" accept="image/*" id="image" wire:model="newImage">
                    <div>
                        <label for="image" class="pointer menu-image-label border {{ $newImage ? 'image-label-hover' : '' }}">
                            @if($newImage)
                                <img src="{{ $newImage->temporaryUrl() }}" alt="image">
                            @else
                                <img src="{{ asset('storage/public/menu/' . $image) }}" alt="image">
                            @endif
                        </label>
                    </div>
                    @error('newImage') <span class="text-danger">{{ $message }}</span> @enderror
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
                    <button type="submit" class="btn btn-primary col-12">Update Menu</button>
                </div>
            </form>
        </div><div>

        </div>
    </div>
</div>
