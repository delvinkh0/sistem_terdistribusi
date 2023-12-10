<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Step;
use App\Models\Test;
use Illuminate\Http\Request;
use App\Models\StepTestTaken;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function selfAssessment()
    {
        $data['tests'] = Test::with('category')->get();
        return view('self-assessment', $data);
    }

    public function technique()
    {
        $data['steps'] = Step::with('stepquestion')->get();

        //create $data for disabled data and enabled data i want the steps is disabled if the user doesnt take the before step 7 days streaks
        $data['disabledSteps'] = [];
        $data['enabledSteps'] = [];

        foreach ($data['steps'] as $key => $step) {
            $lastStepTestTaken = StepTestTaken::with('user', 'step')
                ->where('user_id', auth()->user()->id)
                ->where('step_id', $step->id)
                ->orderBy('datenow', 'desc')
                ->first();
            // loop from the last date to 6 days before exclude the last date
            $streak = true;
            for ($i = 1; $i < 7; $i++) {
                if (!$lastStepTestTaken) {
                    $data['disabledSteps'][] = $step;
                    $streak = false;
                    break;
                } else {
                    $date = Carbon::createFromFormat('Y-m-d H:i:s', $lastStepTestTaken->datenow)->subDays($i);
                    $date = $date->format('Y-m-d');

                    $checkStreak = StepTestTaken::with('user', 'step')
                        ->where('user_id', auth()->user()->id)
                        ->where('step_id', $step->id)
                        ->whereDate('datenow', $date)
                        ->first();

                    if (!$checkStreak) {
                        $streak = false;
                        break;
                    }
                }
            }
            if ($streak) {
                $data['enabledSteps'][] = $step;
            }
        }

        dd($data);

        return view('mindfulness', $data);
    }


    public function breathingPhase()
    {
        return view('breathing-phase');
    }
}
