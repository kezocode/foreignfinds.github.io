<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BudgetCalculatorController extends Controller
{
    public function index()
    {
        return view('travel-calculator');
    }

    public function calculate(Request $request)
    {
        $validated = $request->validate([
            'people_count' => 'required|integer|min:1',
            'trip_days' => 'required|integer|min:1',
            'accommodation' => 'required|numeric',
            'food' => 'required|numeric',
            'transport' => 'required|numeric',
            'other_expenses' => 'required|numeric|min:0',
        ]);

        $people = $validated['people_count'];
        $days = $validated['trip_days'];
        $accommodation = $validated['accommodation'];
        $food = $validated['food'];
        $transport = $validated['transport'];
        $otherExpenses = $validated['other_expenses'];

        $totalCost = ($days * $accommodation) + ($days * ($food + $transport) * $people) + ($otherExpenses * $people);

        return response()->json([
            'total_cost' => $totalCost
        ]);

    }
}
