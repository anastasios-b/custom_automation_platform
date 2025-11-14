@extends('layout')

@section('content')
    <h1>Integration Logs</h1>

    @if(isset($logs) && $logs->count())
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Source</th>
                    <th>Level</th>
                    <th>Message</th>
                    <th>Logged At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($logs as $log)
                    <tr>
                        <td>{{ $log->id }}</td>
                        <td>{{ $log->source }}</td>
                        <td>{{ $log->level }}</td>
                        <td>{{ Str::limit($log->message, 80) }}</td>
                        <td>{{ $log->created_at }}</td>
                        <td>
                            <a href="{{ route('integration_logs.show', $log->id) }}">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No integration logs found.</p>
    @endif

@endsection