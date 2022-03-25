<div>
    <x-slot:title>
        SignUp
        </x-slot>
        <div class="container my-5">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8 col-xl-8 col-md-8">
                    <h1 class="h3 mb-3 text-center text-black ">Sign Up</h1>
                    <form wire:submit.prevent='create'>
                        <div class="p-3 p-lg-5 border">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="fname" class="text-black">First Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" wire:model.lazy='fname' id="fname"
                                        name="fname">
                                    @error('fname')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="lname" class="text-black">Last Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" wire:model.lazy='lname' id="lname"
                                        name="lname">
                                    @error('lname')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
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
                                    <label for="username" class="text-black">Username </label>
                                    <input type="text" class="form-control" wire:model.lazy='username' id="username"
                                        name="username">
                                    @error('username')
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
                                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Sign Up">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
