<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password as PasswordFacades;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password;

class NewPasswordController extends Controller
{
    /**
     * Display the password reset view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function create(Request $request, $token)
    {
        $email = $request->input('email');
        $tokenInfo = DB::table('password_resets')
        ->where('email', $email)
        ->where('created_at','>',Carbon::now()->subHours(1))
        ->first();

        if ($tokenInfo && Hash::check($token, $tokenInfo->token)) {
            return view('auth.reset-password', ['request' => $request, 'token' => $token, 'email' => $email]);
        }

        abort(404);
    }

    /**
     * Handle an incoming new password request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'token' => ['required'],
            'password' => [
                'required',  'string',
                Password::min(8)
                    ->symbols()
                    ->numbers(),
                'confirmed'
            ],
            'password_confirmation' => 'required'
        ]);

        $status = PasswordFacades::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($request->password),
                    'remember_token' => Str::random(60),
                ])->save();
                event(new PasswordReset($user));
            }
        );

        return redirect('/login')->with('status', 'Your password has been changed!');
        
    }
}
