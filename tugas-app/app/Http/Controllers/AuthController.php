<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('pages.form.index');
    }
    public function halamanWelcome(Request $request)
    {

        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
        ]);


        $firstName = $request->input('first_name');
        $lastName = $request->input('last_name');

        return view('pages.dashboard.index', [
            'firstName' => $firstName,
            'lastName' => $lastName,
        ]);
    }
}
