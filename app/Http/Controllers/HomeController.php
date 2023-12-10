<?php

namespace App\Http\Controllers;

use App\Models\Step;
use App\Models\Test;
use Illuminate\Http\Request;

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
        return view('mindfulness', $data);
    }

    public function breathingPhase()
    {
        return view('breathing-phase');
    }
}
