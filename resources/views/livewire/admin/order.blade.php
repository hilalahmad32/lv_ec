<div>
    <x-slot:title>
        Order
        </x-slot>
        <div class="container">
            <input type="text" class="form-control border-input" placeholder="Searh Here..."
                style="width: 40%;margin:10px 0px;" wire:model="search">
            <div class="card" style="width:90%;">
                <div class="content table-responsive ">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Email</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>Province</th>
                                <th>Postal Code</th>
                                <th>Phone</th>
                                <th>Compelete</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($orders) > 0)
                                @foreach ($orders as $order)
                                    <tr>
                                        <td class="product-thumbnail">
                                            {{ $order->email }}
                                        </td>
                                        <td class="product-name">
                                            <h2 class="h5 text-black">{{ $order->name }}</h2>
                                        </td>
                                        <td>{{ $order->users->username }}</td>
                                        <td>{{ $order->address }}</td>
                                        <td>{{ $order->city }}</td>
                                        <td>{{ $order->privonce }}</td>
                                        <td>{{ $order->postal_code }}</td>
                                        <td>{{ $order->phone }}</td>
                                        <td>
                                            @if ($order->complete == 1)
                                                Delivered
                                            @else
                                                <button type="submit" wire:click="complete({{ $order->id }})"
                                                    class="btn btn-info btn-fill btn-wd">Complete</button>
                                            @endif
                                        </td>
                                        <td>
                                            <span wire:click='delete({{ $order->id }})' class="ti-trash"
                                                style="cursor: pointer;"></span>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <h3>Not Yet Order</h3>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
