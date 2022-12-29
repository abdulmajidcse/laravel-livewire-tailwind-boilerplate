<?php

namespace App\Http\Livewire\Auth;

use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Livewire\Component;

class Login extends Component
{
    public $email;

    public $password;

    public $remember;

    protected function rules()
    {
        return [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
            'remember' => ['nullable', 'boolean'],
        ];
    }

    public function store()
    {
        $formData = $this->validate();

        if (RateLimiter::tooManyAttempts($this->throttleKey($formData['email']), 5)) {
            event(new Lockout(request()));

            $seconds = RateLimiter::availableIn($this->throttleKey($formData['email']));

            return $this->addError('email', trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]));
        }

        $remember = $formData['remember'];
        unset($formData['remember']);

        if (!Auth::attempt($formData, $remember)) {
            RateLimiter::hit($this->throttleKey($formData['email']));

            return $this->addError('email', trans('auth.failed'));
        }

        RateLimiter::clear($this->throttleKey($formData['email']));

        request()->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Get the rate limiting throttle key for the request.
     *
     * @return string
     */
    private function throttleKey($email)
    {
        return Str::transliterate(Str::lower($email) . '|' . request()->ip());
    }

    public function render()
    {
        return view('livewire.auth.login')->layout('layouts.guest');
    }
}
