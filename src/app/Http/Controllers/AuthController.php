<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class AuthController extends Controller
{
    public function admin()
    {
        $contacts = Contact::all();

        return view('admin', compact('contacts'));
    }
}
