@props(['idea'])

<div class="card bg-base-200 shadow-xl hover:shadow-2xl transition-shadow">
    <div class="card-body">
        <p class="text-lg">{{ $idea->description }}</p>
        <div class="flex justify-between items-center mt-2">
            <span class="badge {{ $idea->state == 'completed' ? 'badge-success' : 'badge-warning' }}">
                {{ $idea->state }}
            </span>
            <div class="flex gap-2">
                <a href="{{ route('ideas.edit', $idea->id) }}" class="btn btn-xs btn-primary">Edit</a>
                <form method="POST" action="{{ route('ideas.destroy', $idea->id) }}" 
                      onsubmit="return confirm('Delete this idea?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-xs btn-error">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>