<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Todo;

class AddTodo extends Component
{

    public $title;
    public $body;

    public function addTodo()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'body' =>  'required|string',

        ]);

        Todo::create([
            'title' => $this->title,
            'body' => $this->body,
            'is_completed' => false,
        ]);

        $this->title = '';
        $this ->body = '';

        $this->emit('todoAdded');
    }

    public function render()
    {
        return view('livewire.add-todo');
    }
}
