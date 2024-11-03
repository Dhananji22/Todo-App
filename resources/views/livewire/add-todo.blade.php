<div class="pt-5 mx-40">
    <h1 class="p-5 text-3xl font-bold tracking-tight text-gray-900 2xl">Add Tasks</h1>
    <form wire:submit.prevent='addTodo'>
        <div>
            <label for="title" class="block font-medium text-gray-900 text-sm/6">Title</label>
            <input type ="text" id="title" wire:model='title' required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">

        </div>

        <div>
            <label for="body" class="block font-medium text-gray-900 text-sm/6">Body</label>
            <textarea id="body" wire:model='body' required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"></textarea>

        </div>

        <div class="flex items-center justify-end mt-6 gap-x-6">
        <button type="submit" class="px-3 py-2 text-sm font-semibold text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add todo</button>
        </div>
    </form>

</div>
