<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Register extends Component
{
    public $name;

    public $email;

    public $password;

    public $password_confirmation;

    protected function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];
    }

    public function store()
    {
        $formData = $this->validate();
        $formData['password'] = Hash::make($formData['password']);

        DB::transaction(function () use ($formData) {
            $user = User::create($formData);

            $userRole = Role::findOrCreate('user');

            $user->assignRole($userRole);

            event(new Registered($user));

            Auth::login($user);
        });

        return redirect(RouteServiceProvider::HOME);
    }

    public function render()
    {
        return view('livewire.auth.register')->layout('layouts.guest');
    }
}
