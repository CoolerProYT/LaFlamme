<div>
    <div class="px-md-5 px-3 py-4">
        <div class="text-light my-3">
            <form wire:submit.prevent="updateEvent">
                <div class="my-3">
                    <label class="h4">Image:</label>
                    <input type="file" class="d-none" accept="image/*" id="image" wire:model="newImage">
                    <div>
                        <label for="image" class="pointer event-image-label border image-label-hover">
                            @if($newImage)
                                <img src="{{ $newImage->temporaryUrl() }}" alt="image">
                            @else
                                <img src="{{ asset('storage/public/event/' . $image) }}">
                            @endif
                        </label>
                    </div>
                    @error('newImage') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="my-3 col-6">
                    <label for="name" class="h4">Event Name:</label>
                    <input type="text" class="form-control" id="name" wire:model="name">
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="my-3 col-6">
                    <label for="description" class="h4">Event Description:</label>
                    <textarea class="form-control" id="description" wire:model="description" style="min-height: 300px;max-height: 300px"></textarea>
                    @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="my-3 col-6">
                    <label for="date" class="h4">Event Date:</label>
                    <input type="date" class="form-control" id="date" wire:model="date" min="{{ \Carbon\Carbon::tomorrow()->format('Y-m-d') }}">
                    @error('date') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="my-3 col-6 d-flex">
                    <div class="col-6 pe-3">
                        <label for="start" class="h4">Start Time:</label>
                        <input type="time" class="form-control" id="start" wire:model="start">
                        @error('start') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-6 ps-3">
                        <label for="end" class="h4">End Time:</label>
                        <input type="time" class="form-control" id="end" wire:model="end">
                        @error('end') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="my-3 col-6 d-flex">
                    <div class="col-6 pe-3">
                        <label for="s_price" class="h4">S Price:</label>
                        <div class="d-flex align-items-center bg-light rounded">
                            <span class="h5 m-0 px-2 text-dark">RM</span>
                            <input type="number" class="form-control" id="s_price" wire:model="s_price" step="0.01">
                        </div>
                        @error('s_price') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-6 ps-3">
                        <label for="sdj_price" class="h4">SDJ Price:</label>
                        <div class="d-flex align-items-center bg-light rounded">
                            <span class="h5 m-0 px-2 text-dark">RM</span>
                            <input type="number" class="form-control" id="sdj_price" wire:model="sdj_price" step="0.01">
                        </div>
                        @error('sdj_price') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="my-3 col-6 d-flex">
                    <div class="col-6 pe-3">
                        <label for="vip_price" class="h4">VIP Price:</label>
                        <div class="d-flex align-items-center bg-light rounded">
                            <span class="h5 m-0 px-2 text-dark">RM</span>
                            <input type="number" class="form-control" id="vip_price" wire:model="vip_price" step="0.01">
                        </div>
                        @error('vip_price') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-6 ps-3">
                        <label for="vvip_price" class="h4">VVIP Price:</label>
                        <div class="d-flex align-items-center bg-light rounded">
                            <span class="h5 m-0 px-2 text-dark">RM</span>
                            <input type="number" class="form-control" id="vvip_price" wire:model="vvip_price" step="0.01">
                        </div>
                        @error('vvip_price') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="my-3 col-6 d-flex">
                    <div class="col-6 pe-3">
                        <label for="svip_price" class="h4">SVIP Price:</label>
                        <div class="d-flex align-items-center bg-light rounded">
                            <span class="h5 m-0 px-2 text-dark">RM</span>
                            <input type="number" class="form-control" id="svip_price" wire:model="svip_price" step="0.01">
                        </div>
                        @error('svip_price') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-6 ps-3">
                        <label for="svvip_price" class="h4">SVVIP Price:</label>
                        <div class="d-flex align-items-center bg-light rounded">
                            <span class="h5 m-0 px-2 text-dark">RM</span>
                            <input type="number" class="form-control" id="svvip_price" wire:model="svvip_price" step="0.01">
                        </div>
                        @error('svvip_price') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="my-3 col-6">
                    <button type="submit" class="btn btn-primary col-12">Update Event</button>
                </div>
            </form>
        </div>
    </div>
</div>
