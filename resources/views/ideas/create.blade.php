<x-layout>
    <div class="card bg-base-200 shadow-xl">
        <div class="card-body">
            <h2 class="card-title text-2xl mb-4">Create New Idea</h2>
            
            <form method="POST" action="{{ route('ideas.store') }}">
                @csrf
                
                <div class="form-control">
                    <label for="description" class="label">
                        <span class="label-text">What's your idea?</span>
                    </label>
                    <textarea 
                        id="description" 
                        name="description" 
                        rows="4"
                        class="textarea textarea-bordered w-full @error('description') textarea-error @enderror"
                        placeholder="Enter your idea here...">{{ old('description') }}</textarea>
                    <x-forms.error name="description" />
                </div>
                
                <div class="mt-6 flex gap-3">
                    <button type="submit" class="btn btn-primary">Save Idea</button>
                    <a href="{{ route('ideas.index') }}" class="btn btn-ghost">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</x-layout>