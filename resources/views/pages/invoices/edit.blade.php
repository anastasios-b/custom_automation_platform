@extends('layout')

@section('content')
    <h1>Edit Invoice</h1>

    <form method="POST" action="{{ route('invoices.update', $invoice->id) }}">
        @csrf
        @method('PUT')

        <div>
            <label for="number">Number</label>
            <input id="number" name="number" value="{{ old('number', $invoice->number ?? '') }}" />
        </div>

        <div>
            <label for="total">Total</label>
            <input id="total" name="total" value="{{ old('total', $invoice->total ?? '') }}" />
        </div>

        <div>
            <label for="status">Status</label>
            <input id="status" name="status" value="{{ old('status', $invoice->status ?? '') }}" />
        </div>

        <button type="submit">Save</button>
        <a href="{{ route('invoices.show', $invoice->id) }}">Cancel</a>
    </form>

@endsection