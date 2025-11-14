@extends('layout')

@section('content')
    <h1>Client: {{ $client->name ?? '—' }}</h1>

    <p><strong>Email:</strong> {{ $client->email ?? '—' }}</p>
    <p><strong>Phone:</strong> {{ $client->phone ?? '—' }}</p>
    <p><strong>Notes:</strong> {{ $client->notes ?? '—' }}</p>

    <a href="{{ route('clients.edit', $client->id) }}">Edit</a>
    <a href="{{ route('clients.index') }}">Back to list</a>

@endsection