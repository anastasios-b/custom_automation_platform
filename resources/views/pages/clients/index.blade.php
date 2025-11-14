@extends('layout')

@section('content')
    <h1>Clients</h1>

    @if(isset($clients) && $clients->count())
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clients as $client)
                    <tr>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->email }}</td>
                        <td>
                            <a href="{{ route('clients.show', $client->id) }}">View</a>
                            |
                            <a href="{{ route('clients.edit', $client->id) }}">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No clients found.</p>
    @endif

@endsection