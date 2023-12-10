<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Step;
use Illuminate\Http\Request;
use App\Models\StepTestTaken;
use App\Models\UserStepAnswer;
use App\Http\Controllers\Controller;

class BreathSessionController extends Controller
{
    public function index(string $id)
    {
        $data['step'] = Step::with('stepquestion')->find($id);
        // dd($data['step']);

        return view('breathing-phase', $data);
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'stepquestion.*' => 'required|exists:step_question,id',
            'userAnswer.*' => 'required|string',
            'stepquestion' => 'required|array|min:1',
            'userAnswer' => 'required|array|min:1',
            'step_id' => 'required'
        ]);

        $stepQuestionsCount = count($request->input('stepquestion', []));
        $userAnswerCount = count($request->input('userAnswer', []));

        // dd($request->all());

        foreach ($request->input('stepquestion') as $key => $value) {
            $answer = $request->input('userAnswer')[$key - 1];
            $question = $request->input('stepquestion')[$key];

            $userStepAnswer = UserStepAnswer::create([
                'user_id' => auth()->user()->id,
                'stepquestion_id' => $question,
                'user_answer' => $answer,
                'created_at' =>  Carbon::createFromFormat('Y-m-d H:i:s', now()),
                'updated_at' =>  Carbon::createFromFormat('Y-m-d H:i:s', now())
            ]);

            $userStepAnswer->save();
        }

        $stepTestTaken = StepTestTaken::create([
            'user_id' => auth()->user()->id,
            'step_id' => $request->input('step_id'),
            'datenow' => Carbon::createFromFormat('Y-m-d H:i:s', now())
        ]);

        dd($stepTestTaken);

        $stepTestTaken->save();

        return redirect()->route('home.technique')->with('success', 'Satu sesi pernapasan selesai, Hari ini sudah cukup, jangan lupa untuk melakukan sesi ini besok!');
    }
}
