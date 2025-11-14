@extends('layout')

@section('content')
    <h1>Processed Data #{{ $item->id ?? '—' }}</h1>

    <p><strong>Source:</strong> {{ $item->source ?? '—' }}</p>
    <p><strong>Summary:</strong></p>
    <pre>{{ $item->summary ?? '—' }}</pre>
    <p><strong>Processed At:</strong> {{ $item->processed_at ?? '—' }}</p>

    <a href="{{ route('processed_data.edit', $item->id) }}">Edit</a>
    <a href="{{ route('processed_data.index') }}">Back to list</a>

@endsection