<div>
    @if($enabled && $flag)
        <div class="pop-up d-flex justify-content-center align-items-center">
            <div class="bg-dark text-light rounded p-3 col-3">
                <div class="text-end col-12">
                    <span class="h2 pointer" wire:click="updateFlag(false)">X</span>
                </div>
                <div class="my-3">
                    <img class="col-12" src="{{ asset('storage/public/promotion/' . $image) }}">
                </div>
                <div class="text-center">
                    <pre style="white-space: break-spaces;font-family: Arial">{{ $description }}</pre>
                </div>
            </div>
        </div>
    @endif
</div>
