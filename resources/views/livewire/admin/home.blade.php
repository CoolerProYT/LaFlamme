<div class="px-md-5 px-3 py-4">
    <div>
        <div class="d-flex align-items-center">
            <span class="h2">Background Image/Video</span>
            <button class="edit-btn btn ms-3 {{ $edit_background ? 'd-none' : '' }}" wire:click="updateBackgroundFlag(true)">Edit</button>
            <button style="width: 100px" class="btn btn-danger ms-3 {{ !$edit_background ? 'd-none' : '' }}" wire:click="updateBackgroundFlag(false)">Cancel</button>
        </div>
        @if($edit_background)
            <div class="my-3">
                <form wire:submit.prevent="uploadBackground">
                    <div>
                        <input type="file" wire:model="background_file">
                    </div>
                    @error('background_file') <span class="text-danger">{{ $message }}</span> @enderror
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                </form>
            </div>
        @endif
        <div class="my-4">
            @if($background == null)
                <span>No image/video uploaded.</span>
            @elseif($background['content-type'] == 'image')
                <img src="{{ asset('storage/public/background/'.$background->content) }}" class="col-6">
            @elseif($background['content-type'] == 'video')
                <video src="{{ asset('storage/public/background/'.$background->content) }}" class="col-6" controls></video>
            @endif
        </div>
    </div>

    <div class="my-5">
        <div class="d-flex align-items-center">
            <span class="h2">About Us</span>
            <button class="edit-btn btn ms-3 {{ $edit_about ? 'd-none' : '' }}" wire:click="updateAboutFlag(true)">Edit</button>
            <button style="width: 100px" class="btn btn-danger ms-3 {{ !$edit_about ? 'd-none' : '' }}" wire:click="updateAboutFlag(false)">Cancel</button>
        </div>
        @if($edit_about)
            <div class="my-3">
                <form wire:submit.prevent="updateAbout">
                    <div>
                        <textarea wire:model="about_content" class="col-6" style="min-height: 300px;max-height: 300px"></textarea>
                    </div>
                    @error('about_content') <span class="text-danger">{{ $about_content }}</span> @enderror
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                </form>
            </div>
        @endif
        <div class="my-4 col-lg-6 col-12">
            @if($about == null)
                <span class="{{ $edit_about ? 'd-none' : '' }}">No content added.</span>
            @else
                <pre style="white-space: break-spaces;" class="{{ $edit_about ? 'd-none' : '' }}">{{ $about->content }}</pre>
            @endif
        </div>
    </div>

    <div class="my-5">
        <div class="d-flex align-items-center">
            <span class="h2">Image Gallery</span>
            <button class="edit-btn btn ms-3 {{ $add_gallery ? 'd-none' : '' }}" wire:click="updateGalleryFlag(true)">Add</button>
            <button style="width: 100px" class="btn btn-danger ms-3 {{ !$add_gallery ? 'd-none' : '' }}" wire:click="updateGalleryFlag(false)">Cancel</button>
        </div>
        @if($add_gallery)
            <div class="my-3">
                <form wire:submit.prevent="uploadGallery">
                    <div>
                        <input type="file" wire:model="gallery_file">
                    </div>
                    @error('gallery_file') <span class="text-danger">{{ $message }}</span> @enderror
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                </form>
            </div>
        @endif
        <div class="my-3 d-flex flex-wrap">
            @foreach($galleries as $gallery)
                <div class="gallery-card border border-light">
                    <div class="gallery-image border-bottom">
                        <img src="{{ asset('storage/public/gallery/'.$gallery->content) }}">
                    </div>
                    <div class="col-12 text-center py-3">
                        <button class="btn btn-danger" wire:click="deleteGallery({{ $gallery->id }})">Delete</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{--<div class="my-3">
        <div class="d-flex align-items-center">
            <span class="h2">Floor Plan</span>
            <button class="edit-btn btn ms-3 {{ $change ? 'd-none' : '' }}" wire:click="updateFloorFlag(true)">Change</button>
            <button style="width: 100px" class="btn btn-danger ms-3 {{ !$change ? 'd-none' : '' }}" wire:click="updateFloorFlag(false)">Cancel</button>
        </div>
        @if($change)
            <div class="my-3">
                <form wire:submit.prevent="changeFloor">
                    <div>
                        <input type="file" wire:model="floor_plan_file">
                    </div>
                    @error('floor_plan_file') <span class="text-danger">{{ $message }}</span> @enderror
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        @endif
        <div class="my-4">
            @if($floor_plan == null)
                <span>No floor plan uploaded.</span>
            @else
                <img src="{{ asset('storage/public/floor/'.$floor_plan->content) }}" class="col-6">
            @endif
        </div>
    </div>--}}
</div>
