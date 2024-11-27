<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;

class ServeyController extends Controller
{
    public function index()
    {
        return view('index');
    }

    // 確認ボタン実行時の処理
    public function confirm(Request $request)
    {
        $contact = $request->only(['name', 'gender', 'age', 'email', 'feedback']);

        return view('confirm', compact('contact'));
    }

    public function store(Request $request)
    {
        $contact = $request->
        only(['name', 'gender', 'age', 'email', 'feedback']);
        return redirect('/servey');
    }
}
