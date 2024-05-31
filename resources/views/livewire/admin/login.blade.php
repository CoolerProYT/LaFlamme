<div class="container">
    <div class="col-12 text-center">
        <img src="{{ asset('img/logo.png') }}" class="col-2">
    </div>
    <div class="container col-md-8 col-12 mt-5">
        <form wire:submit.prevent="login">
            <div class="col-12 d-flex justify-content-between flex-wrap">
                <label for="email" class="col-xl-4">Email</label>
                <input type="text" id="email" class="col-xl-8 col-12" wire:model="email">
                <div class="d-flex justify-content-end col-xl-12">
                    @error('email') <span class="text-danger col-xl-8 col-12">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-12 d-flex justify-content-between flex-wrap my-4">
                <label for="password" class="col-xl-4">Password</label>
                <input type="password" id="password" class="col-xl-8 col-12" wire:model="password">
                <div class="d-flex justify-content-end col-12">
                    @error('password') <span class="text-danger col-xl-8 col-12">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="col-12 py-4">Login</button>
            </div>
        </form>
    </div>
</div>
