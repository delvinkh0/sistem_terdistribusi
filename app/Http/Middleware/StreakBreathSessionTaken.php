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
        // $user = Auth::user()
        //     ->where('id', auth()->user()->id)
        //     ->first();

        // $sevenDaysStreak = StepTestTaken::with('user', 'step')
        //     ->where('user_id', auth()->user()->id)
        //     // ->where('datenow', '>=', Carbon::now()->subDays(1))
        //     ->orderBy('datenow', 'desc')
        //     ->get();

        // dd($sevenDaysStreak);

        return $next($request);
    }
}
