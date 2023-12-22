<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz; // Make sure to import your Quiz model

class QuizController extends Controller
{
    public function create()
    {
        return view('quiz.create');
    }

    public function store(Request $request)
    {
        // Validation rules can be added here
        // ...

        // Create a new quiz record
        $quiz = Quiz::create($request->all());

        return redirect()->route('quiz.edit', ['id' => $quiz->id])
            ->with('success', 'Quiz created successfully!');
    }

    public function edit($id)
    {
        $quiz = Quiz::findOrFail($id);

        return view('quiz.edit', compact('quiz'));
    }

    public function update(Request $request, $id)
    {
        // Validation rules can be added here
        // ...

        $quiz = Quiz::findOrFail($id);
        $quiz->update($request->all());

        return redirect()->back()->with('success', 'Quiz updated successfully!');
    }
}