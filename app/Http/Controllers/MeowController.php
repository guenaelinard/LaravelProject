<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MeowController extends Controller
{
    public function index(): \Illuminate\View\View
    {
        return view('meows-list');
    }

    public function show($id): \Illuminate\View\View
    {
        return view('meow-details')->with('id', $id);
    }
}
