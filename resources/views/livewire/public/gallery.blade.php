<div>
    <div class="gallery">
        <div class="mt-5">
            <span class="post-no-bill header ms-4">Gallery</span>
        </div>
        <div class="image-row">
            <div class="image-row">
                @foreach ($galleries->chunk($chunk) as $chunk)
                    <div class="image-column">
                        @foreach ($chunk as $gallery)
                            <div class="item"><img src="{{ asset('storage/public/gallery/' . $gallery->content) }}"></div>
                        @endforeach
                    </div>
                @endforeach
                @if($galleries->count() == 0)
                    <div class="col-12 text-center h2">
                        <span class="post-no-bill">No images found.</span>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
