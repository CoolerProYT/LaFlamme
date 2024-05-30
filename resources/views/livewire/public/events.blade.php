<div>
    <div class="events">
        <div class="mt-5" style="z-index: 2;position: relative">
            <span class="post-no-bill header ms-4">Events</span>
            <div class="col-8" style="border-bottom: 1.5px solid rgba(251, 51, 51, 0.56);"></div>
        </div>
        <div class="event-list d-flex justify-content-evenly" style="z-index: 2;position: relative">
            @foreach($events as $event)
                <div class="event-item">
                    <div class="text-center mb-2">
                        <span class="event-day">{{ \Carbon\Carbon::parse($event->date)->format('l') }}</span>
                    </div>
                    <div class="image-box">
                        <img src="{{ asset('storage/public/event/'.$event->image) }}" class="col-12">
                        <div class="pop-up-btn">
                            <div class="col-12 text-center">
                                <div class="col-12 my-3">
                                    <button onclick="location.href='{{ route('event_book',['id' => $event->id]) }}'">Book Now</button>
                                </div>
                                <div class="col-12 my-3">
                                    <button onclick="location.href='{{ route('event_detail',['id' => $event->id]) }}'">View Detail</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const items = document.querySelectorAll(".event-item");

            items.forEach(item => {
                item.addEventListener("mouseover", () => {
                    items.forEach(otherItem => {
                        if (otherItem !== item) {
                            otherItem.children[1].classList.add("hovered");
                        }
                        else{
                            otherItem.children[1].children[1].style.display = 'flex';
                        }
                    });
                });

                item.addEventListener("mouseout", () => {
                    items.forEach(otherItem => {
                        otherItem.children[1].classList.remove("hovered");
                        otherItem.children[1].children[1].style.display = 'none';
                    });
                });
            });
        });
    </script>
</div>
