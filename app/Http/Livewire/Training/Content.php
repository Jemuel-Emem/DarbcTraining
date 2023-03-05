<?php

namespace App\Http\Livewire\Training;

use Livewire\Component;

class Content extends Component
{
    public function render()
    {
        return view('livewire.training.content')->layout('livewire.layouts.base');
    }
}
