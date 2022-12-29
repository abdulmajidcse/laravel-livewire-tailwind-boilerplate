<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class DeleteUserAccount extends Component
{
    public $password;

    protected function rules()
    {
        return [
            'password' => ['required', 'current-password'],
        ];
    }

    public function store()
    {
        $this->validate();

        $user = Auth::user();

        Auth::logout();

        $user->delete();

        session()->invalidate();
        session()->regenerateToken();

        return redirect('/');
    }

    public function render()
    {
        return view('livewire.auth.delete-user-account');
    }
}
