<div>
    @if($image != '')
        <div class="pop-up d-flex justify-content-center align-items-center my-4" style="background-color: rgba(31,31,31,0.6)">
            <div class="col-8 container d-flex justify-content-center align-items-center pop-up-image">
                <img class="pop-img" src="{{ asset('storage/public/gallery/' . $image) }}">
            </div>
        </div>
    @endif
    <div class="gallery">
        <div class="mt-5">
            <span class="post-no-bill header ms-4">Gallery</span>
        </div>
        <div class="d-flex flex-wrap justify-content-evenly">
            @foreach ($galleries as $gallery)
                <div class="gallery-column d-flex" wire:click="changeImage('{{ $gallery->content }}')">
                    <div class="gallery-image">
                        <img src="{{ asset('storage/public/gallery/' . $gallery->content) }}">
                    </div>
                </div>
            @endforeach
            @if($galleries->count() == 0)
                <div class="col-12 text-center h2">
                    <span class="post-no-bill">No images found.</span>
                </div>
            @endif
        </div>
    </div>
    <script>
        $(window).mousedown(function (e) {
            if(e.target.classList[0] !== 'pop-img') {
                @this.call('changeImage', '')
            }
        });
    </script>
</div>
