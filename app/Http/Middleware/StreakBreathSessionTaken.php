<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\StepTestTaken;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class StreakBreathSessionTaken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $stepId = $request->input('step_id');

        if ($stepId == 1) {
            return $next($request);
        }

        $sevenDaysStreak = StepTestTaken::with('user', 'step')
            ->where('user_id', auth()->user()->id)
            ->where('step_id', $stepId)
            // ->where('datenow', '>=', Carbon::now()->subDays(1))
            ->orderBy('datenow', 'desc')
            ->get();

        // check for 7 days streak taking the test
        if ($sevenDaysStreak->count() < 7) {
            return redirect()->route('home.technique')->with('error', 'Anda belum bisa mengakses halaman ini, silahkan lakukan sesi pernapasan terlebih dahulu!');
        }

        // get the steptesttaken that the last one
        $lastStepTestTaken = StepTestTaken::with('user', 'step')
            ->where('user_id', auth()->user()->id)
            ->where('step_id', $stepId)
            ->orderBy('datenow', 'desc')
            ->first();

        // loop from the last date to 6 days before exclude the last date
        for ($i = 1; $i < 7; $i++) {
            $date = Carbon::createFromFormat('Y-m-d H:i:s', $lastStepTestTaken->datenow)->subDays($i);
            printf("$date in  $i days\n");
            $date = $date->format('Y-m-d');

            $checkStreak = StepTestTaken::with('user', 'step')
                ->where('user_id', auth()->user()->id)
                ->where('step_id', $stepId)
                ->whereDate('datenow', $date)
                ->first();

            if (!$checkStreak) {
                return redirect()->route('home.technique')->with('error', 'Anda belum bisa mengakses halaman ini, silahkan lakukan sesi pernapasan terlebih dahulu!');
            }
        }

        dd("success");
        return $next($request);
    }
}
