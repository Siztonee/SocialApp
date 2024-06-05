<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Twilio\Rest\Client;
use function auth;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'first_name' => ['required', 'string', 'min:3', 'max:35'],
            'last_name' => ['required', 'string', 'min:3', 'max:55'],
            'username' => ['required', 'string', 'min:3', 'max:15', 'unique:' . User::class],
            'tel' => 'sometimes|string|min:7|max:16|unique:users,mobile',
            'gender' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);


        $user = User::create([
            'uuid' => Str::uuid(),
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'username' => $request->username,
            'gender' => $request->gender,
            'mobile' => $request->tel,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        if ($request->email) {
            auth()->user()->sendEmailVerificationNotification();

            return redirect(route('verification.notice', absolute: false))->with('status', 'verification-link-sent');
        } else {
            $user = User::find(auth()->id());
            $otp = random_int(100000, 999999);
            $user->mobile_verification_code = $otp;
            $user->save();

            $sid = "AC4118dbf14d2e33f073b85eb4884b54e0";
            $token = "6fcbb1e2c451cdd7bfdc50627a9360de";
            $client = new Client($sid, $token);

            // Use the Client to make requests to the Twilio REST API
            $client->messages->create(
            // The number you'd like to send the message to
                '+996550688795',
                [
                    'from' => '+12253141378',
                    'body' => "Thanks for registering on ". config('app.name'). " your OTP is: ".$otp
                ]
            );

            return redirect(route('phone.verification.notice', absolute: false))
                ->with('status', 'verification-link-sent');

        }

    }
}
