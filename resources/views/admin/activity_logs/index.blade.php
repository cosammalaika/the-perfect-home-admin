@extends('admin.adminMain')
@section('title', 'Activity Logs')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="card-title">Activity Logs</h2>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table align-middle mb-0">
    
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Log Name</th>
                            <th>Description</th>
                            <th>Causer Name</th>
                            <th>Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($activityLogs as $log)
                            <tr>
                                <td>{{ $log->id }}</td>
                                <td>{{ $log->log_name }}</td>
                                <td>{{ $log->description }}</td>
                                <td>{{ optional($log->causer)->name }}</td> 
                                <td>{{ $log->created_at }}</td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="page-item {{ $activityLogs->previousPageUrl() ? '' : 'disabled' }}">
                            <a class="page-link" href="{{ $activityLogs->previousPageUrl() }}" tabindex="-1">Previous</a>
                        </li>
                        @foreach ($activityLogs->getUrlRange($activityLogs->currentPage() - 1, $activityLogs->currentPage() + 2) as $page => $url)
                            <li class="page-item {{ $activityLogs->currentPage() == $page ? 'active' : '' }}">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endforeach
                        <li class="page-item {{ $activityLogs->nextPageUrl() ? '' : 'disabled' }}">
                            <a class="page-link" href="{{ $activityLogs->nextPageUrl() }}">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- end card body -->
    </div>
@endsection
