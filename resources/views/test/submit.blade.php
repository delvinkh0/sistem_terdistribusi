<!-- resources/views/test/submit.blade.php -->
@extends('app')

@section('content')
    <h2>Test Questions</h2>
    <form action="{{ route('test.store') }}" method="post">
        @csrf
        <input type="hidden" name="test_id" value="{{ $testId }}">
        @foreach($questions as $question)
            <p>{{ $question->question }}</p>
            <label for="answer_{{ $question->id }}_1"><input type="radio" name="answers[{{ $question->id }}]" value="1" id="answer_{{ $question->id }}_1"> 1</label>
            <label for="answer_{{ $question->id }}_2"><input type="radio" name="answers[{{ $question->id }}]" value="2" id="answer_{{ $question->id }}_2"> 2</label>
            <label for="answer_{{ $question->id }}_3"><input type="radio" name="answers[{{ $question->id }}]" value="3" id="answer_{{ $question->id }}_3"> 3</label>
            <label for="answer_{{ $question->id }}_4"><input type="radio" name="answers[{{ $question->id }}]" value="4" id="answer_{{ $question->id }}_4"> 4</label>
            <label for="answer_{{ $question->id }}_5"><input type="radio" name="answers[{{ $question->id }}]" value="5" id="answer_{{ $question->id }}_5"> 5</label>
        @endforeach
        <button type="submit">Submit</button>
    </form>
@endsection
