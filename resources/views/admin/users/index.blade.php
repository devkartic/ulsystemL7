<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="row ">
    <div class="col-md-8 offset-2">
        <div class="card">
            <div class="card-header">
                Users
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    @foreach($users as $user)
                    <li class="list-group-item font-weight-bold">Name: {{ $user->name }} Email: {{ $user->email }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
