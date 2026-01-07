<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //

    public function index()
    {
        $allSessionData = Session()->all();
        return view('session', compact('allSessionData'));
    }

    public function setSession()
    {
        Session()->put('username', 'JohnDoe');
        Session()->put('email', 'johndoe@example.com');
        Session()->put('age', 25);
        Session()->put([
            'city' => 'New York',
            'country' => 'USA',
        ]);
        return redirect()
            ->route('session-index')
            ->with('success', 'Session data has been set successfully.');
    }


    public function deleteSession()
    {
        Session()->forget('username');
        Session()->forget(['email', 'age', 'city', 'country']);
        return redirect()
            ->route('session-index')
            ->with('warning', 'Session data has been deleted successfully.');
    }
}