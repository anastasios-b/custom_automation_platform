@extends('layout')

@section('content')
    <h1>Edit Processed Data</h1>

    <form method="POST" action="{{ route('processed_data.update', $item->id) }}">
        @csrf
        @method('PUT')

        <div>
            <label for="summary">Summary</label>
            <textarea id="summary" name="summary">{{ old('summary', $item->summary ?? '') }}</textarea>
        </div>

        <div>
            <label for="notes">Admin Notes</label>
            <textarea id="notes" name="notes">{{ old('notes', $item->notes ?? '') }}</textarea>
        </div>

        <button type="submit">Save</button>
        <a href="{{ route('processed_data.show', $item->id) }}">Cancel</a>
    </form>

@endsection