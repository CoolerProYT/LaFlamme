<div>
    <div class="contact">
        <div class="mt-5">
            <span class="post-no-bill header ms-4 reserve-header" style="white-space: nowrap">Contact Us</span>
        </div>
        <div class="px-md-5 px-3 py-4">
            <form wire:submit.prevent="send" class="text-light">
                <div class="col-12 d-md-flex">
                    <div class="col-md-6 col-12 pe-md-1">
                        <label for="name">Your Name <i class="required">(Required)</i></label>
                        <div class="pt-3">
                            <input class="col-12" type="text" wire:model="name" id="name">
                        </div>
                        @if($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="col-md-6 col-12 ps-md-1 my-4 my-md-0">
                        <label for="name">Email <i class="required">(Required)</i></label>
                        <div class="pt-3">
                            <input class="col-12" type="text" wire:model="email" id="email">
                        </div>
                        @if($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-12 my-4">
                    <label for="phone">Phone <i class="required">(Required)</i></label>
                    <div class="pt-3">
                        <input class="col-12" type="text" wire:model="phone" id="phone">
                    </div>
                    @if($errors->has('phone'))
                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                    @endif
                </div>
                <div class="col-12 my-4">
                    <label for="phone">Subject <i class="required">(Required)</i></label>
                    <div class="pt-3">
                        <input class="col-12" type="text" wire:model="subject" id="subject">
                    </div>
                    @if($errors->has('subject'))
                        <span class="text-danger">{{ $errors->first('subject') }}</span>
                    @endif
                </div>
                <div class="col-12 my-4">
                    <label for="message">Message <i class="required">(Required)</i></label>
                    <div class="pt-3">
                        <textarea class="col-12" wire:model="message" id="message"></textarea>
                    </div>
                    @if($errors->has('message'))
                        <span class="text-danger">{{ $errors->first('message') }}</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-outline-light" style="border-radius: unset">SUBMIT</button>
                @if($this->sent)
                    <span class="text-primary ms-2">Your message has been sent!</span>
                @endif
            </form>
        </div>
    </div>
</div>
