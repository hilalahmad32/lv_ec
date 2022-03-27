<div>
    <x-slot:title>
        order
        </x-slot>
        <div class="site-section">
            <div class="container">
                <div class="row mb-5">
                    <form class="col-md-12" method="post">
                        <div class="site-blocks-table">
                            <table class="table table-bordered">
                                <h1>Your Order</h1>
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">Email</th>
                                        <th class="product-name">Name</th>
                                        <th class="product-price">Username</th>
                                        <th class="product-quantity">Address</th>
                                        <th class="product-total">City</th>
                                        <th class="product-remove">Province</th>
                                        <th class="product-remove">Postal Code</th>
                                        <th class="product-remove">Phone</th>
                                        <th class="product-remove">Compelete</th>
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
                                                <td>{{ $order->complete == 1 ? 'Completed' : 'Pending' }}</td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <h3>Not Yet Order</h3>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
