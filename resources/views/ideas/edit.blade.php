<x-layout>
    <div class="card bg-base-200 shadow-xl">
        <div class="card-body">
            <h2 class="card-title text-2xl mb-4">Edit Your Idea</h2>
            
            <form method="POST" action="{{ route('ideas.update', $idea->id) }}">
                @csrf
                @method('PATCH')
                
                <div class="form-control">
                    <label for="description" class="label">
                        <span class="label-text">Edit your idea</span>
                    </label>
                    <textarea 
                        id="description" 
                        name="description" 
                        rows="4"
                        class="textarea textarea-bordered w-full @error('description') textarea-error @enderror"
                    >{{ old('description', $idea->description) }}</textarea>
                    <x-forms.error name="description" />
                </div>
                
                <div class="mt-6 flex gap-3">
                    <button type="submit" class="btn btn-primary">Update Idea</button>
                    <a href="{{ route('ideas.index') }}" class="btn btn-ghost">Cancel</a>
                </div>
            </form>
            
            <!-- Delete Form -->
            <div class="divider">Danger Zone</div>
            <form method="POST" action="{{ route('ideas.destroy', $idea->id) }}" 
                  onsubmit="return confirm('Are you sure you want to delete this idea?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-error">Delete Idea</button>
            </form>
        </div>
    </div>
</x-layout>