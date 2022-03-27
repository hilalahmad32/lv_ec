<div>
    <x-slot:title>
        Setting
        </x-slot>
        <div class="container">
            <div class="card">
                <div class="header">
                    <h4 class="title" style="margin-top: 10px;">Setting</h4>
                </div>
                <div class="content">
                    <form wire:submit.prevent='store({{ $setting_id }})'>
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Website Name </label>
                                    <input type="text" class="form-control border-input" placeholder="Category"
                                        wire:model.lazy="header_logo">
                                </div>
                                <div class="form-group">
                                    <label>Email </label>
                                    <input type="text" class="form-control border-input" placeholder="Category"
                                        wire:model.lazy="email">

                                </div>
                                <div class="form-group">
                                    <label>Phone </label>
                                    <input type="text" class="form-control border-input" placeholder="Category"
                                        wire:model.lazy="phone">

                                </div>
                                <div class="form-group">
                                    <label>Address </label>
                                    <input type="text" class="form-control border-input" placeholder="Category"
                                        wire:model.lazy="address">

                                </div>
                                <div class="form-group">
                                    <label>Website Name in Footer </label>
                                    <input type="text" class="form-control border-input" placeholder="Category"
                                        wire:model.lazy="footer_logo">

                                </div>
                                <div class="form-group">
                                    <label>Footer Description </label>
                                    <textarea type="text" class="form-control border-input" placeholder="Category" wire:model.lazy="footer_desc"></textarea>

                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <button class="btn btn-info btn-fill btn-wd">Save</button>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
</div>
