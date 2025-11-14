@extends('layout')

@section('content')
    <h1>Log #{{ $log->id ?? '—' }}</h1>

    <p><strong>Source:</strong> {{ $log->source ?? '—' }}</p>
    <p><strong>Level:</strong> {{ $log->level ?? '—' }}</p>
    <p><strong>Message:</strong></p>
    <pre>{{ $log->message ?? '—' }}</pre>
    <p><strong>Created At:</strong> {{ $log->created_at ?? '—' }}</p>

    <a href="{{ route('integration_logs.index') }}">Back to logs</a>

@endsection