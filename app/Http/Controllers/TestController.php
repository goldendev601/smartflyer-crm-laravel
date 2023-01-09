<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;

class TestController extends Controller
{
    public function __invoke()
    {
        return Hash::make("Sm2022!");
    }
}