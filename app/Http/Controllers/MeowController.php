<?php

namespace App\Http\Controllers;

class MeowController extends Controller
{
    public function index(): string
    {
        return 'Liste des meowssages';
    }

    public function show($id): string
    {
        return "Un meowssage " . $id;
    }
}
