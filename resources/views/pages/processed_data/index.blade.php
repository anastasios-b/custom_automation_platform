@extends('layout')

@section('content')
    <h1>Processed Data</h1>

    @if(isset($items) && $items->count())
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Source</th>
                    <th>Summary</th>
                    <th>Processed At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->source }}</td>
                        <td>{{ Str::limit($item->summary, 80) }}</td>
                        <td>{{ $item->processed_at }}</td>
                        <td>
                            <a href="{{ route('processed_data.show', $item->id) }}">View</a>
                            |
                            <a href="{{ route('processed_data.edit', $item->id) }}">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No processed data found.</p>
    @endif

@endsection