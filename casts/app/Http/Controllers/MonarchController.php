<?php

namespace App\Http\Controllers;
use App\Models\Monarch;
Use DB;

use Illuminate\Http\Request;

class MonarchController extends Controller
{
    public function show($slug) {
        $monarch = Monarch::findorFail($slug);

        return view('monarch', [
           'monarch' => $monarch
        ]);
    }


    public function index() {
        $monarchs = Monarch::all();

        return view('monarchs', ['monarchs' => $monarchs]);
    }
}
