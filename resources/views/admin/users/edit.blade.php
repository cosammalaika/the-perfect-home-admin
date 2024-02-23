@extends('admin.adminMain')

@section('content')
    <div class="container-fluid">
        <h1>Edit User</h1>
        <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
            </div>
            <!-- Add more fields as needed -->
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
