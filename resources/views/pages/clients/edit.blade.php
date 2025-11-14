@extends('layout')

@section('content')
    <h1>Edit Client</h1>

    <form method="POST" action="{{ route('clients.update', $client->id) }}">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Name</label>
            <input id="name" name="name" value="{{ old('name', $client->name ?? '') }}" />
        </div>

        <div>
            <label for="email">Email</label>
            <input id="email" name="email" value="{{ old('email', $client->email ?? '') }}" />
        </div>

        <div>
            <label for="phone">Phone</label>
            <input id="phone" name="phone" value="{{ old('phone', $client->phone ?? '') }}" />
        </div>

        <div>
            <label for="notes">Notes</label>
            <textarea id="notes" name="notes">{{ old('notes', $client->notes ?? '') }}</textarea>
        </div>

        <button type="submit">Save</button>
        <a href="{{ route('clients.show', $client->id) }}">Cancel</a>
    </form>

@endsection