@extends('layout')

@section('content')
    <h1>Invoice {{ $invoice->number ?? '—' }}</h1>

    <p><strong>Client:</strong> {{ $invoice->client->name ?? '—' }}</p>
    <p><strong>Total:</strong> {{ $invoice->total ?? '—' }}</p>
    <p><strong>Status:</strong> {{ $invoice->status ?? '—' }}</p>

    <a href="{{ route('invoices.edit', $invoice->id) }}">Edit</a>
    <a href="{{ route('invoices.index') }}">Back to invoices</a>

@endsection