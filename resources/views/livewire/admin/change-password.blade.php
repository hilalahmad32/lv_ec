<div>
    <x-slot:title>
        Change Password
        </x-slot>
        <div class="container">
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
            <div class="row" style="display:flex; justify-content:center;margin: 10px 0px;">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Enter Old Password</label>
                        <input type="password" wire:model.lazy="old_password" class="form-control border-input"
                            placeholder="Enter Username">
                        @error('old_password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Enter New Password</label>
                        <input type="password" wire:model.lazy="new_password" class="form-control border-input"
                            placeholder="Enter Password">
                        @error('new_password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="text-center">
                        <button type="submit" wire:click='changePassword' class="btn btn-info btn-fill btn-wd">Change
                            Password</button>
                    </div>
                </div>
            </div>
        </div>


</div>
