<?php

namespace App\Http\Controllers;
use App\Models\Test;
use App\Models\Question;
use App\Models\History;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $tests = Test::all();
        return view('test.index', compact('tests'));
    }

    public function submit(Request $request)
    {
        $testId = $request->input('test_id');
        $questions = Question::where('test_id', $testId)->get();
        dd($questions);
        return view('test.submit', compact('questions', 'test_id'));
    }

    public function store(Request $request)
    {
        // Validasi request sesuai kebutuhan

        $testId = $request->input('test_id');
        $totalPoints = count($request->input('answers'));

        // Hitung total points dari jawaban
        $points = array_sum($request->input('answers'));

        // Hitung hasil
        $result = ($points / $totalPoints) * 100;

        // Simpan hasil ke dalam history
        History::create([
            'id_user' => auth()->user()->id,
            'id_test' => $testId,
            'result' => (int) $result,
            'created_on' => now(),
        ]);

        return redirect()->route('test.history');
    }

    public function history()
    {
        $history = History::where('id_user', auth()->user()->id)->get();
        return view('test.history', compact('history'));
    }
}
