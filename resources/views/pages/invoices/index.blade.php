@extends('layout')

@section('content')
    <h1>Invoices</h1>

    @if(isset($invoices) && $invoices->count())
        <table>
            <thead>
                <tr>
                    <th>Invoice #</th>
                    <th>Client</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($invoices as $invoice)
                    <tr>
                        <td>{{ $invoice->number }}</td>
                        <td>{{ $invoice->client->name ?? '—' }}</td>
                        <td>{{ $invoice->total }}</td>
                        <td>{{ $invoice->status }}</td>
                        <td>
                            <a href="{{ route('invoices.show', $invoice->id) }}">View</a>
                            |
                            <a href="{{ route('invoices.edit', $invoice->id) }}">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No invoices found.</p>
    @endif

@endsection