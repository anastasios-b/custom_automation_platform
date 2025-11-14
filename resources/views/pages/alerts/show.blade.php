@extends('layout')

@section('content')
    <h1>Alert: {{ $alert->title ?? '—' }}</h1>

    <p><strong>Severity:</strong> {{ $alert->severity ?? '—' }}</p>
    <p><strong>Message:</strong></p>
    <pre>{{ $alert->message ?? '—' }}</pre>

    <a href="{{ route('alerts.index') }}">Back to alerts</a>

@endsection