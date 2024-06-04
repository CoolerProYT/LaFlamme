<div class="container">
    <div class="container col-md-8 col-lg-6 col-xl-4 mt-5 form-box">
        <a class="pointer h5" href="javascript:history.back()" style="text-decoration: none">
            <img style="height: 30px" src="{{ asset('icon/left-arrow.svg') }}">
            <span class="text-light">back</span>
        </a>
        <div class="col-12 text-center mb-3">
            <img src="{{ asset('img/logo.png') }}" class="col-2">
        </div>
        <form wire:submit.prevent="login">
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
            <div class="text-center my-3">
                <button type="submit" class="col-12 py-2">Login</button>
            </div>
            <div>
                <span class="text-light">Doesn't have an account? <a class="text-primary" href="{{ route('user.register') }}">Register here</a></span>
            </div>
        </form>
    </div>
</div>
