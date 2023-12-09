<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\UserAnswers;
use App\Models\Questions;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TestController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data['test'] = Test::with(['category', 'questions.options'])->find($id);

        return view('detail-selfassessment', $data);
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'questions.*' => 'required', // Validation rule for each element in the 'questions' array
            'answers.*' => 'required',   // Validation rule for each element in the 'answers' array
            'questions' => 'required|array|min:1', // Ensure 'questions' array exists and has at least one element
            'answers' => 'required|array|min:1',   // Ensure 'answers' array exists and has at least one element
        ]);

        // Custom logic to compare questions and answers
        $questionsCount = count($request->input('questions', []));
        $answersCount = count($request->input('answers', []));

        // dd($validated);

        if ($answersCount == 0) {
            return redirect()->back()->with('error', 'You need to answer the whole questions');
        }

        if ($questionsCount !== $answersCount) {
            return redirect()->back()->with('error', 'Please answer all the questions');
        }

        // dd($request->all());

        // Custom logic to save the answers to database
        foreach ($request->input('questions') as $key => $questionId) {

            $answer = $request->input('answers')[$key-1];
            $question = $request->input('questions')[$key];

            $userAnswer = new UserAnswers([
                'user_id' => auth()->user()->id,
                'questions_id' => $question,
                'options_id' => $answer,
                'datenow' => Carbon::createFromFormat('Y-m-d H:i:s', now())

            ]);
            $userAnswer->save();
        }

        return redirect()->route('test.result')->with('success', 'Test submitted');
    }

    public function showResult()
    {
        //get the user answer table, test table, result table, sum the total
        $data['test'] = UserAnswers::with(['questions', 'options'])->where('user_id', auth()->user()->id)->get();

        dd($data['test']);
        return view('result-selfassessment');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Test $test)
    {
        //
    }
}
