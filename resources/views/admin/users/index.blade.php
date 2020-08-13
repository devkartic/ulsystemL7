<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="row ">
    <div class="col-md-8 offset-2">
        <div class="card">
            <div class="card-header">
                Users
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Roles</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $key=>$user)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                        <td>
                            <a href="{{ route('admin.user.edit', $user->id) }}" class="float-left"><button type="button" class="btn btn-warning">Edit</button></a>
                            <form action="{{ route('admin.user.destroy', $user->id) }}" method="post" class="ml-2 float-left">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
