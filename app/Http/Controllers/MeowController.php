<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MeowController extends Controller
{
    public function index(): \Illuminate\View\View
    {
        $meows = DB::table('meows')->get();
        return view('meows-list')->with('meows', $meows);
    }

    public function show($id): \Illuminate\View\View
    {
        $meow = DB::table('meows')->where('id', $id)->first();
        if (!$meow) {
            abort(404, 'Meow not found');
        }
        return view('meow-detail')->with('meow', $meow);
    }
}
