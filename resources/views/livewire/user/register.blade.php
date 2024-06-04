<div class="container">
    <div class="container col-md-8 col-lg-6 col-xl-4 mt-5 form-box">
        <a class="pointer h5" href="javascript:history.back()" style="text-decoration: none">
            <img style="height: 30px" src="{{ asset('icon/left-arrow.svg') }}">
            <span class="text-light">back</span>
        </a>
        <div class="col-12 text-center mb-3">
            <img src="{{ asset('img/logo.png') }}" class="col-2">
        </div>
        <form wire:submit.prevent="register">
            <div class="col-12 my-3">
                <label for="name">Username</label>
                <input type="text" id="name" class="col-12" wire:model="name">
                <div class="d-flex justify-content-end col-xl-12">
                    @error('name') <span class="text-danger col-12">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-12 my-3">
                <label for="email">Email</label>
                <input type="text" id="email" class="col-12" wire:model="email">
                <div class="d-flex justify-content-end col-xl-12">
                    @error('email') <span class="text-danger col-12">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-12 my-3">
                <label for="password">Password</label>
                <input placeholder="Password must contain at least one uppercase letter, one number, and one special character" type="password" id="password" class="col-12" wire:model="password">
                <div class="d-flex justify-content-end col-12">
                    @error('password') <span class="text-danger col-12">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-12 my-3">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" id="password_confirmation" class="col-12" wire:model="password_confirmation">
                <div class="d-flex justify-content-end col-12">
                    @error('password_confirmation') <span class="text-danger col-12">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="text-center my-3">
                <button type="submit" class="col-12 py-2">Register</button>
            </div>
            <div>
                <span class="text-light">Already have an account? <a class="text-primary" href="{{ route('user.login') }}">Login here</a></span>
            </div>
        </form>
    </div>
</div>
