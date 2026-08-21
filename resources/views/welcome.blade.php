<x-layout title="Welcome">
    <h1>Welcome to the Application</h1>
    <p>
        {{ $greeting }}, {{ $person }}!
    </p>

   <!-- <ul>
        @forelse ($tasks as $task)
            <li>{{ $task }}</li>
        @empty
            <li>No tasks available.</li>
        @endforelse
    </ul> -->

    
</x-layout>