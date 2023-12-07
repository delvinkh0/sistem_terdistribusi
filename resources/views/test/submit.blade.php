<!-- resources/views/test/submit.blade.php -->
@extends('app')

@section('content')
    <h2>Test Questions</h2>
    <form action="{{ route('test.store') }}" method="post">
        @csrf
        <input type="hidden" name="test_id" value="{{ $test_id }}">
        @foreach($questions as $question)
            <p>{{ $question->questionName }}</p>
            @foreach ($question->answers as $answer)
                <label for="answer_{{ $question->id }}_{{ $answer->id }}"><input type="radio" name="answers[{{ $question->id }}]" value="{{ $answer->id }}" id="answer_{{ $question->id }}_{{ $answer->id }}"> {{ $answer->answerName }}</label>
            @endforeach
        @endforeach
        <button type="submit">Submit</button>
    </form>
@endsection
