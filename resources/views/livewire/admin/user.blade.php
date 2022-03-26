<div>
    <x-slot:title>
        User
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
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->fname }}</td>
                                    <td>{{ $user->lname }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>
                                        <span wire:click='delete({{ $user->id }})' class="ti-trash"
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
