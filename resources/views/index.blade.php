<x-layout>
    @if ($ideas->count())
        <div class="mt-6 text-black">
            <h2 class="font-bold">Your Ideas</h2>
            <ul class="mt-6 grid grid-cols-2 gap-x-6">
                @foreach ($ideas as $idea)
                    <div class="card bg-neutral text-neutral-content w-96">
                        <div class="card-body items-center text-center">
                            <h2 class="card-title">{{ $idea->title }}</h2>
                            <p>{{ $idea->description }}</p>
                            <div class="card-actions justify-end">
                                <button class="btn btn-primary">Accept</button>
                                <button class="btn btn-ghost">Deny</button>
                            </div>
                        </div>
                    </div>
                    {{<a href="/idea/{{ $idea->id }}" class="text-sm block">{{ $idea->description }}</a> --}}
                @endforeach
            </ul>
        </div>
    @else
        <p>No ideas yet.<a href="ideas/create" class="underline"> Create a new one.</a> </p>
    @endif
</x-layout>
