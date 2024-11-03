<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Todo;

class TodoList extends Component
{

    public $todos;
    public $completedTodos;

    protected $listeners = ['todoAdded' => 'loadTodos'];

    public function mount()
    {
        $this->loadTodos();
    }

    public function loadTodos()
    {
        $this->todos = Todo::where('is_completed', false)->get();
        $this->completedTodos = Todo::where('is_completed',true)->get();
    }

    public function toggleCompletion($todoId)
    {
        $todo = Todo::find($todoId);
        if ($todo) {
            $todo->is_completed = !$todo->is_completed;
            $todo->save();
            $this->loadTodos();
        }
    }

    public function deleteTask($todoId)
    {
        $todo = Todo::find($todoId);
        if ($todo) {
            $todo->delete();
            $this->loadTodos();
        }
    }

    public function render()
    {
        return view('livewire.todo-list');
    }
}
