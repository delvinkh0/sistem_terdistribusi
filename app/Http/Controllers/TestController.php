<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

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

        if ($questionsCount !== $answersCount) {
            return redirect()->back()->with('error', 'Invalid input');
        }
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
