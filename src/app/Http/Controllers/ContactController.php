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
        $category = Category::where('id', $request->category_id)->first();
        $tel = $request->tel1. '-'. $request->tel2. '-'. $request->tel3;
        $gender = $request->input('gender');
        if ($gender == 'male') {
            $gender_display = '男性';
        } elseif ($gender == 'female') {
            $gender_display = '女性';
        } elseif ($gender == 'other') {
            $gender_display = 'その他';
        }

        return view('confirm', compact('request', 'category', 'tel', 'gender_display'));
    }

    public function store(Request $request)
    {
        dd($request);
        $category = Category::where('content', $request->content)->first();
        $data = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'building', 'detail']);
        $data['category_id'] = $category->id;
        Contact::create($data);

        return view('thanks');
    }
}