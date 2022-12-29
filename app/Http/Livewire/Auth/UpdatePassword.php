<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UpdatePassword extends Component
{
    public $current_password, $password, $password_confirmation;

    protected function rules()
    {
        return [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ];
    }

    public function store()
    {
        auth()->user()->update([
            'password' => Hash::make($this->validate()['password']),
        ]);

        $this->reset();
        return $this->emit('statusMessage', 'Password updated');
    }

    public function render()
    {
        return view('livewire.auth.update-password');
    }
}
