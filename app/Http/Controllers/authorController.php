<?php

namespace App\Http\Controllers;

use App\Models\novel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

// @dd($cerita);
class authorController extends Controller
{
    public function index()
    {
        $cerita = novel::orderby('id')->get();
        return view('Author.Tulis', ['cerita' => $cerita]);
    }
    public function new()
    {
        return view('Author.Addcerita');
    }
    public function store(Request $request)
    {
        $cerita = novel::create($request->all());
        if ($cerita) {
            Session::flash('status', 'succes');
            Session::flash('message', 'penambahan data berhasil');
        }
        return redirect('/tulis-author');
    }
}
