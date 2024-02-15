<?php

namespace App\Http\Controllers\routing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
        return view('home');
    }

    public function show($id) {
        return view('home-show', ['id' => $id]);
    }

    public function create() {
        $name = '';
        return view('home-create', compact('name'));
    }

    public function store(Request $request) {
        // dd($request->all());

        $name = $request->get('name');

        return view('home-create', compact('name'));
    }
}
