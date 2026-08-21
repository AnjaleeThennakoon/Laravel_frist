<x-layout>
    <div class="card bg-base-200 shadow-xl">
        <div class="card-body">
            <div class="flex justify-between items-start">
                <h2 class="card-title text-2xl">Idea Details</h2>
                <span class="badge {{ $idea->state == 'completed' ? 'badge-success' : 'badge-warning' }} text-lg px-4 py-3">
                    {{ $idea->state }}
                </span>
            </div>
            
            <div class="py-4">
                <p class="text-lg leading-relaxed">{{ $idea->description }}</p>
            </div>
            
            <div class="text-sm opacity-50">
                <p>Created: {{ $idea->created_at->diffForHumans() }}</p>
                <p>Updated: {{ $idea->updated_at->diffForHumans() }}</p>
            </div>
            
            <div class="card-actions justify-end mt-6">
                <a href="{{ route('ideas.edit', $idea->id) }}" class="btn btn-primary">Edit</a>
                <form method="POST" action="{{ route('ideas.destroy', $idea->id) }}" 
                      onsubmit="return confirm('Delete this idea?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-error">Delete</button>
                </form>
                <a href="{{ route('ideas.index') }}" class="btn btn-ghost">Back</a>
            </div>
        </div>
    </div>
</x-layout>