<div>
    <x-slot:title>
        Login
        </x-slot>
        <div class="container my-5">
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
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8 col-xl-8 col-md-8">
                    <h1 class="h3 mb-3 text-center text-black ">Login</h1>
                    <form wire:submit.prevent='login'>
                        <div class="p-3 p-lg-5 border">
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="email" class="text-black">Email <span
                                            class="text-danger">*</span></label>
                                    <input type="email" class="form-control" wire:model.lazy='email' id="email"
                                        name="email" placeholder="">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="c_message" class="text-black">Password </label>
                                    <input type="password" wire:model.lazy="password" class="form-control"
                                        id="username" name="password">
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Login">
                                </div>
                                <div class='text-center my-3'>
                                    <span>Don't have Account ? <a href="{{ route('signup') }}">Signup</a> </span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
