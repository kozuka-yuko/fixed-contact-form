<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Category;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contents = Category::all();
        return view('index', compact('contents'));
    }

    public function confirm(ContactRequest $request)
    {
        $request->all();
        $content = Category::where('content', $request->content)->first();
        $fullName = $request->first_name. "". $request->last_name;
        $tel = $request->tel1. '-'. $request->tel2. '-'. $request->tel3;
        $gender = $request->input('gender');
        if ($gender == 'male') {
            $gender_display = '男性';
        } elseif ($gender == 'female') {
            $gender_display = '女性';
        } elseif ($gender == 'other') {
            $gender_display = 'その他';
        }

        return view('confirm', compact('request', 'fullName', 'tel', 'gender_display', 'content'));
    }

    public function store(Request $request)
    {
        $tel = $request->tel1 . '-' . $request->tel2 . '-' . $request->tel3;
        $data = $request->only(['first_name', 'last_name', 'gender', 'email', 'address', 'building', 'detail', 'category_id']);
        $data['tel'] = $tel;

        Contact::create($data);

        return view('thanks');
    }
}
