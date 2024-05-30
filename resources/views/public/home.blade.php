<div class="video-container d-flex justify-content-center">
    @if($background == null)
        <video src="https://video.wixstatic.com/video/479266_314ef4c841a54d7098e2a2d2ca531ab5/1080p/mp4/file.mp4" muted autoplay loop></video>
    @elseif($background['content-type'] == 'image')
        <img src="{{ asset('storage/public/background/'.$background->content) }}" class="col-6">
    @elseif($background['content-type'] == 'video')
        <video src="{{ asset('storage/public/background/'.$background->content) }}" class="col-6" muted autoplay loop></video>
    @endif
    <div class="upper-layer d-flex justify-content-center align-items-center">
        <div class="shape d-flex justify-content-center align-items-center">
            <div class="text-center">
                <div>
                    <span class="shape-text">Spark Club</span>
                </div>
                <div class="mt-3 mt-lg-4">
                    <span class="shape-text">Enjoy</span>
                </div>
                <hr class="py-1 py-sm-2 py-xl-3">
                <div>
                    <a href="#events" class="btn btn-outline-light book-button">Book a Table</a>
                </div>
                <div class="mt-3 d-small-none">
                    <a href="{{ route('user.menu') }}" class="btn btn-outline-light book-button">View Menu</a>
                </div>
            </div>
        </div>
    </div>
</div>
