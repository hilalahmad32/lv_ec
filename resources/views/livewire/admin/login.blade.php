<div>
    <x-slot:title>
        Login
        </x-slot>
        @if (session()->has('success'))
            <div class="alert alert-success custom-success">
                <strong>{{ session('success') }}</strong>
            </div>
        @endif
        @if (session()->has('error'))
            <div class="alert alert-danger custom-success">
                <strong>{{ session('error') }}</strong>
            </div>
        @endif
        <div class="row" style="display:flex; justify-content:center;height:100vh;align-items: center;">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Enter Username</label>
                    <input type="text" wire:model.lazy="username" class="form-control border-input"
                        placeholder="Enter Username">
                    @error('username')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Enter Password</label>
                    <input type="password" wire:model.lazy="password" class="form-control border-input"
                        placeholder="Enter Password">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="text-center">
                    <button type="submit" wire:click='login' class="btn btn-info btn-fill btn-wd">Login</button>
                </div>
            </div>
        </div>
</div>
