<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'username_signup' => ['required', 'string', 'max:255'],
            'email_signup' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            // 'password_signup' => ['required', 'confirmed', Rules\Password::defaults()],
            'password_signup' => ['required', Rules\Password::defaults()],
            'password_confirmation' => ['required', 'same:password_signup'],
        ]);

        // dd(Hash::make($request->password_signup));

        // $validated = $request->validated();

        $user = User::create([
            'name' => $request->username_signup,
            'email' => $request->email_signup,
            'password' => Hash::make($request->password_signup),
        ]);

        event(new Registered($user));

        Auth::login($user);

        // return redirect(RouteServiceProvider::HOME);
        return redirect(RouteServiceProvider::ROOT);
    }
}