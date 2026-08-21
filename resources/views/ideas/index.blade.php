<x-layout>
    <div class="mt-6">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-white">Your Ideas</h2>
            <a href="{{ route('ideas.create') }}" 
               class="bg-indigo-500 hover:bg-indigo-600 text-white px-4 py-2 rounded-lg transition">
                + New Idea
            </a>
        </div>

        @if($ideas->count() > 0)
            <div class="space-y-3">
                @foreach($ideas as $idea)
                    <div class="bg-white/10 backdrop-blur-sm p-4 rounded-lg hover:bg-white/15 transition">
                        <div class="flex justify-between items-center">
                            <div class="flex-1">
                                <a href="{{ route('ideas.show', $idea->id) }}" 
                                   class="text-white hover:text-indigo-300 text-lg">
                                    {{ $idea->description }}
                                </a>
                                <div class="mt-1">
                                    <span class="text-xs px-2 py-1 rounded-full 
                                        {{ $idea->state == 'completed' ? 'bg-green-500/30 text-green-300' : 'bg-yellow-500/30 text-yellow-300' }}">
                                        {{ $idea->state }}
                                    </span>
                                </div>
                            </div>
                            <div class="flex gap-2">
                                <a href="{{ route('ideas.edit', $idea->id) }}" 
                                   class="text-blue-400 hover:text-blue-300 text-sm">
                                    Edit
                                </a>
                                <form method="POST" action="{{ route('ideas.destroy', $idea->id) }}" 
                                      class="inline" 
                                      onsubmit="return confirm('Delete this idea?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-400 hover:text-red-300 text-sm">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="bg-white/5 backdrop-blur-sm p-8 rounded-lg text-center">
                <p class="text-gray-400 mb-4">No ideas yet. Start by creating your first idea!</p>
                <a href="{{ route('ideas.create') }}" 
                   class="bg-indigo-500 hover:bg-indigo-600 text-white px-6 py-2 rounded-lg transition inline-block">
                    Create Your First Idea
                </a>
            </div>
        @endif
    </div>
</x-layout>