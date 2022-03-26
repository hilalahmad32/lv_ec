<div>
    <x-slot:title>
        Review
        </x-slot>
        <div class="container">
            <input type="text" class="form-control border-input" placeholder="Searh Here..."
                style="width: 40%;margin:10px 0px;" wire:model="search">
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
                            @foreach ($reviews as $review)
                                <tr>
                                    <td>{{ $review->id }}</td>
                                    <td>{{ $review->rating }}</td>
                                    <td>{{ $review->reviews }}</td>
                                    <td>{{ $review->products->title }}</td>
                                    <td>{{ $review->users->username }}</td>
                                    <td>
                                        <span wire:click='delete({{ $review->id }})' class="ti-trash"
                                            style="cursor: pointer;"></span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
