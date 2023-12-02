<?php

namespace App\Http\Controllers;

use App\Models\novel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class authorController extends Controller
{
    public function index()
    {
        $cerita = novel::orderby('id');
        return view('Author.Tulis', ['cerita' => $cerita]);
    }
    public function new()
    {
        return view('Author.Addcerita');
    }
    public function store(Request $request)
    {
        $novel = novel::create($request->all());
        if ($novel) {
            Session::flash('status', 'succes');
            Session::flash('message', 'penambahan data berhasil');
        }
        return redirect('/tulis-author');
    }
}
