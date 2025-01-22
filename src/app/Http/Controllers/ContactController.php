<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('/index');
    }

    public function confirm(ContactRequest $request)
    {
        $request->all();

        return view('/confirm', compact('request'));
    }
}
