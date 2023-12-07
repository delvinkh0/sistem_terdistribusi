@extends('layouts.app')

@section('content')
    <h2>Test History</h2>
    <table>
        <thead>
            <tr>
                <th>Test</th>
                <th>Result</th>
                <th>Created On</th>
            </tr>
        </thead>
        <tbody>
            @foreach($history as $record)
                <tr>
                    <td>{{ $record->test->name_test }}</td>
                    <td>{{ $record->result }}</td>
                    <td>{{ $record->created_on }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
