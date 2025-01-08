<?php

namespace App\Http\Controllers;

use App\Models\Bread;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'breads' => Bread::all(),
            'name' => 'Toto',
            'cars' => [
                'BMW',
                'Mercedes',
                'Audi'
            ],
        ]);
    }
}
