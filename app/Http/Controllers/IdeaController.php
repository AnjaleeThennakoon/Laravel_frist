<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use App\Http\Requests\StoreIdeaRequest;
use Illuminate\Support\Facades\Auth;

class IdeaController extends Controller
{
    /**
     * Display all ideas.
     */
    public function index()
    {
//        $ideas = Idea::query()->where([
//            'user_id'=> Auth::id(), //get the current logged-in user
//        ])->get();

        return
            view('ideas.index',[
            'ideas' =>Auth::user()->ideas,
        ]);
    }

    /**
     * Show the form for creating a new idea.
     */
    public function create()
    {
        return view('ideas.create');
    }

    /**
     * Store a newly created idea.
     */
    public function store(StoreIdeaRequest $request)
    {
        Auth::user()->ideas()->create([
            'description' => $request->validated()['description'],
            'state' => 'pending',
        ]);


        return redirect('/ideas');

    }

    /**
     * Display the specified idea.
     */
    public function show(Idea $idea)
    {
        return view('ideas.show', compact('idea'));
    }

    /**
     * Show the form for editing the specified idea.
     */
    public function edit(Idea $idea)
    {
        return view('ideas.edit', compact('idea'));
    }

    /**
     * Update the specified idea.
     */
    public function update(StoreIdeaRequest $request, Idea $idea)
    {
        $idea->update([
            'description' => $request->validated()['description'],
        ]);

        return redirect()
            ->route('ideas.index')
            ->with('success', 'Idea updated successfully!');
    }

    /**
     * Remove the specified idea.
     */
    public function destroy(Idea $idea)
    {
        $idea->delete();

        return redirect()
            ->route('ideas.index')
            ->with('success', 'Idea deleted successfully! 🗑');
    }
}
