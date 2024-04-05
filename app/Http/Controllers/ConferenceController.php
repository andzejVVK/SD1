<?php
// opowiada za funkcjonalnosc

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    public function showConference()
    {
        return view('conference');
    }

    public function startconference()
    {
        return view('startconference');
    }

    public function addpeople()
    {
        return view('addpeople');
    }

    public function apieusers()
    {
        return view('apieusers');
    }

    public function apieadmins()
    {
        return view('apieadmins');
    }

    public function contac()
    {
        return view('contac');
    }

    public function rules()
    {
        return view('rules');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }
}
