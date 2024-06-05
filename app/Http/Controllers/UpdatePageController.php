<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UpdatePageController extends Controller
{
    public function __invoke(ProfileUpdateRequest $request)
    {
        $user = User::where('id', Auth::id())->first();

        if (empty($request->username) || $request->username == $user->username) {
            unset($request->username);
        }

        $data = $request->validated();

        if ($request->profile && $request->profile != $user->profile) {
            $data['profile'] = $request->file('profile')->store('public/profiles');
        }

        if ($request->profile_bg && $request->profile_bg != $user->profile_bg) {
            $data['profile_bg'] = $request->file('profile_bg')->store('public/profiles');
        }


        $test = $user->update($data);

        return redirect()->route('user.page.edit', ['uuid' => $user->uuid]);
    }
}
