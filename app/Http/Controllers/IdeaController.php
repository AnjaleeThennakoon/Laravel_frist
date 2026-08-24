<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use App\Http\Requests\StoreIdeaRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

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
        Gate::authorize('create',Idea::class);
        return view('ideas.create');
    }

    /**
     * Store a newly created idea.
     */
    public function store(IdeaRequest $request)
    {
        Auth::user()->ideas()->create([
            'description' => request('description'),
            'state' => 'pending',
        ]);


        return redirect('/ideas');

    }

    /**
     * Display the specified idea.
     */
    public function show(Idea $idea)
    {
        Gate::authorize('update',$idea);

        return view('ideas.show',[
            'idea' => $idea,
        ]);
    }

    /**
     * Show the form for editing the specified idea.
     */
    public function edit(Idea $idea)
    {
//        Gate::authorize('update',$idea);
        return view('ideas.edit',[
            'idea' => $idea,
        ]);
    }

    /**
     * Update the specified idea.
     */
    public function update(IdeaRequest $request, Idea $idea)
    {
        Gate::authorize('update',$idea);

        $idea->update([
            'description' => $request->description,
        ]);

        return redirect("/ideas/{$idea->id}");
//            ->route('ideas.index')
//            ->with('success', 'Idea updated successfully!');
    }

    /**
     * Remove the specified idea.
     */
    public function destroy(Idea $idea)
    {
        Gate::authorize('update',$idea);

        $idea->delete();

        return redirect('/ideas');
//            ->route('ideas.index')
//            ->with('success', 'Idea deleted successfully! 🗑');
    }
}
