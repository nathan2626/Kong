<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserForm extends Component
{

    public $user;

    protected $rules = [
        'user.name' => 'required|string|min:4',
        'user.email' => 'required|string|min:10'
    ];

    public function save()
    {
        $this->validate();
        $this->user->save();
        $this->emit('userUpdated');

    }

    public function render()
    {
        return view('livewire.user-form');
    }
}
