<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditPageController extends Controller
{
    public function __invoke()
    {
        $user = '';

        $user = User::where('id', Auth::id())->first();

        return view('edit-page', ['user' => $user]);
    }
}
