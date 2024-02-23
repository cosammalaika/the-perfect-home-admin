@extends('admin.adminMain')
@section('title', 'Users')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="card-title">User Management</h2>
            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".add-user-modal">Add New User</button>

        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table align-middle mb-0">

                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if ($user->is_active)
                                    <span class="badge badge-soft-success">Active</span>
                                @else
                                    <span class="badge badge-soft-danger">Deactivated</span>
                                @endif
                            </td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Action <i class="mdi mdi-chevron-down"></i></button>
                                    <div class="dropdown-menu dropdownmenu-primary">
                                        <a class="dropdown-item" data-bs-toggle="modal" data-bs-target=".view-user-modal">View</a>
                                        <a class="dropdown-item" data-bs-toggle="modal" data-bs-target=".edit-user-modal">Edit</a>
                                        @if ($user->is_active)
                                            <form action="{{ route('admin.users.deactivate', $user->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="dropdown-item">Deactivate</button>
                                            </form>
                                        @else
                                            <form action="{{ route('admin.users.activate', $user->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="dropdown-item">Activate</button>
                                            </form>
                                        @endif
                                        <div class="dropdown-divider"></div>
                                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                        <!-- Show Activate/Deactivate link based on user status -->
                                    </div>
                                    
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-item {{ $users->previousPageUrl() ? '' : 'disabled' }}">
                        <a class="page-link" href="{{ $users->previousPageUrl() }}" tabindex="-1">Previous</a>
                    </li>
                    @foreach ($users->getUrlRange($users->currentPage() - 1, $users->currentPage() + 2) as $page => $url)
                        <li class="page-item {{ $users->currentPage() == $page ? 'active' : '' }}">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endforeach
                    <li class="page-item {{ $users->nextPageUrl() ? '' : 'disabled' }}">
                        <a class="page-link" href="{{ $users->nextPageUrl() }}">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- end card body -->
</div>

{{-- ====================Model============================ --}}

<div class="col-lg-6">
    <div class="card">
        <div >
            <div>
                <div class="modal fade add-user-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add New User</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <form action="{{ route('admin.users.store') }}" method="POST" class="needs-validation" >
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="name">Name</label>
                                                    <input type="text" class="form-control"id="name" placeholder="Name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="email">Email address</label>
                                                    <input type="text" class="form-control" id="email" placeholder="Email" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="password">Password</label>
                                                    <input type="text" class="form-control" id="password" placeholder="Password" required>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Add more fields as needed -->
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            </div>
        </div><!-- end card body -->
    </div><!-- end card -->
</div><!-- end col -->

<div class="col-lg-6">
    <div class="card">
        <div >
            <div>
                <div class="modal fade view-user-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">User info </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <form action="{{ route('admin.users.store') }}" method="POST" class="needs-validation" >
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="name">Name</label>
                                                    <input type="text" class="form-control" id="name" placeholder="name" value="{{ $user->name }}" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="email">Email address</label>
                                                    <input type="text" class="form-control" id="name" placeholder="name" value="{{ $user->email }}" disabled>
                                                </div>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            </div>
        </div><!-- end card body -->
    </div><!-- end card -->
</div><!-- end col -->

<div class="col-lg-6">
    <div class="card">
        <div >
            <div>
                <div class="modal fade edit-user-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">edit User</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <form action="{{ route('admin.users.store') }}" method="POST" class="needs-validation" >
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="name">Name</label>
                                                    <input type="text" class="form-control"id="name" placeholder="Name" value="{{ $user->name }}" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="email">Email address</label>
                                                    <input type="text" class="form-control" id="email" placeholder="Email" value="{{ $user->email }}" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="password">Password</label>
                                                    <input type="text" class="form-control" id="password" placeholder="Password" required>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Add more fields as needed -->
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            </div>
        </div><!-- end card body -->
    </div><!-- end card -->
</div><!-- end col -->
@endsection
