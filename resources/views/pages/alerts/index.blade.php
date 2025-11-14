@extends('layout')

@section('content')
    <h1>Alerts</h1>

    @if(isset($alerts) && $alerts->count())
        <ul>
            @foreach($alerts as $alert)
                <li>
                    <strong>{{ $alert->title }}</strong>
                    — <a href="{{ route('alerts.show', $alert->id) }}">View</a>
                </li>
            @endforeach
        </ul>
    @else
        <p>No alerts at this time.</p>
    @endif

@endsection