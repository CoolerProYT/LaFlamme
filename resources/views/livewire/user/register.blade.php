<div class="container">
    <div class="col-12 text-center">
        <img src="{{ asset('img/logo.png') }}">
    </div>
    <div class="container col-8 mt-5">
        <form wire:submit.prevent="register">
            <div class="col-12 d-flex justify-content-between flex-wrap">
                <label for="name" class="col-xl-4">Username</label>
                <input type="text" id="name" class="col-xl-8" wire:model="name">
                <div class="d-flex justify-content-end col-xl-12">
                    @error('name') <span class="text-danger col-xl-8">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-12 d-flex justify-content-between flex-wrap my-4">
                <label for="email" class="col-xl-4">Email</label>
                <input type="text" id="email" class="col-xl-8" wire:model="email">
                <div class="d-flex justify-content-end col-xl-12">
                    @error('email') <span class="text-danger col-xl-8">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-12 d-flex justify-content-between flex-wrap my-4">
                <label for="password" class="col-xl-4">Password</label>
                <input type="password" id="password" class="col-xl-8" wire:model="password">
                <div class="d-flex justify-content-end col-12">
                    @error('password') <span class="text-danger col-xl-8">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-12 d-flex justify-content-between align-items-center flex-wrap my-4">
                <label for="password_confirmation" class="col-xl-4" style="font-size: 30px">Confirm Password</label>
                <input type="password" id="password_confirmation" class="col-xl-8" wire:model="password_confirmation">
                <div class="d-flex justify-content-end col-12">
                    @error('password_confirmation') <span class="text-danger col-xl-8">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="col-12 py-4">Register</button>
            </div>
            <div>
                <span class="text-light">Already have an account? <a class="text-primary" href="{{ route('user.login') }}">Login here</a></span>
            </div>
        </form>
    </div>
</div>
