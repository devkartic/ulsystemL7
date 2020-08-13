<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="row ">
    <div class="col-md-8 offset-2">
        <div class="card">
            <div class="card-header">
                Edit User {{ $user->name }}
            </div>
            <div class="card-body">
                <form action="{{ route('admin.user.update', $user->id) }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        @foreach($roles as $role)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="roles[]" type="checkbox"
                                       id="inlineCheckbox{{ $role->id }}" @if($role->users()->find($user->id)) checked @endif value="{{ $role->id }}">
                                <label class="form-check-label"
                                       for="inlineCheckbox{{ $role->id }}">{{ $role->name }}</label>
                            </div>
                        @endforeach
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
