<div class="my-5 container">
    <div class="d-flex">
        <div class="event-book-image-box">
            <img src="{{ asset('storage/public/event/'.$event->image) }}">
        </div>
        <div class="event-book-info ps-3 d-flex flex-column justify-content-between">
            <div>
                <div>
                    <span class="h1">{{ $event->name }}</span>
                </div>
                <div class="mt-3">
                    <div class="my-2">
                        <span class="h4"><b>Date: </b>{{ $event->date }}</span>
                    </div>
                    <div class="my-2">
                        <span class="h4"><b>Time: </b>{{ $event->start }} - {{ $event->end }}</span>
                    </div>
                </div>
                <div class="my-2">
                    <span class="h4"><b>Selected Table:</b> {{ $booking->table }}</span>
                </div>
                <div class="my-2">
                    <span class="h4"><b>Pax:</b> {{ $booking->pax }}</span>
                </div>
                <div class="my-2">
                    <span class="h4"><b>Deposit:</b> RM{{ $booking->total_payment }}</span>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3">
        <form wire:ignore class="my-3" id="payment-form" method="post" data-secret="{{ $client_secret }}">
            <div id="payment-element">
                <!-- Elements will create form elements here -->
            </div>

            <button id="submit" class="btn btn-primary w-100 mt-3">Pay</button>
            <div id="error-message" class="text-danger">
                <!-- Display error message to your customers here -->
            </div>
        </form>
        <button class="btn btn-danger col-12" wire:click="cancelBooking">Cancel</button>
    </div>
    <script src="https://js.stripe.com/v3/"></script>
    <script type="text/javascript">
        const stripe = Stripe('{{env('STRIPE_PUBLISHABLE_KEY')}}');
        const options = {
            clientSecret: @json($client_secret),
            // Fully customizable with appearance API.
            appearance: {
                theme: 'night',
                labels: 'floating',
            },
        };

        // Set up Stripe.js and Elements to use in checkout form, passing the client secret obtained in step 3
        const elements = stripe.elements(options);

        // Create and mount the Payment Element
        const paymentElement = elements.create('payment');
        paymentElement.mount('#payment-element');

        const form = document.getElementById('payment-form');

        form.addEventListener('submit', async (event) => {
            event.preventDefault();

            const form = document.getElementById('payment-form');
            const formData = new FormData(form);

            let domainName = '{{ route('return') }}';

            const {error} = await stripe.confirmPayment({
                elements,
                confirmParams: {
                    return_url: `${domainName}?${new URLSearchParams(formData).toString()}&booking_id={{ $booking->booking_id }}`,
                },
            });

            if (error) {
                const messageContainer = document.querySelector('#error-message');
                messageContainer.textContent = error.message;
            } else {

            }
        })

    </script>
</div>
