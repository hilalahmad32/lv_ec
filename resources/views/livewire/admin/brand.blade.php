<div>
    <x-slot:title>
        Brand
        </x-slot>

        <div class="content" style="height:100vh;">

            <div class="container">
                <div class="card" style="width:90%;">
                    <div class="card-header" style="padding:10px 20px;">
                        <div style="display: flex; justify-content: space-between; align-items:baseline;">
                            <h4>Brands ({{ $totalBrand }})</h4>
                            <button class="btn btn-success" wire:click="showForm">Create</button>
                        </div>
                    </div>
                </div>
                <input type="text" class="form-control border-input" placeholder="Searh Here..."
                    style="width: 40%;margin:10px 0px;" wire:model="search">
                @if ($showTable == true)
                    <div class="card" style="width:90%;">
                        <div class="content table-responsive ">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>brand</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($brands as $brand)
                                        <tr>
                                            <td>{{ $brand->id }}</td>
                                            <td>{{ $brand->brand_name }}</td>
                                            <td>{{ $brand->status }}</td>
                                            <td>
                                                <span class="ti-pencil" wire:click="edit({{ $brand->id }})"
                                                    style="cursor: pointer;"></span>
                                                <span wire:click='delete({{ $brand->id }})' class="ti-trash"
                                                    style="cursor: pointer;"></span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif
            </div>
            @if ($createForm == true)
                <div class="container">
                    <div class="card">
                        <div class="header">
                            <div class="mb-2">
                                <button type="submit" wire:click="goBack" class="btn btn-info btn-fill btn-wd">Go
                                    Back</button>
                            </div>
                            <h4 class="title" style="margin-top: 10px;">Create brand</h4>
                        </div>
                        <div class="content">
                            <form wire:submit.prevent='store'>
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>brand </label>
                                            <input type="text" class="form-control border-input" placeholder="brand"
                                                wire:model.lazy="brand_name">
                                            @error('brand_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
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
            @endif
            @if ($updateForm == true)
                <div class="container">
                    <div class="card">
                        <div class="header">
                            <div class="mb-2">
                                <button type="submit" wire:click="goBack" class="btn btn-info btn-fill btn-wd">Go
                                    Back</button>
                            </div>
                            <h4 class="title" style="margin-top: 10px;">Update brand</h4>
                        </div>
                        <div class="content">
                            <form wire:submit.prevent='update({{ $brand_id }})'>
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>brand </label>
                                            <input type="text" class="form-control border-input" placeholder="brand"
                                                value="{{ old('edit_brand_name') }}"
                                                wire:model.lazy="edit_brand_name">
                                            @error('edit_brand_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <button class="btn btn-info btn-fill btn-wd">Update</button>
                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            @endif
        </div>

</div>
