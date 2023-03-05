<?php

namespace App\Http\Livewire\Training;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logins extends Component
{
    public $email;
    public $password;

    public $form = [
        'email'   => '',
        'password'=> '',
    ];

    public function submit()
    {
        $this->validate([
            'form.email'    => 'required|email',
            'form.password' => 'required',
        ]);

        Auth::attempt($this->form);
        return redirect(route('home'));
    }

    public function render()
    {
        return view('livewire.training.logins');
    }
}
