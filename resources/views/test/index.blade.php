<!-- resources/views/test/index.blade.php -->
@extends('app')

@section('content')
    <h2>Select Test</h2>
    <form action="{{ route('test.submit') }}" method="post">
        @csrf
        <label for="test">Select Test:</label>
        <select name="test_id" id="test">
            @foreach($tests as $test)
                <option value="{{ $test->id }}">{{ $test->TestName }}</option>
            @endforeach
        </select>
        <button type="submit">Start Test</button>
    </form>
@endsection
