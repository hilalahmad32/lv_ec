<div>
    <x-slot:title>
        Contact
        </x-slot>
        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="h3 mb-3 text-black">Get In Touch</h2>
                    </div>
                    <div class="col-md-7">
                        @if (session()->has('success'))
                            <span class="text-success">{{ session('success') }}</span>
                        @endif
                        <form action="#" wire:submit.prevent='contact'>
                            <div class="p-3 p-lg-5 border">
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="c_fname" class="text-black">First Name <span
                                                class="text-danger">*</span></label>
                                        <input type="text" wire:model.lazy="fname" class="form-control" id="c_fname"
                                            name="c_fname">
                                        @error('fname')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="c_lname" class="text-black">Last Name <span
                                                class="text-danger">*</span></label>
                                        <input type="text" wire:model.lazy="lname" class="form-control" id="c_lname"
                                            name="c_lname">
                                        @error('lname')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="c_email" class="text-black">Email <span
                                                class="text-danger">*</span></label>
                                        <input type="email" wire:model.lazy="email" class="form-control" id="c_email"
                                            name="c_email" placeholder="">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="c_subject" class="text-black">Subject </label>
                                        <input type="text" wire:model.lazy="subject" class="form-control"
                                            id="c_subject" name="c_subject">
                                        @error('subject')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="c_message" class="text-black">Message </label>
                                        <textarea name="c_message" wire:model.lazy="message" id="c_message" cols="30" rows="7"
                                            class="form-control"></textarea>
                                        @error('message')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <input type="submit" class="btn btn-primary btn-lg btn-block"
                                            value="Send Message">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5 ml-auto">
                        <div class="p-4 border mb-3">
                            <span class="d-block text-primary h6 text-uppercase">Address</span>
                            <p class="mb-0">{{ $setting->address }}</p>
                        </div>
                        <div class="p-4 border mb-3">
                            <span class="d-block text-primary h6 text-uppercase">Email</span>
                            <p class="mb-0">{{ $setting->email }}</p>
                        </div>
                        <div class="p-4 border mb-3">
                            <span class="d-block text-primary h6 text-uppercase">Phone</span>
                            <p class="mb-0">{{ $setting->phone }}</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</div>
