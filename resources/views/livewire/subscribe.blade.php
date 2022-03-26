<div class="form-group">
    @if (session()->has('success'))
        <div class="alert alert-success custom-success">
            <strong>{{ session('success') }}</strong>
        </div>
    @endif
    <input type="email" class="form-control py-4" wire:model.lazy='email' placeholder="Email">
    @error('email')
        <span class="text-danger">{{ $message }}</span>
    @enderror
    <input type="submit" class="btn btn-sm btn-primary" wire:click.prevent='store' value="Send">
</div>
