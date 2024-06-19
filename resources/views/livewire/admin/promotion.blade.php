<div class="px-md-5 px-3 py-4">
    <div class="d-flex align-items-center">
        <span class="h2">Enable Promotion</span>
        <label class="switch ms-3">
            <input type="checkbox" wire:change="toggleActive" wire:model.live="isActive">
            <span class="slider round"></span>
        </label>
    </div>
    <div class="my-5">
        <div class="d-flex align-items-center">
            <span class="h2">Promotion Image</span>
            <button class="edit-btn btn ms-3 {{ $edit_image ? 'd-none' : '' }}" wire:click="updateImageFlag(true)">Edit</button>
            <button style="width: 100px" class="btn btn-danger ms-3 {{ !$edit_image ? 'd-none' : '' }}" wire:click="updateImageFlag(false)">Cancel</button>
        </div>
        @if($edit_image)
            <div class="my-3">
                <form wire:submit.prevent="updateImage">
                    <div>
                        <input type="file" wire:model="image_file" accept="image/*">
                    </div>
                    @error('image_file') <span class="text-danger">{{ $message }}</span> @enderror
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                </form>
            </div>
        @endif
        @if($image != 'nothing')
            <img src="{{ asset('storage/public/promotion/'.$image) }}" class="col-6">
        @else
            <span>No Image Uploaded.</span>
        @endif
    </div>
    <div class="my-5">
        <div class="d-flex align-items-center">
            <span class="h2">Promotion Description</span>
            <button class="edit-btn btn ms-3 {{ $edit_desc ? 'd-none' : '' }}" wire:click="updateDescFlag(true)">Edit</button>
            <button style="width: 100px" class="btn btn-danger ms-3 {{ !$edit_desc ? 'd-none' : '' }}" wire:click="updateDescFlag(false)">Cancel</button>
        </div>
        @if($edit_desc)
            <div class="my-3">
                <form wire:submit.prevent="updateDesc">
                    <div>
                        <textarea wire:model="new_desc" class="col-6" style="min-height: 300px;max-height: 300px"></textarea>
                    </div>
                    @error('new_desc') <span class="text-danger">{{ $message }}</span> @enderror
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        @else
            <pre style="white-space: break-spaces;">{{ $description }}</pre>
        @endif
    </div>
</div>
