<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Validation\Rule;

class UpdateProfile extends Component
{
    public User $user;
    public $name, $email;

    public function mount()
    {
        $this->name = $this->user->name;
        $this->email = $this->user->email;
    }

    protected function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique(User::class)->ignore($this->user->id)],
        ];
    }

    public function store()
    {
        $this->user->fill($this->validate());

        if ($this->user->isDirty('email')) {
            $this->user->email_verified_at = null;
        }

        $this->user->save();

        return $this->emit('statusMessage', 'Profile updated');
    }

    public function emailVerificationNotification()
    {
        if ($this->user->hasVerifiedEmail()) {
            return $this->emit('statusMessage', 'Your email address is already verified');
        }

        $this->user->sendEmailVerificationNotification();

        return $this->emit('statusMessage', __('A new verification link has been sent to your email address.'));
    }

    public function render()
    {
        return view('livewire.auth.update-profile');
    }
}
