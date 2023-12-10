<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Step;
use App\Models\Test;
use Illuminate\Http\Request;
use App\Models\StepTestTaken;
use Illuminate\Support\Facades\DB;

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

//     public function technique()
// {
//     $data['steps'] = Step::with('stepquestion')->get();
//     $data['disabledSteps'] = $data['steps']->toArray();
//     $data['enabledSteps'] = [];

//     $userId = auth()->user()->id;
//     $completedStepsCount = StepTestTaken::where('user_id', $userId)
//                             // ->distinct('step_id')
//                             ->count('step_id');

//     // Ensure at least Step 1 is enabled
//     $stepsToEnable = max(1, $completedStepsCount / 7);

//     for ($i = 0; $i < $stepsToEnable; $i++) {
//         if (isset($data['steps'][$i])) {
//             $data['enabledSteps'][] = $data['steps'][$i]->toArray();
//             unset($data['disabledSteps'][$i]);
//         }
//     }

//     dd($completedStepsCount);

//     return view('mindfulness', $data);
// }



    public function technique()
    {
        $data['steps'] = Step::with('stepquestion')->get()->toArray();

        //create $data for disabled data and enabled data i want the steps is disabled if the user doesnt take the before step 7 days streaks
        $data['disabledSteps'] = [];
        $data['enabledSteps'] = [$data['steps'][0]];

        foreach (array_slice($data['steps'], 0, -1) as $key => $step) {
            $lastStepTestTaken = StepTestTaken::with('user', 'step')
                ->where('user_id', auth()->user()->id)
                ->where('step_id', $step['id'])
                ->orderBy('datenow', 'desc')
                ->first();

            // loop from the last date to 6 days before exclude the last date
            $streak = true;
            $nextStep = $data['steps'][$key + 1];
            for ($i = 1; $i < 7; $i++) {
                if (!$lastStepTestTaken) {
                    $streak = false;
                    break;
                } else {
                    // $date = Carbon::createFromFormat('Y-m-d H:i:s', $lastStepTestTaken->datenow)->subDays($i);
                    // $date = $date->format('Y-m-d');

                    // $checkStreak = StepTestTaken::with('user', 'step')
                    //     ->where('user_id', auth()->user()->id)
                    //     ->where('step_id', $step->id)
                    //     ->whereDate('datenow', $date)
                    //     ->first();
                    $userId = auth()->user()->id;

                    $checkStreak = DB::select("
                        SELECT user_id, MAX(streak) AS max_streak FROM (
                            SELECT user_id, DATE(datenow) AS date,
                            @streak := IF(@prev_user = user_id AND DATEDIFF(DATE(datenow), @prev_date) = 1, @streak + 1, 1) AS streak,
                            @prev_user := user_id,
                            @prev_date := DATE(datenow)
                            FROM StepTestTaken,
                            (SELECT @prev_user := NULL, @prev_date := NULL, @streak := 1) AS vars
                            WHERE user_id = ? AND step_id = ?
                            ORDER BY user_id, DATE(datenow)
                        ) AS tb
                        GROUP BY user_id",
                        [$userId, $step['id']]
                    );


                    if ($checkStreak[0]->max_streak < 7) {
                        $streak = false;
                        break;
                    }
                }
            }
            if ($streak) {
                $data['enabledSteps'][] = $nextStep;
                // dd($data['enabledSteps']);
            } else {
                $data['disabledSteps'][] = $nextStep;
            }
        }

        if (empty($data['enabledSteps']) && !empty($data['steps'])) {
            $firstStep = $data['steps'][0];
            $data['enabledSteps'][] = $firstStep;
            $data['disabledSteps'] = array_slice($data['disabledSteps'], 1);
        }

        // dd($data);

        return view('mindfulness', $data);
    }

    public function techniqueGuest()
    {
        $data['steps'] = Step::with('stepquestion')->get();
        return view('mindfulness', $data);
    }


    public function breathingPhase()
    {
        return view('breathing-phase');
    }
}
