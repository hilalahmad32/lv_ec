<div>
    <x-slot:title>
        Product
        </x-slot>

        <div class="content" style="height:100vh;">

            <div class="container">
                <div class="col-lg-12 col-md-12">
                    <div class="card" style="width:90%;">
                        <div class="card-header" style="padding:10px 20px;">
                            <div style="display: flex; justify-content: space-between; align-items:baseline;">
                                <h4>Products (4)</h4>
                                <button class="btn btn-success" wire:click="showForm">Create</button>
                            </div>
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
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Brand</th>
                                        <th>Price</th>
                                        <th>Stock</th>
                                        <th>Views</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            <td>{{ $product->title }}</td>
                                            <td>{{ $product->categorys->category_name }}</td>
                                            <td>{{ $product->brands->brand_name }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>{{ $product->stock }}</td>
                                            <td>{{ $product->views }}</td>
                                            <td><img src="{{ asset('storage') }}/{{ $product->image }}"
                                                    style="width:70px;height:70px;" alt=""></td>
                                            <td>
                                                <span class="ti-pencil" wire:click="edit({{ $product->id }})"
                                                    style="cursor: pointer;"></span>
                                                <span wire:click='delete({{ $product->id }})' class="ti-trash"
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
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Edit Profile</h4>
                        </div>
                        <div class="content">
                            <form wire:submit.prevent='store'>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Product Title</label>
                                            <input type="text" class="form-control border-input"
                                                placeholder="Product Title" wire:model.lazy="title">
                                            @error('title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select wire:model.lazy="cat_id" class="form-control border-input">
                                                <option selected>Select Category</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">
                                                        {{ $category->category_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('cat_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Brand</label>
                                            <select wire:model.lazy="brand_id" class="form-control border-input">
                                                <option selected>Select Brand</option>
                                                @foreach ($brands as $brand)
                                                    <option value="{{ $brand->id }}">{{ $brand->brand_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('cat_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="text" class="form-control border-input" placeholder="Price"
                                                wire:model.lazy="price">
                                            @error('price')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control border-input" placeholder="Stock"
                                                wire:model.lazy="stock">
                                            @error('stock')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Short Description</label>
                                            <textarea rows="5" class="form-control border-input" placeholder="Here can be your Short description"
                                                wire:model.lazy="short_desc"></textarea>
                                            @error('short_desc')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Long Description</label>
                                            <textarea rows="5" class="form-control border-input" placeholder="Here can be your Long description"
                                                wire:model.lazy="long_desc"></textarea>
                                            @error('long_desc')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="file" class="form-control border-input" placeholder="Image"
                                            wire:model="image">
                                        @error('image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        @if ($image)
                                            <img src="{{ $image->temporaryUrl() }}"
                                                style="width: 200px;height:200px;" alt="">
                                        @endif
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-info btn-fill btn-wd">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endif
            @if ($updateForm == true)
            @endif
        </div>

</div>
