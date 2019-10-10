<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function followUser(User $user)
    {
        $user->followers()->sync(auth()->user()->id, false);
        return redirect()->back()->with('success', 'You started following ' . $user->username);
    }

    /**
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function unFollowUser(User $user)
    {
        $user->followers()->detach(auth()->user()->id);
        return redirect()->back()->with('success', 'You stopped following ' . $user->username);
    }
}
