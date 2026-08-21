<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use App\Http\Requests\StoreIdeaRequest;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function index()
    {
        $ideas = Idea::all();
        return view('ideas.index', compact('ideas'));
    }

    public function create()
    {
        return view('ideas.create');
    }

    public function store(StoreIdeaRequest $request)
    {
        Idea::create([
            'description' => $request->validated()['description'],
            'state' => 'pending',
        ]);

        return redirect()->route('ideas.index')
            ->with('success', 'Idea created successfully! 🎉');
    }

    public function show(Idea $idea)
    {
        return view('ideas.show', compact('idea'));
    }

    public function edit(Idea $idea)
    {
        return view('ideas.edit', compact('idea'));
    }

    public function update(StoreIdeaRequest $request, Idea $idea)
    {
        $idea->update([
            'description' => $request->validated()['description'],
        ]);

        return redirect()->route('ideas.index')
            ->with('success', 'Idea updated successfully! ✅');
    }

    public function destroy(Idea $idea)
    {
        $idea->delete();
        
        return redirect()->route('ideas.index')
            ->with('success', 'Idea deleted successfully! 🗑️');
    }
}