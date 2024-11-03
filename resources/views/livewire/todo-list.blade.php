<div class="mx-40">

    <h1 class="p-5 text-3xl font-bold tracking-tight text-gray-900 2xl">My Tasks</h1>
    <h1 class="p-5 font-bold">Todo List</h1>

    <ul>
        @forelse ($todos as $todo)
            <li class="flex items-center justify-between">
                <input type="checkbox" wire:click="toggleCompletion({{ $todo->id}})" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-600">
                {{ $todo->title }}
                <button wire:click="deleteTask({{ $todo->id }})" class="text-red-400">Delete</button>

            </li>
        @empty
            No tasks
        @endforelse
    </ul>

    <h2 class="mt-5 font-bold">Completed Tasks</h2>
    <ul>
        @foreach ($completedTodos as $todo)
        <li class="flex items-center justify-between">
        <input type="checkbox" wire:click="toggleCompletion({{ $todo->id}})" checked>
        <span style="text-decoration: line-through;">{{ $todo->title }}</span>
        <button wire:click="deleteTask({{ $todo->id }})" class="text-red-400">Delete</button>
        </li>
        @endforeach
    </ul>
</div>
